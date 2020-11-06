<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    protected $_table = 'mahasiswa';

    public function get_all()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('prodi', 'prodi.kode_prodi = mahasiswa.nama_prodi');
        return $this->db->get()->result_array();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row();
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->nama_lengkap = $post['nama_lengkap'];
        $this->email = $post['email'];
        $this->telepon = $post['telepon'];
        $this->alamat = $post['alamat'];
        $this->tempat_lahir = $post['tempat_lahir'];
        $this->tanggal_lahir = $post['tanggal_lahir'];
        $this->jenis_kelamin = $post['jenis_kelamin'];
        $this->nama_prodi = $post['nama_prodi'];
        $this->photo = $this->_upload_image();
        $this->status_mahasiswa = $post['status_mahasiswa'];
        $this->created_at = date('Y-m-d H:i:s');
        $this->nim = date('Ymd', strtotime($this->created_at)).$this->nama_prodi.$this->status_mahasiswa;

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->nim = $post['nim'];
        $this->nama_lengkap = $post['nama_lengkap'];
        $this->email = $post['email'];
        $this->telepon = $post['telepon'];
        $this->alamat = $post['alamat'];
        $this->tempat_lahir = $post['tempat_lahir'];
        $this->tanggal_lahir = $post['tanggal_lahir'];
        $this->jenis_kelamin = $post['jenis_kelamin'];
        $this->nama_prodi = $post['nama_prodi'];
        if (! empty($_FILES['photo']['name'])) {
            $this->photo = $this->_upload_image();
            unlink(APPPATH."../resources/admin/images/upload/mahasiswa/".$post['old_photo']);
        } else {
            $this->photo = $post['old_photo'];
        }
        $this->status_mahasiswa = $post['status_mahasiswa'];
        $this->updated_at = date('Y-m-d H:i:s');

        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_delete_image($id);

        return $this->db->delete($this->_table, array('id' => $id));
    }
    
    private function _upload_image()
    {
        $config['upload_path'] 		= APPPATH."../resources/admin/images/upload/mahasiswa/";
        $config['allowed_types'] 	= 'jpg|jpeg|png';
        $config['overwrite'] 		= true;
        $config['max_size'] 		= 2048;
        $config['encrypt_name'] 	= true;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('photo')) {
            return $this->upload->data('file_name');
        }

        return 'default.png';
    }

    private function _delete_image($id)
    {
        $mahasiswa = $this->get_by_id($id);
        if ($mahasiswa->photo != "default.png") {
            $filename = explode(".", $mahasiswa->photo)[0];
            return array_map('unlink', glob(FCPATH."resources/admin/images/upload/mahasiswa/$filename.*"));
        }
    }
}

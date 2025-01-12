<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dosen_model extends CI_Model
{
    protected $_table = 'dosen';

    public function get_all()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->_table, ['id_dosen' => $id])->row();
    }

    public function insert()
    {
        $data = array(
            'nidn' => $this->input->post('nidn'),
            'nama_dosen' => $this->input->post('nama_dosen'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'email' => $this->input->post('email'),
            'telp' => $this->input->post('telp'),
            'photo' => $this->_upload_image(),
            'created_at' => date('Y-m-d H:i:s')
        );

        return $this->db->insert($this->_table, $data);
    }


    public function update()
    {
        $post = $this->input->post();

        $this->id_dosen = $post['id'];
        $this->nidn = $post['nidn'];
        $this->nama_dosen = $post['nama_dosen'];
        $this->alamat = $post['alamat'];
        $this->jenis_kelamin = $post['jenis_kelamin'];
        $this->email = $post['email'];
        $this->telp = $post['telp'];
        if (! empty($_FILES['photo']['name'])) {
            $this->photo = $this->_upload_image();
            unlink(APPPATH."../resources/admin/images/upload/dosen/".$post['old_photo']);
        } else {
            $this->photo = $post['old_photo'];
        }
        $this->updated_at = date('Y-m-d H:i:s');

        return $this->db->update($this->_table, $this, array('id_dosen' => $post['id']));
    }

    public function delete($id)
    {
        $this->_delete_image($id);
        
        return $this->db->delete($this->_table, array('id_dosen' => $id));
    }

    private function _upload_image()
    {
        $config['upload_path'] 		= APPPATH."../resources/admin/images/upload/dosen/";
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
        $dosen = $this->get_by_id($id);
        if ($dosen->photo != "default.png") {
            $filename = explode(".", $dosen->photo)[0];
            return array_map('unlink', glob(FCPATH."resources/admin/images/upload/dosen/$filename.*"));
        }
    }
}

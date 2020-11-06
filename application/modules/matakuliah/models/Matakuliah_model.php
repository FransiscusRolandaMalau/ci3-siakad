<?php defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah_model extends CI_Model
{
    protected $_table = 'matakuliah';

    public function get_all()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->_table, ['id_matakuliah' => $id])->row();
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->kode_matakuliah = $post['kode_matakuliah'];
        $this->nama_matakuliah = $post['nama_matakuliah'];
        $this->sks = $post['sks'];
        $this->semester = $post['semester'];
        $this->nama_prodi = $post['nama_prodi'];
        $this->created_at = date('Y-m-d H:i:s');

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();

        $this->id_matakuliah = $post['id'];
        $this->kode_matakuliah = $post['kode_matakuliah'];
        $this->nama_matakuliah = $post['nama_matakuliah'];
        $this->sks = $post['sks'];
        $this->semester = $post['semester'];
        $this->nama_prodi = $post['nama_prodi'];
        $this->updated_at = date('Y-m-d H:i:s');

        return $this->db->update($this->_table, $this, array('id_matakuliah' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id_matakuliah' => $id));
    }
}

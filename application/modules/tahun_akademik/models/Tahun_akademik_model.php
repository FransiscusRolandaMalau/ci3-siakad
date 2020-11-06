<?php defined('BASEPATH') or exit('No direct script access allowed');

class Tahun_akademik_model extends CI_Model
{
    protected $_table = 'tahun_akademik';

    public function get_all()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row();
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->tahun_akademik = $post['tahun_akademik'];
        $this->semester = $post['semester'];
        $this->status = $post['status'];
        $this->created_at = date('Y-m-d H:i:s');

        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->tahun_akademik = $post['tahun_akademik'];
        $this->semester = $post['semester'];
        $this->status = $post['status'];
        $this->updated_at = date('Y-m-d H:i:s');

        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id' => $id));
    }
}

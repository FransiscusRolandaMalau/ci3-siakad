<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function ambil_data($id)
    {
        $this->db->where('name', $id);
        return $this->db->get('users')->row();
    }
}

<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
	public function count_prodi()
	{
		return $this->db->get('prodi')->num_rows();
	}

	public function count_matakuliah()
	{
		return $this->db->get('matakuliah')->num_rows();
	}

	public function count_mahasiswa()
	{
		return $this->db->get('mahasiswa')->num_rows();
	}

	public function count_dosen()
	{
		return $this->db->get('dosen')->num_rows();
	}

    public function ambil_data($id)
    {
        $this->db->where('name', $id);
        return $this->db->get('users')->row();
    }
}

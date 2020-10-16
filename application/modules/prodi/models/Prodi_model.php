<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_model extends CI_Model
{
	protected $table = 'prodi';

	public function getAll()
	{
		return $this->db->query("SELECT * FROM prodi ORDER BY id_prodi ASC")->result_array();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->table, ['id_prodi' => $id])->row();
	}

	public function insert()
	{
		$data = array(
			'kode_prodi' => $this->input->post('kode_prodi'),
			'nama_prodi' => $this->input->post('nama_prodi'),
		);
	
		return $this->db->insert($this->table, $data);
	}

	public function update($id)
	{

		$data = array(
			'kode_prodi' => $this->input->post('kode_prodi'),
			'nama_prodi' => $this->input->post('nama_prodi'),
		);

		return $this->db->update($this->table, $data, array('id_prodi', $id));
	}

	public function delete($id)
	{
		return $this->db->query("DELETE FROM prodi WHERE id_prodi = $id");
	}
}

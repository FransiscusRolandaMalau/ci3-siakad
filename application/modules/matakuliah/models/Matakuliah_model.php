<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah_model extends CI_Model
{
	protected $_table = 'matakuliah';

	public function getAll()
	{
		return $this->db->query("SELECT * FROM matakuliah ORDER BY kode_matakuliah ASC")->result_array();
	}

	public function getIdBy($id)
	{
		return $this->db->get_where($this->table, ['kode_matakuliah' => $id])->row();
	}

	public function insert()
	{
		$data = array(
			'kode_matakuliah' => $this->input->post('kode_matakuliah'),
			'nama_matakuliah' => $this->input->post('nama_matakuliah'),
			'sks' => $this->input->post('sks'),
			'semester' => $this->input->post('semester'),
			'nama_prodi' => $this->input->post('nama_prodi')
		);

		return $this->db->insert($this->table, $data);
	}

	public function update($id)
	{
		$data = array(
			'kode_matakuliah' => $this->input->post('kode_matakuliah'),
			'nama_matakuliah' => $this->input->post('nama_matakuliah'),
			'sks' => $this->input->post('sks'),
			'semester' => $this->input->post('semester'),
			'nama_prodi' => $this->input->post('nama_prodi')
		);

		return $this->db->update($this->table, $data, array('kode_matakuliah', $id));
	}

	public function delete($id)
	{
		return $this->db->query("DELETE FROM matakuliah WHERE kode_matakuliah = $id");
	}
}

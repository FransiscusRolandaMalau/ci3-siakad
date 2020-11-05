<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_model extends CI_Model
{
	protected $_table = 'prodi';

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ['id_prodi' => $id])->row();
	}

	public function insert()
	{
		$data = array(
			'kode_prodi' => $this->input->post('kode_prodi'),
			'nama_prodi' => $this->input->post('nama_prodi'),
			'created_at' => date('Y-m-d H:i:s')
		);
	
		return $this->db->insert($this->_table, $data);
	}

	public function update($id)
	{
		$data = array(
			'id_prodi' => $this->input->post('id'),
			'kode_prodi' => $this->input->post('kode_prodi'),
			'nama_prodi' => $this->input->post('nama_prodi'),
			'updated_at' => date('Y-m-d H:i:s')
		);
		
		return $this->db->update($this->_table, $data, array('id_prodi' => $id));
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array('id_prodi' => $id));
	}
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model
{
	protected $table = "jurusan";
	public function getAll()
	{
		return $this->db->query("SELECT * FROM jurusan ORDER BY id_jurusan ASC")->result_array();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->table, ['id_jurusan' => $id])->row();
	}

	public function insert()
	{
		$data = array(
			'kode_jurusan' => $this->input->post('kode_jurusan'),
			'nama_jurusan' => $this->input->post('nama_jurusan'),
		);

		return $this->db->insert($this->table, $data);
	}

	public function update($id)
	{
		$data = array(
			'kode_jurusan' => $this->input->post('kode_jurusan'),
			'nama_jurusan' => $this->input->post('nama_jurusan')
		);
		
		return $this->db->update($this->table, $data, array('id_jurusan' => $id));
	}

	public function delete($id)
	{
		return $this->db->query("DELETE FROM jurusan WHERE id_jurusan = $id");
	}
}

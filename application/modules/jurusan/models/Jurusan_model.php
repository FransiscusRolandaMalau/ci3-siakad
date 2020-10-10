<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model
{
	private $model = "jurusan";

	public function rules()
	{
		return [
			[
				'field' => 'kode_jurusan',
				'label' => 'Kode Jurusan',
				'rules' => 'required'
			],
			[
				'field' => 'nama_jurusan',
				'label' => 'Nama Jurusan',
				'rules' => 'required'
			],
		];
	}

	public function getAll()
	{
		return $this->db->query("SELECT * FROM jurusan ORDER BY id_jurusan DESC")->result_array();
	}

	public function getById($id)
	{
		return $this->db->query("SELECT * FROM jurusan WHERE id = $id")->row_array();
	}

	public function save()
	{

	}

	public function update()
	{

	}

	public function delete($id_jurusan)
	{
		return $this->db->query("DELETE FROM jurusan WHERE id_jurusan = $id_jurusan");
	}
}

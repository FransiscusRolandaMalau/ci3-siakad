<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model
{
	protected $_table = 'dosen';

	public function getAll()
	{
		return $this->db->query("SELECT * FROM dosen ORDER BY id_dosen ASC")->result_array();
	}

	public function getById($id)
	{
		
	}

	public function insert()
	{

	}


	public function update()
	{

	}

	public function delete()
	{

	}
}

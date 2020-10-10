<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model
{
	protected $model;
	public function __construct()
	{
		parent::__construct();
		$this->model = 'jurusan';
	}

	public function get_all_jurusan()
	{
		// $query = $this->db->query("SELECT * FROM jurusan ORDER BY id_jurusan DESC");
		// return $query->result_array();
		return $this->db->get($this->model)->result_array();
	}

	public function get_jurusan_id($id)
	{
		return $this->db->query('SELECT id FROM jurusan');
	}
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Users';
		$data['content'] = $this->load->view('index', $data, TRUE);
		$this->load->view('template-admin/main', $data);
	}
}

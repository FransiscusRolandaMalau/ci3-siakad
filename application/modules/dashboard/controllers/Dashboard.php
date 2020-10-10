<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Dashboard_model');
		if (!isset($this->session->userdata['username'])) {
			$this->session->set_flashdata('flash', 'Kamu belum login!');
			redirect(base_url().'auth/login');
		}
	}
	public function index()
	{
		$data = $this->Dashboard_model->ambil_data($this->session->userdata['name']);
		$data = array(
			'title' => 'Dashboard',
			'name' => $data->name,
			'level' => $data->level,
		);
		$data['title'] = 'Dashboard';
		$data['content'] = $this->load->view('dashboard', $data, TRUE);
		$this->load->view('template-admin/main', $data);
	}
}

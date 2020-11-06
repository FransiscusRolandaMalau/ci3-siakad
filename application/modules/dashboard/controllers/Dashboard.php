<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('dashboard_model');
    }
    
    public function index()
    {
		$data['prodi'] = $this->dashboard_model->count_prodi();
		$data['matakuliah'] = $this->dashboard_model->count_matakuliah();
		$data['mahasiswa'] = $this->dashboard_model->count_mahasiswa();
		$data['dosen'] = $this->dashboard_model->count_dosen();
        $data['title'] = 'Dashboard';
        $data['content'] = $this->load->view('dashboard', $data, true);
        $this->load->view('template-admin/main', $data);
    }
}

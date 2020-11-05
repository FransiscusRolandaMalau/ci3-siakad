<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Dashboard_model');
    }
    
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['content'] = $this->load->view('dashboard', $data, true);
        $this->load->view('template-admin/main', $data);
    }
}

<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function login()
    {
        if ($this->input->post()) {
            if ($this->auth_model->doLogin()) {
                redirect(base_url().'dashboard');
            }
        }
        
        $data['title'] = 'Login';
        $data['content'] = $this->load->view('login', $data, true);
        $this->load->view('template-auth/main', $data);
    }


    public function register()
    {
        $data['title'] = 'Register';
        $data['content'] = $this->load->view('register', $data, true);
        $this->load->view('template-auth/main', $data);
    }

    public function proses_register()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.username]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register';
            $data['content'] = $this->load->view('register', $data, true);
            $this->load->view('template-auth/main', $data);
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $created_at = date('Y-m-d H:i:s');
            $data = [
                'name' => $name,
                'email' => $email,
                'username' => $username,
                'password' => $password,
                'created_at' => $created_at,
            ];
            $insert = $this->auth_model->register("users", $data);
            if ($insert) {
                echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.base_url('auth/login').'";</script>';
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('flash', 'Anda telah logout!');
        redirect(base_url().'auth/login');
    }
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function login()
	{
		$data['title'] = 'Login';
		$data['content'] = $this->load->view('login', $data, TRUE);
		$this->load->view('template-auth/main', $data);
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
			$data['content'] = $this->load->view('login', $data, TRUE);
			$this->load->view('template-auth/main', $data);
        } else {
			$username = htmlspecialchars($this->input->post('username'));
			$password = htmlspecialchars($this->input->post('password'));

			$cek_login = $this->Auth_model->cek_login($username);

			if ($cek_login == TRUE) {
				if (password_verify($password, $cek_login['password'])) {
					$this->session->set_userdata('username', $cek_login['username']);
					$this->session->set_userdata('name', $cek_login['name']);
					$this->session->set_userdata('level', $cek_login['level']);
					$this->session->set_userdata('email', $cek_login['email']);

					if ($cek_login['level'] == 'admin') {
						redirect(base_url().'dashboard');
					} else {
						redirect(base_url().'auth/register');
					}
				} else {
					$this->session->set_flashdata('flash', 'Password you entered is incorrect. Please try again');
					return redirect(base_url().'auth/login');
				}
			} else {
				$this->session->set_flashdata('flash', 'Incorrect username or password|The username or password you entered is incorrect. Please try again');
				return redirect(base_url().'auth/login');
			}
		}
	}

	public function register()
	{
		$data['title'] = 'Register';
		$data['content'] = $this->load->view('register', $data, TRUE);
		$this->load->view('template-auth/main', $data);
	}

	public function proses_register()
	{
		$this->form_validation->set_rules('name', 'Nama', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]|xss_clean');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.username]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Register';
			$data['content'] = $this->load->view('register', $data, TRUE);
			$this->load->view('template-auth/main', $data);
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$created_at = format_indo(date('Y-m-d H:i:s'));
			$data = [
				'name' => $name,
				'email' => $email,
				'username' => $username,
				'password' => $password,
				'created_at' => $created_at,
			];
			$insert = $this->Auth_model->register("users", $data);
			if($insert) {
				echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.base_url('auth/login').'";</script>';
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		echo 'alert("Logout Successfully."); window.location.href="'.base_url().'auth/login'.'"';
	}
}

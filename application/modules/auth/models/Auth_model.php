<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
		$this->data = 'users';
	}
	public function cek_login($username)
	{
		$query = $this->db->where('username', $username)->limit(1)->get('users');
		if ($query->num_rows() > 0) {
			$hasil = $query->row_array();
		} else {
			$hasil = array();
		}
		return $hasil;
	}

	public function get_login_data($user, $pass)
	{
		$u = $user;
		$p = password_hash($pass, PASSWORD_BCRYPT);

		$query_cek_login = $this->db->get_where('users', array('username' => $u, 'password' => $p));

		if (count($query_cek_login->result()) > 0) {
			foreach ($query_cek_login->result() as $value) {
				foreach ($query_cek_login->result() as $value) {
					$sess_data['logged_in'] = TRUE;
					$sess_data['username'] = $value->username;
					$sess_data['password'] = $value->password;
					$sess_data['level'] = $value->level;
					$this->session->set_userdata($sess_data);
				}
				redirect(base_url().'dashboard');
			}
		} else {
			$this->session->set_flashdata('flash', 'Username atau Password Salah');
			redirect(base_url().'login');
		}
	}

	public function register($table, $data)
	{
		return $this->db->insert($table, $data);
	}
}

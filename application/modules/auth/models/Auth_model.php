<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    protected $table = "users";
    
    public function doLogin()
    {
        $post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('email', $post["email"])
                ->or_where('username', $post["email"]);
        $user = $this->db->get($this->table)->row();

        // jika user terdaftar
        if ($user) {
            // cek password
            $isPasswordTrue = password_verify($post["password"], $user->password);
            // cek levelnya
            $isAdmin = $user->level == "admin";

            // jika password benar dan dia admin
            if ($isPasswordTrue && $isAdmin) {
                // login success
                $this->session->set_userdata(['username' => $user->username]);
                $this->session->set_userdata(['name' => $user->name]);
                $this->session->set_userdata(['level' => $user->level]);
                $this->session->set_userdata(['email' => $user->email]);
                $this->session->set_userdata(['profile_photo' => $user->profile_photo]);
                $this->updateLastLogin($user->id);
                return true;
            }
        }

        return false;
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }

    public function updateLastLogin($id)
    {
        $sql = "UPDATE {$this->table} SET last_login=now() WHERE id={$id}";
        $this->db->query($sql);
    }
    

    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }
}

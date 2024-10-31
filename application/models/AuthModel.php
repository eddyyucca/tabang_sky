<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{

    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }

    public function cek_user($username)
    {
        $this->db->where('username', $username);
        $this->db->limit(1);
        $query = $this->db->get('user_login');

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function data_users()
    {
      
      $query = $this->db->get('user_login');
      return $query->result();
    }
}

/* End of file Auth_m.php */

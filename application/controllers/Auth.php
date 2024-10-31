<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('AuthModel');
    }

    public function index()
    {
        $data['data'] = false;
        // $data['pesan'] = $this->session->flashdata('pesan');
        $data['judul'] = 'Login';
        $this->load->view('auth/index', $data);
    }

   public function auth()
{
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
   
    if ($this->form_validation->run() == FALSE) {
        $data['data'] = false;
        $data['judul'] = 'Login';
        $this->load->view('auth/index', $data);
    } else {
            $username = $this->input->post('username');
            $password =  md5($this->input->post('password'));
            $cek = $this->auth_m->login($username, $password);
            $cek_username = $this->auth_m->cek_user($username);

            if ($cek_username == true) {
                if ($cek == true) {
                    foreach ($cek as $row);
                    $this->session->set_userdata('username', $row->username);
                    $this->session->set_userdata('level', $row->level);
                    if ($row->level == true) {
                        redirect('home');
                    } else {
                        $this->session->set_flashdata('pesan', 'pass_salah');
                        return redirect('login');
                    }
                } else {
                    $this->session->set_flashdata('pesan', 'pass_salah');
                    return redirect('login');
                }
            } elseif ($cek_nik == false) {
                $this->session->set_flashdata('pesan', 'pass_salah');
                return redirect('login');
            }
        }
}

    public function keluar()
    {
        $this->session->sess_destroy();
        return redirect('dashboard');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLogin');
    }


    public function index()
    {
        $this->load->view('login');
    }
    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = $this->mLogin->login($username, $password);
        if ($data) {
            $id = $data->id_admin;
            $this->session->set_userdata('id', $id);
            redirect('cDashboard');
        } else {
            $this->session->set_flashdata('error', 'Username dan Password Salah!');
            redirect('cLogin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->set_flashdata('success', 'Anda Berhasil LogOut!');
        redirect('clogin');
    }
}

/* End of file cLogin.php */

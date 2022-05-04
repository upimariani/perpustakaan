<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPengembalian extends CI_Controller
{

    public function index()
    {
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('pengembalian/kembali');
        $this->load->view('Layouts/footer');
    }
}

/* End of file cPengembalian.php */

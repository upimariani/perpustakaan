<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mDashboard');
    }

    public function index()
    {
        $this->protect->protect();
        $data = array(
            'jml' => $this->mDashboard->jml(),
            'buku' => $this->mDashboard->buku()
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('dashboard', $data);
        $this->load->view('Layouts/footer');
    }
}

/* End of file cDashboard.php */

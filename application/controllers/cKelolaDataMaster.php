<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKelolaDataMaster extends CI_Controller
{

    public function admin()
    {
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('admin/admin');
        $this->load->view('Layouts/footer');
    }
    public function create_admin()
    {
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('admin/create');
        $this->load->view('Layouts/footer');
    }
    public function pcreate_admin()
    {
        $data = array();
    }
    public function kategori()
    {
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('kategori/kategori');
        $this->load->view('Layouts/footer');
    }
    public function buku()
    {
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('buku/buku');
        $this->load->view('Layouts/footer');
    }
}

/* End of file cKelolaDataMaster.php */

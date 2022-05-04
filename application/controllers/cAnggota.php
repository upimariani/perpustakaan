<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mAnggota');
    }


    public function index()
    {
        $data = array(
            'anggota' => $this->mAnggota->select()
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('anggota/anggota', $data);
        $this->load->view('Layouts/footer');
    }
    public function create()
    {
        $this->form_validation->set_rules('nama', 'Nama Anggota', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas Anggota', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Layouts/head');
            $this->load->view('Layouts/navbar');
            $this->load->view('Layouts/aside');
            $this->load->view('anggota/create');
            $this->load->view('Layouts/footer');
        } else {
            $data = array(
                'nama_anggota' => $this->input->post('nama'),
                'kelas' => $this->input->post('kelas'),
                'jk' => $this->input->post('jk'),
            );
            $this->mAnggota->insert($data);
            $this->session->set_flashdata('success', 'Data Anggota Berhasil Ditambahkan!');
            redirect('cAnggota');
        }
    }
}

/* End of file cAnggota.php */

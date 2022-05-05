<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPengembalian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPengembalian');
        $this->load->model('mPeminjaman');
    }


    public function index()
    {
        $this->protect->protect();
        $data = array(
            'kembali' => $this->mPengembalian->select()
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('pengembalian/kembali', $data);
        $this->load->view('Layouts/footer');
    }
    public function kembali($id)
    {
        $data = array(
            'id_pinjam' => $id,
            'tgl_kembali' => date('Y-m-d'),
            'denda' => $this->input->post('denda')
        );
        $this->mPengembalian->insert($data);

        $status = array(
            'status' => '0',
            'id_buku' => $this->input->post('id_buku')
        );
        $this->mPeminjaman->update_status($status['id_buku'], $status);

        $status_pinjam = array(
            'stat_pinjam' => '1'
        );
        $this->mPengembalian->status_pinjam($id, $status_pinjam);
        $this->session->set_flashdata('success', 'Buku Telah Berhasil Dikembalikan! ');
        redirect('cPengembalian');
    }
}

/* End of file cPengembalian.php */

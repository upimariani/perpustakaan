<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPeminjaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPeminjaman');
        $this->load->model('mAnggota');
        $this->load->model('mDataMaster');
    }

    public function index()
    {
        $data = array(
            'pinjam' => $this->mPeminjaman->select_pinjam()

        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('peminjaman/pinjam', $data);
        $this->load->view('Layouts/footer');
    }
    public function create()
    {
        $this->form_validation->set_rules('anggota', 'Nama Anggota', 'required');
        $this->form_validation->set_rules('buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('bts', 'Batas Peminjaman', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'anggota' => $this->mAnggota->select(),
                'buku' => $this->mPeminjaman->select_buku()
            );
            $this->load->view('Layouts/head');
            $this->load->view('Layouts/navbar');
            $this->load->view('Layouts/aside');
            $this->load->view('peminjaman/create', $data);
            $this->load->view('Layouts/footer');
        } else {
            $data = array(
                'id_anggota' => $this->input->post('anggota'),
                'id_admin' => $this->session->userdata('id'),
                'id_buku' => $this->input->post('buku'),
                'tgl_pinjam' => $this->input->post('tgl_pinjam'),
                'bts_pinjam' => $this->input->post('bts')
            );
            $this->mPeminjaman->insert_pinjam($data);

            $status = array(
                'status' => '1'
            );
            $this->mPeminjaman->update_status($data['id_buku'], $status);
            $this->session->set_flashdata('success', 'Data Peminjaman Berhasil Disimpan!');
            redirect('cPeminjaman');
        }
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('anggota', 'Nama Anggota', 'required');
        $this->form_validation->set_rules('buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('bts', 'Batas Peminjaman', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'anggota' => $this->mAnggota->select(),
                'buku' => $this->mPeminjaman->buku(),
                'edit' => $this->mPeminjaman->edit($id)
            );
            $this->load->view('Layouts/head');
            $this->load->view('Layouts/navbar');
            $this->load->view('Layouts/aside');
            $this->load->view('peminjaman/update', $data);
            $this->load->view('Layouts/footer');
        } else {
            $edit = $this->mPeminjaman->edit($id);
            $sts = $edit->id_buku;
            $buku = $this->input->post('buku');
            if ($buku != $sts) {
                $status = array(
                    'status' => '0'
                );
                $this->mPeminjaman->update_status($edit->id_buku, $status);
            }
            $data = array(
                'id_anggota' => $this->input->post('anggota'),
                'id_admin' => $this->session->userdata('id'),
                'id_buku' => $this->input->post('buku'),
                'tgl_pinjam' => $this->input->post('tgl_pinjam'),
                'bts_pinjam' => $this->input->post('bts')
            );
            $this->mPeminjaman->update($id, $data);

            $data_status = array(
                'id_buku' => $this->input->post('buku'),
                'status' => '1'
            );
            $this->mPeminjaman->update_status($data_status['id_buku'], $data_status);
            $this->session->set_flashdata('success', 'Data Peminjaman Berhasil Diperbaharui!');
            redirect('cPeminjaman');
        }
    }
    public function delete($id, $buku)
    {
        $data = array(
            'status' => '0'
        );
        $this->mPeminjaman->update_status($buku, $data);
        $this->mPeminjaman->delete($id);
        $this->session->set_flashdata('success', 'Data Peminjaman Berhasil Dihapus!');
        redirect('cPeminjaman');
    }
}

/* End of file cPeminjaman.php */

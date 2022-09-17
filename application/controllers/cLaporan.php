<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPeminjaman');
        $this->load->model('mAnggota');
        $this->load->model('mDataMaster');
        $this->load->model('mLaporan');
    }

    public function index()
    {
        $this->protect->protect();
        $data = array(
            'pinjam' => $this->mPeminjaman->select_pinjam()

        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('laporan/laporan', $data);
        $this->load->view('Layouts/footer');
    }

    public function lap_harian()
    {
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Penjualan Harian',
            'tanggal' => $tanggal,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_harian($tanggal, $bulan, $tahun),
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('laporan/hari', $data);
        $this->load->view('Layouts/footer');
    }

    public function lap_bulanan()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Penjualan Bulanan',
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_bulanan($bulan, $tahun),
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('laporan/bulan', $data);
        $this->load->view('Layouts/footer');
    }

    public function lap_tahunan()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'title' => 'Laporan Penjualan Tahunan',
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_tahunan($tahun),
        );
        $this->load->view('Layouts/head');
        $this->load->view('Layouts/navbar');
        $this->load->view('Layouts/aside');
        $this->load->view('laporan/tahun', $data);
        $this->load->view('Layouts/footer');
    }
}

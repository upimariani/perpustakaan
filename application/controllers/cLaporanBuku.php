<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporanBuku extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDataMaster');
		$this->load->model('mLaporan');
	}

	public function index()
	{
		$this->protect->protect();
		$data = array(
			'kategori' => $this->mDataMaster->select_kategori()
		);
		$this->load->view('Layouts/head');
		$this->load->view('Layouts/navbar');
		$this->load->view('Layouts/aside');
		$this->load->view('LaporanBuku/laporan', $data);
		$this->load->view('Layouts/footer');
	}
	public function lap_harian()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$id_kategori = $this->input->post('kategori');

		$data = array(
			'title' => 'Laporan Buku Masuk Harian',
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->mLaporan->buku_harian($tanggal, $bulan, $tahun, $id_kategori),
		);
		$this->load->view('Layouts/head');
		$this->load->view('Layouts/navbar');
		$this->load->view('Layouts/aside');
		$this->load->view('LaporanBuku/harian', $data);
		$this->load->view('Layouts/footer');
	}

	public function lap_bulanan()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$id_kategori = $this->input->post('kategori');


		$data = array(
			'title' => 'Laporan Buku Masuk Bulanan',
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->mLaporan->buku_bulanan($bulan, $tahun, $id_kategori),
		);
		$this->load->view('Layouts/head');
		$this->load->view('Layouts/navbar');
		$this->load->view('Layouts/aside');
		$this->load->view('LaporanBuku/bulanan', $data);
		$this->load->view('Layouts/footer');
	}

	public function lap_tahunan()
	{
		$tahun = $this->input->post('tahun');
		$id_kategori = $this->input->post('kategori');


		$data = array(
			'title' => 'Laporan Buku Masuk Tahunan',
			'tahun' => $tahun,
			'laporan' => $this->mLaporan->buku_tahunan($tahun, $id_kategori),
		);
		$this->load->view('Layouts/head');
		$this->load->view('Layouts/navbar');
		$this->load->view('Layouts/aside');
		$this->load->view('LaporanBuku/tahunan', $data);
		$this->load->view('Layouts/footer');
	}
}

/* End of file cLaporanBuku.php */

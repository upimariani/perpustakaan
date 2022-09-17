<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cList extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDashboard');
	}
	public function index()
	{
		$data = array(
			'buku' => $this->mDashboard->buku()
		);
		$this->load->view('vList', $data);
	}
}

/* End of file cList.php */

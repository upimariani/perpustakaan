<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPengembalian extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('pengembalian', $data);
	}

	//update status pinjam
	public function status_pinjam($id, $data)
	{
		$this->db->where('id_pinjam', $id);
		$this->db->update('peminjaman', $data);
	}

	public function select()
	{
		$this->db->select('*');
		$this->db->from('pengembalian');
		$this->db->join('peminjaman', 'pengembalian.id_pinjam = peminjaman.id_pinjam', 'left');
		$this->db->join('admin', 'admin.id_admin = peminjaman.id_admin', 'left');
		$this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota', 'left');
		return $this->db->get()->result();
	}
}

/* End of file mPengembalian.php */

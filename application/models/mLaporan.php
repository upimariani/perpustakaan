<?php


defined('BASEPATH') or exit('No direct script access allowed');

class mLaporan extends CI_Model
{
    public function lap_harian($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('detail_peminjaman', 'peminjaman.id_pinjam = detail_peminjaman.id_pinjam', 'left');
        $this->db->join('buku', 'buku.id_buku = detail_peminjaman.id_buku', 'left');
        $this->db->join('anggota', 'peminjaman.id_anggota = anggota.id_anggota', 'left');

        $this->db->where('DAY(peminjaman.tgl_pinjam)', $tanggal);
        $this->db->where('MONTH(peminjaman.tgl_pinjam)', $bulan);
        $this->db->where('YEAR(peminjaman.tgl_pinjam)', $tahun);
        $this->db->order_by('peminjaman.id_pinjam', 'desc');
        return $this->db->get()->result();
    }

    public function lap_bulanan($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('detail_peminjaman', 'peminjaman.id_pinjam = detail_peminjaman.id_pinjam', 'left');
        $this->db->join('buku', 'buku.id_buku = detail_peminjaman.id_buku', 'left');
        $this->db->join('anggota', 'peminjaman.id_anggota = anggota.id_anggota', 'left');
        $this->db->where('MONTH(tgl_pinjam)', $bulan);
        $this->db->where('YEAR(tgl_pinjam)', $tahun);
        $this->db->where('stat_pinjam=1');
        $this->db->order_by('peminjaman.id_pinjam', 'desc');
        return $this->db->get()->result();
    }

    public function lap_tahunan($tahun)
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'peminjaman.id_anggota = anggota.id_anggota', 'left');
        $this->db->join('detail_peminjaman', 'peminjaman.id_pinjam = detail_peminjaman.id_pinjam', 'left');
        $this->db->join('buku', 'buku.id_buku = detail_peminjaman.id_buku', 'left');
        $this->db->where('YEAR(tgl_pinjam)', $tahun);
        $this->db->where('stat_pinjam=1');
        $this->db->order_by('peminjaman.id_pinjam', 'desc');

        return $this->db->get()->result();
    }
}

/* End of file M_laporan.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnggota extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('anggota', $data);
    }
    public function select()
    {
        $this->db->select('*');
        $this->db->from('anggota');
        return $this->db->get()->result();
    }
}

/* End of file mAnggota.php */

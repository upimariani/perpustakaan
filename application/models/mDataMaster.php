<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDataMaster extends CI_Model
{
    //data admin
    public function select_admin()
    {
        $this->db->select('*');
        $this->db->from('admin');
        return $this->db->get()->result();
    }
    public function insert_admin($data)
    {
        $this->db->insert('admin', $data);
    }
}

/* End of file mDataMaster.php */

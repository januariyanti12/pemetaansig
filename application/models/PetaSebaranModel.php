<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PetaSebaranModel extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('penduduk');
        return $this->db->get()->result();
    }
}

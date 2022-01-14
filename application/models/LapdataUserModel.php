<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LapdataUserModel extends CI_Model
{
    function get()
    {
        $data = $this->db->get('pengguna');
        return $data;
    }
    function insert($data = array())
    {
        $this->db->insert('pengguna', $data);
        $info = '<div class="alert alert-success alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-check"></i> Sukses!</h4> Data Sukses Ditambah </div>';
        $this->session->set_flashdata('info', $info);
    }
    function update($data = array(), $where = array())
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        $this->db->update('pengguna', $data);
        $info = '<div class="alert alert-success alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                <h4><i class="icon fa fa-check"></i> Sukses!</h4> Data Sukses diubah </div>';
        $this->session->set_flashdata('info', $info);
    }
    function delete($where = array())
    {
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }
        $this->db->delete('pengguna');
        $info = '<div class="alert alert-success alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <h4><i class="icon fa fa-check"></i> Sukses!</h4> Data Sukses dihapus </div>';
        $this->session->set_flashdata('info', $info);
    }
}

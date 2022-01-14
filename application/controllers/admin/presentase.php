<?php
defined('BASEPATH') or exit('No direct script access allowed');

class presentase extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->logged !== true) {
            redirect('admin/auth');
        }
        if ($this->session->level !== 'Admin') {
            redirect('admin/beranda');
        }
    }

    public function index()
    {
        $datacontent['url'] = 'admin/presentase';
        $datacontent['title'] = 'Data Presentase';
        $data['content'] = $this->load->view('admin/presentase/presentaseView', $datacontent, TRUE);
        $data['title'] = $datacontent['title'];
        $this->load->view('admin/layouts/html', $data);
    }
}

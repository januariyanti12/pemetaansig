<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berandauser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $datacontent['title'] = 'Halaman Beranda';
        $data['content'] = $this->load->view('website/berandauserView', $datacontent, TRUE);
        $data['title'] = 'Selamat Datang di Beranda';
        $this->load->view('website/layouts/html', $data);
    }
}

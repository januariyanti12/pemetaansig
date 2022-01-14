<?php
defined('BASEPATH') or exit('No direct script access allowed');

class leafletstandar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PetaSebaranModel', 'Model');
    }

    public function index()
    {
        $datacontent['url'] = 'leafletstandar';
        $datacontent['title'] = 'Peta Sebaran Keluarga Sejahtera Kel.Desa Kapur';
        $data['content'] = $this->load->view('website/petasebaranView', $datacontent, TRUE);
        $data['title'] = $datacontent['title'];
        $this->load->view('website/layouts/html', $data);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class peta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PetaSebaranModel', 'Model');
    }

    public function index()
    {
        $datacontent['url'] = 'peta';
        $datacontent['title'] = 'Keluarga Sejahtera Kel.Desa Kapur';
        // $datacontent['datatable'] = $this->Model->get_all_data();
        $data['content'] = $this->load->view('admin/peta_sebaran/petasebaranView', $datacontent, TRUE);
        $data['js'] = $this->load->view('admin/leafletstandar/js/mapJs', $datacontent, TRUE);
        $data['title'] = $datacontent['title'];
        $this->load->view('admin/layouts/html', $data);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Presentaseuser extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $datacontent['url'] = 'website/presentaseuser';
        $datacontent['title'] = 'Data Presentase';
        $data['content'] = $this->load->view('website/presentaseView', $datacontent, TRUE);
        $data['title'] = $datacontent['title'];
        $this->load->view('website/layouts/html', $data);
    }
}

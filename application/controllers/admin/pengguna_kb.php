<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengguna_kb extends CI_Controller
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
        $this->load->model('DataKBModel', 'Model');
    }

    public function index()
    {
        $datacontent['url'] = 'admin/pengguna_kb';
        $datacontent['title'] = 'Data Pengguna KB';
        $datacontent['datatable'] = $this->Model->get();
        $data['content'] = $this->load->view('admin/pengguna_kb/tableView', $datacontent, TRUE);
        $data['title'] = $datacontent['title'];
        $this->load->view('admin/layouts/html', $data);
    }
    public function form($parameter = '', $id = '')
    {
        $datacontent['url'] = 'admin/laporan_data';
        $datacontent['parameter'] = $parameter;
        $datacontent['id'] = $id;
        $datacontent['title'] = 'Data Pengguna KB';
        $data['content'] = $this->load->view('admin/pengguna_kb/formView', $datacontent, TRUE);
        $data['title'] = $datacontent['title'];
        $this->load->view('admin/layouts/html', $data);
    }
    public function simpan()
    {
        if ($this->input->post()) {

            // cek validasi
            $validation = null;
            // cek kode apakah sudah ada
            if ($this->input->post('id_penduduk') != "") {
                $this->db->where('id_penduduk !=' . $this->input->post('id_penduduk'));
            }
            $this->db->where('nomor_kk', $this->input->post('nomor_kk'));
            $check = $this->db->get('penduduk');
            if ($check->num_rows() > 0) {
                $validation[] = 'Kode kk Sudah Ada';
            }
            //tidak boleh kosong
            if ($this->input->post('nama_penduduk') == '') {
                $validation[] = 'Nama penduduk Tidak Boleh Kosong';
            }


            if (count($validation) > 0) {
                $this->session->set_flashdata('error_validation', $validation);
                $this->session->set_flashdata('error_value', $_POST);
                redirect($_SERVER['HTTP_REFERER']);
                return false;
            }
            // cek validasi




            $data = [
                'nomor_kk' => $this->input->post('nomor_kk'),
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'nama_kb' => $this->input->post('nama_kb'),
                'rt_rw' => $this->input->post('rt_rw'),
            ];
            // upload

            if ($_POST['parameter'] == "tambah") {
                $this->Model->insert($data);
            } else {
                $this->Model->update($data, ['id_penduduk' => $this->input->post('id_penduduk')]);
            }
        }

        redirect('admin/laporan_data');
    }

    public function hapus($id = '')
    {
        // hapus file di dalam folder
        $this->db->where('id_penduduk', $id);
        $get = $this->Model->get()->row();

        // end hapus file di dalam folder
        $this->Model->delete(["id_penduduk" => $id]);
        redirect('admin/laporan_data');
    }
}

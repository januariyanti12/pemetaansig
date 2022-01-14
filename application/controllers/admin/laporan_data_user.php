<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan_data_user extends CI_Controller
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
        $this->load->model('LapdataUserModel', 'Model');
    }

    public function index()
    {
        $datacontent['url'] = 'admin/laporan_data_user';
        $datacontent['title'] = 'Laporan Data User';
        $datacontent['datatable'] = $this->Model->get();
        $data['content'] = $this->load->view('admin/laporan_data_user/tableView', $datacontent, TRUE);
        $data['title'] = $datacontent['title'];
        $this->load->view('admin/layouts/html', $data);
    }
    public function form($parameter = '', $id = '')
    {
        $datacontent['url'] = 'admin/laporan_data_user';
        $datacontent['parameter'] = $parameter;
        $datacontent['id'] = $id;
        $datacontent['title'] = 'Data Keseluruhan Keluarga Sejahtera';
        $data['content'] = $this->load->view('admin/laporan_data_user/formView', $datacontent, TRUE);
        $data['title'] = $datacontent['title'];
        $this->load->view('admin/layouts/html', $data);
    }
    public function simpan()
    {
        if ($this->input->post()) {

            // cek validasi
            $validation = null;
            // cek kode apakah sudah ada
            if ($this->input->post('id_pengguna') != "") {
                $this->db->where('id_pengguna !=' . $this->input->post('id_pengguna'));
            }
            $this->db->where('nm_pengguna', $this->input->post('nm_pengguna'));
            $check = $this->db->get('pengguna');
            if ($check->num_rows() > 0) {
                $validation[] = 'Pengguna Sudah Ada';
            }
            //tidak boleh kosong
    

            if (count($validation) > 0) {
                $this->session->set_flashdata('error_validation', $validation);
                $this->session->set_flashdata('error_value', $_POST);
                redirect($_SERVER['HTTP_REFERER']);
                return false;
            }
            // cek validasi




            $data = [
                'nm_pengguna' => $this->input->post('nm_pengguna'),
                'kt_sandi' => $this->input->post('kt_sandi'),
                'level' => $this->input->post('level'),
            ];
            // upload

            if ($_POST['parameter'] == "tambah") {
                $this->Model->insert($data);
            } else {
                $this->Model->update($data, ['id_pengguna' => $this->input->post('id_pengguna')]);
            }
        }

        redirect('admin/laporan_data_user');
    }

    public function hapus($id = '')
    {
        // hapus file di dalam folder
        $this->db->where('id_pengguna', $id);
        $get = $this->Model->get()->row();

        // end hapus file di dalam folder
        $this->Model->delete(["id_pengguna" => $id]);
        redirect('admin/laporan_data_user');
    }
public function export($jenis='pdf'){
    if($jenis=='pdf'){
        $datacontent['title']='User Report';
        $datacontent['datatable']=$this->Model->get();
        $html=$this->load->view('admin/laporan_data_user/pdfView',$datacontent,TRUE);
        generatePdf($html,'User','A4','landscape');
    }
}
}
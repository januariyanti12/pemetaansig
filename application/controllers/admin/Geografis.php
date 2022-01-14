<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Geografis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('GeografisModel', 'Model');
	}

	public function index()
	{
		$datacontent['url'] = 'admin/Geografis';
		$datacontent['title'] = 'Halaman Geografis';
		$datacontent['datatable'] = $this->Model->get();
		$data['content'] = $this->load->view('admin/kategorigeografis/tableView', $datacontent, TRUE);
		$data['title'] = $datacontent['title'];
		$this->load->view('admin/layouts/html', $data);
	}
	public function form($parameter = '', $id = '')
	{
		$datacontent['url'] = 'admin/Geografis';
		$datacontent['parameter'] = $parameter;
		$datacontent['id'] = $id;
		$datacontent['title'] = 'Form Geografis';
		$data['content'] = $this->load->view('admin/kategorigeografis/formView', $datacontent, TRUE);
		$data['js'] = $this->load->view('admin/kategorigeografis/js/formJs', $datacontent, TRUE);
		$data['title'] = $datacontent['title'];
		$this->load->view('admin/layouts/html', $data);
	}
	public function simpan()
	{
		if ($this->input->post()) {
			$data = [
				'id_lokasi' => $this->input->post('id_lokasi'),
				'nama_penduduk' => $this->input->post('nama_penduduk'),
				'lat' => $this->input->post('lat')


			];
			// upload
			if ($_FILES['marker']['name'] != '') {
				$upload = upload('marker', 'marker', 'image');
				if ($upload['info'] == true) {
					$data['marker'] = $upload['upload_data']['file_name'];
				} elseif ($upload['info'] == false) {
					$info = '<div class="alert alert-danger alert-dismissible">
	            		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            		<h4><i class="icon fa fa-ban"></i> Error!</h4> ' . $upload['message'] . ' </div>';
					$this->session->set_flashdata('info', $info);
					redirect('admin/Geografis');
					exit();
				}
			}
			// upload

			if ($_POST['parameter'] == "tambah") {
				$this->Model->insert($data);
			} else {
				$this->Model->update($data, ['id_lokasi' => $this->input->post('id_lokasi')]);
			}
		}
		redirect('admin/Geografis');
	}

	public function hapus($id = '')
	{
		// hapus file di dalam folder
		$this->db->where('id_lokasi', $id);
		$get = $this->Model->get()->row();
		$marker = $get->marker;
		unlink('assets/unggah/marker/' . $marker);
		// end hapus file di dalam folder
		$this->Model->delete(["id_lokasi" => $id]);
		redirect('admin/Geografis');
	}
}

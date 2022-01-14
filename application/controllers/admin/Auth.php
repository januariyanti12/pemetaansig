<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$datacontent['title']='Form Login';
		$this->load->view('admin/authView',$datacontent);
	}
	public function check(){
		if($this->input->post()){
			$nm_pengguna=$this->input->post('nm_pengguna');
		    $kt_sandi=$this->input->post('kt_sandi');
		    $this->db->where("nm_pengguna",$nm_pengguna);
		    $data=$this->db->get("pengguna");
		    if($data->num_rows()>0){
		      // jika username ada
		      $row=$data->row();
		      $hash = $row->kt_sandi;
		      if (password_verify($kt_sandi, $hash)) {
		          $this->session->set_userdata("logged",true);
		          $this->session->set_userdata("nm_pengguna",$row->nm_pengguna);
		          $this->session->set_userdata("id_pengguna",$row->id_pengguna);
		          $this->session->set_userdata("level",$row->level);
		          $this->session->set_flashdata("info",'<div class="alert alert-success alert-dismissible">
		                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                    <h4><i class="icon fa fa-ban"></i> Sukses!</h4> Selamat Datang <b>'.$row->nm_pengguna.'</b> di Halaman Utama Aplikasi
		                  </div>');
		          redirect("admin/beranda");
		      } else {
		         $this->session->set_userdata("logged",false);
		         $this->session->set_flashdata("info",'<div class="alert alert-danger alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                <h4><i class="icon fa fa-ban"></i> Error!</h4> Nama Pengguna atau Kata Sandi Salah
		              </div>');
		        redirect("admin/auth");
		      }
		    }
		    else{
		      $this->session->set_userdata("logged",false);
	    	  $this->session->set_flashdata('info','<div class="alert alert-danger alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                <h4><i class="icon fa fa-ban"></i> Error!</h4> Nama Pengguna atau Kata Sandi Salah
		              </div>');
		      redirect("admin/auth");
		    }
		}
		else{
			redirect("admin/auth");
		}
	}
	public function out(){
		$this->session->sess_destroy();
		redirect("admin/auth");
	}
}

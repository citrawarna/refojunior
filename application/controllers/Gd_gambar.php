<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Gd_gambar extends CI_Controller 
{	
	public function __construct(){
		parent::__construct();
		$this->load->model('gd_model');
		$login = $this->session->userdata('id_user');
		if(!$login) {
				$this->session->set_flashdata('error', 'Harap login terlebih dahulu!');
				redirect('backend');
			}
	}

	public function index(){
		$gambar = $this->gd_model->getGmbr();
		$isi = 'backend/gd_gambar/index';
		$this->load->view('backend/template', compact('isi', 'gambar'));
	}

	public function tambah(){
		$ket = 'Tambah';
		if(!$_POST) {
			$input = (object) $this->gd_model->getDefaultValues();
		} else {
			$input = (object) $this->input->post();
 		}

 		//upload file
		if(!empty($_FILES) && $_FILES['nama_gambar']['size'] > 0) {
	     
			$config = [
		        'upload_path' => './gudang/',
		        'allowed_types' => 'jpg', // hanya jpg saja
		        'max_size' => 2000,
		        'max_width' => 0,
		        'max_height' => 0,
		        'overwrite' => true,
		        'file_ext_tolower' => true
		      ];

	      $this->load->library('upload', $config);
	      if($this->upload->do_upload('nama_gambar')) {
	        $upload_data =  $this->upload->data();
	      }

	      if($upload_data) {
	        $input->nama_gambar = $upload_data['file_name']; // data for column cover
	      }
	    }


 		if(!$this->gd_model->validate()){
			$isi = 'backend/gd_gambar/form';
			$form_action = 'gd_gambar/tambah';
			$this->load->view('backend/template', compact('isi', 'input', 'form_action', 'ket'));
			return;
		}

		$this->gd_model->insert($input);
		$this->session->set_flashdata('success', 'Data berhasil ditambah');
		redirect('gd_gambar');
	}

	public function edit($id_gambar){
		$ket = 'Edit';
		$gambar = $this->db->where('id_gambar', $id_gambar)->get('gudang_gambar')->row();

		if(!$_POST){
			$input = (object) $gambar;
		} else {
			$input = (object) $this->input->post();
			$input->nama_gambar = $gambar->nama_gambar;
		}

		if(!$this->gd_model->validate()){
			$isi = 'backend/gd_gambar/form';
			$form_action = 'gd_gambar/edit/'.$id_gambar;
			$this->load->view('backend/template', compact('isi', 'input', 'form_action', 'ket'));
			return;
		}

		$config = [
		        'upload_path' => './gudang/',
		        'allowed_types' => 'jpg', // hanya jpg saja
		        'max_size' => 2000,
		        'max_width' => 0,
		        'max_height' => 0,
		        'overwrite' => true,
		        'file_ext_tolower' => true
		      ];

	      $this->load->library('upload', $config);
	      if($this->upload->do_upload('nama_gambar')) {
	        $upload_data =  $this->upload->data();
	      }


	       if($upload_data) {
	       	$input->nama_gambar = $upload_data['file_name']; // data for column cover
	       }

	    $this->gd_model->update($input, $id_gambar);
	    $this->session->set_flashdata('success', 'Data berhasil diedit');
	    redirect('gd_gambar');
	}

	public function hapus($nama_gambar){
		$this->db->where('nama_gambar', $nama_gambar)->get('gudang_gambar')->row();
		$this->db->where('nama_gambar', $nama_gambar)->delete('gudang_gambar');

		  if(file_exists("./gudang/$nama_gambar")) {
		    unlink("./gudang/$nama_gambar");
		  }

		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect('gd_gambar');
	}
}

 ?>
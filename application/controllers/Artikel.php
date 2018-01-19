<?php defined('BASEPATH') or exit('No direct script access allowed!'); 

class Artikel extends CI_Controller 
{	
	public function __construct(){
		parent::__construct();
		$this->load->model('artikel_model');
		$login = $this->session->userdata('id_user');
		if(!$login) {
				$this->session->set_flashdata('error', 'Harap login terlebih dahulu!');
				redirect('backend');
			}
	}

	public function index() {
		$artikel = $this->artikel_model->getArtikel();

		$isi = 'backend/artikel/index';
		$this->load->view('backend/template', compact('isi', 'artikel'));
	}

	public function tambah() {
		$ket = 'Tambah';

		if(!$_POST) {
			$input = (object) $this->artikel_model->getDefaultValues();
		} else{
			$input = (object) $this->input->post();
		}
		//upload file
		if(!empty($_FILES) && $_FILES['cover']['size'] > 0) {
	     
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
	      if($this->upload->do_upload('cover')) {
	        $upload_data =  $this->upload->data();
	      }

	      if($upload_data) {
	        $input->cover = $upload_data['file_name']; // data for column cover
	      }
	    }

		if(!$this->artikel_model->validate()){
			$isi = 'backend/artikel/form';
			$form_action = 'artikel/tambah';
			$this->load->view('backend/template', compact('isi', 'input', 'form_action', 'ket'));
			return;
		}



		$this->artikel_model->insert($input);
		$this->session->set_flashdata('success', 'Data berhasil ditambah');
		redirect('artikel');
			
	}

	public function edit($link) {
		$ket = 'Edit';
		$artikel = $this->db->where('link', $link)->get('artikel')->row();

		if(!$_POST){
			$input = (object) $artikel;
		} else {
			$input = (object) $this->input->post();
			$input->cover = $artikel->cover;
		}

		if(!$this->artikel_model->validate()){
			$isi = 'backend/artikel/form';
			$form_action = "artikel/edit/$link";
			$this->load->view('backend/template', compact('isi', 'form_action', 'input', 'ket'));
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
	      if($this->upload->do_upload('cover')) {
	        $upload_data =  $this->upload->data();
	      }

	      if($upload_data) {
	        $input->cover = $upload_data['file_name']; // data for column cover
	      }

	    $this->artikel_model->update($input);
	    $this->session->set_flashdata('success', 'Data berhasil diedit');






	}
}

?>
<?php defined('BASEPATH') or exit('No direct script access allowed!'); 

class Portofolio extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$this->load->model('portofolio_model');
		$login = $this->session->userdata('id_user');
		if(!$login) {
				$this->session->set_flashdata('error', 'Harap login terlebih dahulu!');
				redirect('backend');
			}
	}

	public function index(){
		$portofolio = $this->portofolio_model->getPortofolio();
		$isi = 'backend/portofolio/index';
		$this->load->view('backend/template', compact('isi', 'portofolio'));
	}

	public function tambah() {
		$ket = 'Tambah';
		if(!$_POST) {
			$input = (object) $this->portofolio_model->getDefaultValues();
		} else {
			$input = (object) $this->input->post();
 		}

 		//upload file
		if(!empty($_FILES) && $_FILES['gambar']['size'] > 0) {
	     
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
	      if($this->upload->do_upload('gambar')) {
	        $upload_data =  $this->upload->data();
	      }

	      if($upload_data) {
	        $input->gambar = $upload_data['file_name']; // data for column cover
	      }
	    }

		if(!$this->portofolio_model->validate()){
			$isi = 'backend/portofolio/form';
			$form_action = 'portofolio/tambah';
			$this->load->view('backend/template', compact('isi', 'input', 'form_action', 'ket'));
			return;
		}

		$this->portofolio_model->insert($input);
		$this->session->set_flashdata('success', 'Data berhasil ditambah');
		redirect('portofolio');
	}

	public function edit($id_port) {
		$ket = 'Edit';
		$portofolio = $this->db->where('id_port', $id_port)->get('portfolio')->row();

		if(!$_POST){
			$input = (object) $portofolio;
		} else {
			$input = (object) $this->input->post();
			$input->gambar = $portofolio->gambar;
		}

		if(!$this->portofolio_model->validate()){
			$isi = 'backend/portofolio/form';
			$form_action = "portofolio/edit/$id_port";
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
	      if($this->upload->do_upload('gambar')) {
	        $upload_data =  $this->upload->data();
	         
	      }

	       if($upload_data) {
	       	$input->gambar = $upload_data['file_name']; // data for column cover
	       }

	    $this->portofolio_model->update($input, $id_port);
	    $this->session->set_flashdata('success', 'Data berhasil diedit');
	    redirect('portofolio');
	}

	public function hapus($id_port) {
		$this->db->where('id_port', $id_port)->delete('portfolio');
		$this->session->set_flashdata('success', 'Data berhasil dihapus');
		redirect('portofolio');
	}
}


?>
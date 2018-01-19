<?php defined('BASEPATH') or exit();
	
	class Kategori extends CI_Controller
	{
		public function __construct() {
			parent::__construct();
			$login = $this->session->userdata('id_user');
			if(!$login) {
				$this->session->set_flashdata('error', 'Harap login terlebih dahulu!');
				redirect('backend');
			}
			$this->load->model('kategori_model');
		}

		public function index(){
			$kategori = $this->kategori_model->getAll();

			$isi = 'backend/kategori/index';
			$this->load->view('backend/template', compact('isi', 'kategori'));
		}

		public function tambah() {
			
			$ket = 'Tambah';

			if(!$_POST) {
				$input = (object) $this->kategori_model->getDefaultValues();
			} else {
				$input = (object) $this->input->post();
			}

			if(!$this->kategori_model->validate()) {
				$isi= 'backend/kategori/form'; 
				$form_action = 'kategori/tambah';
				$this->load->view('backend/template', compact('isi', 'form_action', 'ket', 'input'));
				return;
			}
			
			$this->kategori_model->insert($input);
			$this->session->set_flashdata('success', 'Data berhasil ditambah');
			redirect('kategori');
			
			
		}

		public function edit($id_kategori) {
			$kategori = $this->db->where('id_kategori', $id_kategori)->get('kategori')->row();
			$ket = 'Edit';

			if(!$_POST) {
				$input = (object) $kategori;
			} else {
				$input = (object) $this->input->post();
			}

			if(!$this->kategori_model->validate()) {
				$isi= 'backend/kategori/form'; 
				$form_action = 'kategori/edit/'.$id_kategori;
				$this->load->view('backend/template', compact('isi', 'form_action', 'ket', 'input'));
				return;
			}

			$this->kategori_model->update($id_kategori, $input);
			$this->session->set_flashdata('success', 'Data berhasil diedit');
			redirect('kategori');
		}

		public function hapus($id_kategori) {
			$this->db->where('id_kategori', $id_kategori)->delete('kategori');
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
			redirect('kategori');
		}
	} 
 ?>
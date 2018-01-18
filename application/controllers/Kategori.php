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
			$kategori = $this->kategori_model->getRow();
			$ket = 'Tambah';

			$valid = $this->form_validation;
			$valid->set_rules('nama_kategori', 'Nama Kategori', 'required');
			$valid->set_rules('keterangan', 'Keterangan', 'required');
			if($valid->run()) {
				$data = $this->input->post(null, true);

				$this->kategori_model->insert($data);
				$this->session->set_flashdata('success', 'Data berhasil ditambah');
				redirect('kategori');
			}

			$isi= 'backend/kategori/form';
			$this->load->view('backend/template', compact('isi', 'kategori', 'ket'));
		}

		public function edit($id_kategori) {
			$kategori = $this->db->where('id_kategori', $id_kategori)->get('kategori');
		}
	} 
 ?>
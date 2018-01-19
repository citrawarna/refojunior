<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Gudang_gambar extends CI_Controller 
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
		
	}
}

 ?>
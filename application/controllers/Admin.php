<?php defined('BASEPATH') or exit();

class Admin extends CI_Controller
{	
	public function __construct(){
		parent::__construct();
		$login = $this->session->userdata('id_user');
		if(!$login) {
			$this->session->set_flashdata('error', 'Harap login terlebih dahulu!');
			redirect('backend');
		}
	}
	public function index(){
		$isi = 'backend/admin';
		$this->load->view('backend/template', compact('isi'));
	}
}

 ?>
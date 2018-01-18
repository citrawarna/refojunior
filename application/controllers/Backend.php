<?php defined('BASEPATH') or exit('No direct script access allowed!'); 

class Backend extends CI_Controller 
{
	public function index() {
		$id = $this->session->userdata('id_user');
		if($id == false) {
			$valid = $this->form_validation;
			$valid->set_rules('username', 'Username', 'required');
			$valid->set_rules('password', 'Password', 'required');

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if($valid->run()){
				$this->library_login->login($username, $password);
			}

			$this->load->view('backend/form_login');
		} else {
			redirect(base_url('admin'));
		}
	}

	public function logout(){
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		redirect(base_url('backend'));
	}
}

?>
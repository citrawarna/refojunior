<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Gd_model extends CI_Model
{
	public function getGmbr() {
		return $this->db->order_by('tanggal', 'desc')->get('gudang_gambar')->result();
	}

	public function getDefaultValues(){
		return [
			'nama_gambar' => '',
			'judul_artikel' => '',
			'tanggal' => date('Y-m-d')
		];
	}

	public function getValidationRules() {
		return [
			[
				'field' => 'nama_gambar',
				'label' => 'Gambar',
				'rules' => 'trim'
			],
			[
				'field' => 'judul_artikel',
				'label' => 'Judul Artikel',
				'rules' => 'trim'
			],
			[
				'field' => 'tanggal',
				'label' => 'Tanggal',
				'rules' => 'trim'
			],
			
		];
	}

	public function validate(){
		$rules = $this->getValidationRules();
		$this->form_validation->set_rules($rules);
		return $this->form_validation->run();
	}

	public function insert($input) {
		$this->db->insert('gudang_gambar', $input);
		return $this->db->insert_id();
	}

	public function update($input, $id_gambar) {
		$this->db->where('id_gambar', $id_gambar)->update('gudang_gambar', $input);
	}
}

 ?>
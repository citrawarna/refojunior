<?php defined('BASEPATH') or exit('No direct script access allowed');

class Portofolio_model extends CI_Model
{
	public function getPortofolio(){
		return $this->db->order_by('tanggal', 'desc')->join('kategori', 'kategori.id_kategori = portfolio.id_kategori')->get('portfolio')->result();
	}

	public function getDefaultValues() {
		return [
			'tanggal' => date('Y-m-d'),
			'nama_sistem' => '',
			'link' => '',
			'gambar' => '',
			'isi' => '',
			'id_kategori' => '',
		];
	}

	public function getValidationRules() {
		return [
			[
				'field' => 'tanggal',
				'label' => 'Tanggal',
				'rules' => 'required'
			],
			[
				'field' => 'nama_sistem',
				'label' => 'Nama Sistem',
				'rules' => 'required'
			],
			[
				'field' => 'link',
				'label' => 'Link',
				'rules' => 'required'
			],
			[
				'field' => 'isi',
				'label' => 'Isi',
				'rules' => 'required'
			],
			[
				'field' => 'id_kategori',
				'label' => 'Kategori',
				'rules' => 'required'
			],
		];
	}

	public function validate() {
		$rules = $this->getvalidationRules();
		$this->form_validation->set_rules($rules);
		return $this->form_validation->run();
	}

	public function insert($input) {
		$this->db->insert('portfolio', $input);
		return $this->db->insert_id();
	}

	public function update($input, $id_port) {
		$this->db->where('id_port', $id_port)->update('portfolio', $input);
	}
}

 ?>
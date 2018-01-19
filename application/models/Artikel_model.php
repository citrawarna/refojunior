<?php defined('BASEPATH') or exit('No direct script access allowed!'); 

class Artikel_model extends CI_model 
{
	public function getArtikel() {
		return $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori')->order_by('tanggal', 'desc')->get('artikel')->result();
	}

	public function getDefaultValues() {
		return [
			'judul' => '',
			'link' => '',
			'isi' => '',
			'id_kategori' => '',
			'tanggal' => date('Y-m-d'),
			'meta' => '',
			'keywords' => '',
			'cover' => '',

		];
	}

	public function getValidationRules() {
		return [
			[
				'field' => 'judul',
				'label' => 'Judul',
				'rules' => 'required'
			],
			[
				'field' => 'link',
				'label' => 'Link',
				'rules' => 'required'
			],
			// [
			// 	'field' => 'cover',
			// 	'label' => 'Cover',
			// 	'rules' => 'required'
			// ],
			[
				'field' => 'isi',
				'label' => 'Isi Artikel',
				'rules' => 'required'
			],
			[
				'field' => 'id_kategori',
				'label' => 'Kategori',
				'rules' => 'required'
			],
			[
				'field' => 'tanggal',
				'label' => 'Tanggal',
				'rules' => 'required'
			],
			[
				'field' => 'meta',
				'label' => 'Meta Tags',
				'rules' => 'required'
			],
			[
				'field' => 'keywords',
				'label' => 'keyword google',
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
		$this->db->insert('artikel', $input);
		return $this->db->insert_id();
	}

	public function update($input, $link) {
		$this->db->where('link', $link)->update('artikel', $input);
	}
}

?>
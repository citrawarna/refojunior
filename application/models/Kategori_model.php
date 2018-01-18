<?php defined('BASEPATH') or exit();

class Kategori_model extends CI_Model 
{
	public function getAll() {
		$query = $this->db->get('kategori')->result();
		return $query;
	}	

	public function getRow() {
		$query = $this->db->get('kategori')->row();
		return $query;
	}

	public function getDefaultValues() {
		return [
			'nama_kategori' => '',
			'keterangan' => '',
		];
	}

	public function insert($data) {
		$this->db->insert('kategori', $data);
		return $this->db->insert_id();
	}

	public function update($id_kategori, $input){
		return $this->db->where('id_kategori', $id_kategori)->update('kategori', $input);
	}
}

 ?>
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

	public function insert($data) {
		$this->db->insert('kategori', $data);
	}
}

 ?>
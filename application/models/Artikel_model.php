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

	public function uploadCover($fieldname) {
      $config = [
        'upload_path' => './gudang/',
        'allowed_types' => 'jpg', // hanya jpg saja
        'max_size' => 5120,
        'max_width' => 0,
        'max_height' => 0,
        'overwrite' => true,
        'file_ext_tolower' => true
      ];

      $this->load->library('upload', $config);
      if($this->upload->do_upload($fieldname)) {
        //upload ok return uploaded file info
        $upload_data =  $this->upload->data();
        return $upload_data;
      } else {
        //add error to $_error_array
        // $this->form_validation->add_to_error_array($fieldname, $this->upload->display_errors('',''));
        return false;
      }
    }

	// public function upload() {
	// 	$config['upload_path'] = './gudang/';
	// 	$config['allowed_types'] = 'jpg|png';
	// 	$config['max_size'] = 2000;
	// 	$config['file_ext_tolower'] = TRUE;
	// 	$config['overwrite'] = TRUE;

	// 	$this->load->library('upload', $config);
	// 	if($this->upload->do_upload('cover')) {
	// 		$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
 //      		return $return;
	// 	} else {
	// 	// Jika gagal :
	//       $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
	//       return $return;
	// 	}
	// }

	// public function save($upload) {
	// 	$data = array(
	// 			'judul' => $this->input->post('judul'),
	// 			'link' => $this->input->post('link'),
	// 			'cover' => $upload['file']['file_name'],
	// 			'isi' => $this->input->post('isi'),
	// 			'id_kategori' => $this->input->post('id_kategori'),
	// 			'tanggal' => $this->input->post('tanggal'),
	// 			'meta' => $this->input->post('meta'),
	// 			'keywords' => $this->input->post('keywords'),
				
	// 		);

	// 	$this->db->insert('artikel', $data);
	// }
}

?>
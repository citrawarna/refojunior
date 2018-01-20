<?php defined('BASEPATH') or exit('No direct script access allowed!');

class Articles extends CI_Controller
{	
	public function index($page=null) {
		$per_halaman = 6;
		//menghitung offset (data dalam table)
		if($page == null) {
			$offset = 0;
		} else {
			$offset = ($page * $per_halaman) - $per_halaman;
		}
		$text_title = 'Released Articles';
		$artikel = $this->db->order_by('tanggal', 'desc')->limit($per_halaman, $offset)->get('artikel')->result();
		$keywords = 'Refo Junior, refojunior, refo denpasar, refo artikel, refo website developer';
		$meta = 'Berikut adalah artikel-artikel yang sudah saya tulis, semoga bermanfaat. ';
		$url = base_url();
		$image = base_url('img/meta-img.jpg');
		$daftar = 'frontend/daftar_artikel';
		$this->load->view('list-all', compact('daftar','meta', 'keywords', 'image', 'url', 'artikel', 'text_title'));
	}

	public function read($link, $page=null){
		$per_halaman = 4;
		//menghitung offset (data dalam table)
		if($page == null) {
			$offset = 0;
		} else {
			$offset = ($page * $per_halaman) - $per_halaman;
		}

		$artikel = $this->db->where('link', $link)->join('kategori', 'kategori.id_kategori = artikel.id_kategori')->get('artikel')->row();
		$artikel_baru = $this->db->order_by('tanggal', 'desc')->limit($per_halaman, $offset)->get('artikel')->result();
		$artikel_populer = $this->db->order_by('score', 'desc')->limit($per_halaman, $offset)->get('artikel')->result();
		$kategori = $this->db->limit($per_halaman, $offset)->get('kategori')->result();
		$artikel_isi = 'frontend/isi_artikel';
		$this->load->view('artikel_template', compact('artikel_populer','artikel_baru','artikel_isi', 'artikel', 'kategori'));
	}
}

 ?>
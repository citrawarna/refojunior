<?php defined('BASEPATH') or exit('No direct script access allowed!'); 

	class Home extends CI_Controller 
	{
		public function index($page = null){
			$per_halaman = 3;
			//menghitung offset (data dalam table)
			if($page == null) {
				$offset = 0;
			} else {
				$offset = ($page * $per_halaman) - $per_halaman;
			}

			$artikel = $this->db->order_by('tanggal', 'desc')->limit($per_halaman, $offset)->get('artikel')->result();
			$keywords = 'Refo Junior, refojunior, refo denpasar, refo stikom, refo website developer';
			$meta = 'Hi, Im Refo Junior, a Website Developer based in Denpasar, Bali. Im a student in STIMIK STIKOM Bali and i really love to make a website. ';
			$url = base_url();
			$image = base_url('img/meta-img.jpg');
			$this->load->view('home', compact('meta', 'keywords', 'image', 'url', 'artikel'));
		}
	}


?>
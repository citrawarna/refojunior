	<div class="menu-kiri bg-light">
		<div class="list-menu">
			<a href="<?= base_url('kategori') ?>" class="<?php if($this->uri->segment(1)=='kategori') echo "active"; ?>">Kategori</a>
			<a href="">Artikel</a>
			<a href="<?= base_url('portfolio') ?>" class="<?php if($this->uri->segment(1)=='portfolio') echo "active"; ?>">Portfolio</a>
			<a href="">Gudang Gambar</a>
			<br><br>
			<a href="<?= base_url('backend/logout') ?>" class="bg-danger" style="color:white">Logout</a>
		</div>
	</div>
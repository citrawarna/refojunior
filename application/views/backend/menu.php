	<div class="menu-kiri bg-light">
		<div class="list-menu">
			<a href="<?= base_url('kategori') ?>" class="<?php if($this->uri->segment(1)=='kategori') echo "active"; ?>">Kategori</a>
			<a href="<?= base_url('artikel') ?>" class="<?php if($this->uri->segment(1)=='artikel') echo "active"; ?>">Artikel</a>
			<a href="<?= base_url('portofolio') ?>" class="<?php if($this->uri->segment(1)=='portofolio') echo "active"; ?>">Portfolio</a>
			<a href="<?= base_url('gd_gambar') ?>" class="<?php if($this->uri->segment(1)=='gudang_gambar') echo "active"; ?>">Gudang Gambar</a>
			<br><br>
			<a href="<?= base_url('backend/logout') ?>" class="bg-danger" style="color:white">Logout</a>
		</div>
	</div>
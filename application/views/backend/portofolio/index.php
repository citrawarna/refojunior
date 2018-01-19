<h2>Portofolio</h2>
<br>
<a href="<?= base_url('portofolio/tambah'); ?>" class="btn btn-success">Tambah</a>
<br><br>
	<?php 
		if($this->session->flashdata('success')) { 
		    echo '<div class="alert alert-success">';
		    echo $this->session->flashdata('success');
		    echo '</div>';
		} 
     ?>
<table class="table">
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Nama Sistem</th>
		<th>Kategori</th>
		<th>Isi</th>
		<th>Gambar</th>
		<th>Action</th>
	</tr>
	<?php $i=1; foreach($portofolio as $row) { ?>
	<tr>
		<td><?= $i++ ?></td>
		<td><?= $row->tanggal ?></td>
		<td><?= $row->nama_sistem ?></td>
		<td><?= $row->nama_kategori ?></td>
		<td><?= substr($row->isi, 0, 50) ?>...</td>
		<td><img src="<?= base_url('gudang/'.$row->gambar) ?>" alt="gambar sistem" width="250px"></td>
		<td>
			<a href="<?= base_url('portofolio/edit/'.$row->id_port) ?>" class="btn btn-warning btn-sm">Edit</a>
			<br><br>
			<a href="<?= base_url('portofolio/hapus/'.$row->id_port) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data? Data yang sudah terhapus tidak dapat dikembalikan')">Hapus</a>
		</td>
	</tr>
	<?php } ?>


</table>
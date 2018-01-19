<h2>Artikel</h2>
<br>
<a href="<?= base_url('artikel/tambah') ?>" class="btn btn-success">Tambah</a>
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
		<th>Judul</th>
		<th>Kategori</th>
		<th>Isi</th>
		<th>Cover</th>
		<th>Action</th>
	</tr>
	<?php $i=1; foreach($artikel as $row) { ?>
	<tr>
		<td><?= $i++ ?></td>
		<td><?= $row->tanggal ?></td>
		<td><?= $row->judul ?></td>
		<td><?= $row->nama_kategori ?></td>
		<td><?= substr($row->isi, 0, 50).'...' ?></td>
		<td><img src="<?= base_url('gudang/'.$row->cover) ?>" alt="gambar cover" width="150px"></td>
		<td colspan="2">
			<a href="<?= base_url('artikel/edit/'.$row->link)?>" class="btn btn-warning btn-sm">Edit</a>
			<br><br>
			<a href="<?= base_url('artikel/hapus/'.$row->link)?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data? Data yang sudah terhapus tidak dapat dikembalikan')">Hapus</a>
		</td>
	</tr>
	<?php } ?>
</table>
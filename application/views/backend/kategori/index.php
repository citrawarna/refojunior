<h2>Kategori</h2>
<br>
<a href="<?= base_url('kategori/tambah') ?>" class="btn btn-success">Tambah</a>
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
		<th>Nama Kategori</th>
		<th>Keterangan</th>
		<th>Action</th>
	</tr>
	<?php $i = 1; foreach($kategori as $row) { ?>
	<tr>
		<td><?= $i++ ?></td>
		<td><?= $row->nama_kategori ?></td>
		<td><?= $row->keterangan ?></td>
		<td colspan="2">
			<a href="<?= base_url('kategori/edit/'.$row->id_kategori)?>" class="btn btn-sm btn-warning">Edit</a>
			<a href="<?= base_url('kategori/hapus/'.$row->id_kategori)?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data? Data yang sudah terhapus tidak dapat dikembalikan')">Hapus</a>
		</td>
	</tr>
	<?php } ?>
</table>
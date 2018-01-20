<h2>Gudang Gambar</h2>
<br>
<a href="<?= base_url('gd_gambar/tambah') ?>" class="btn btn-success">Tambah</a>
<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Reminder
</a>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Tabel yang menyimpan seluruh data gambar yang akan ditampilkan pada artikel, karena pada menu artikel hanya bisa
    menginput 1 gambar (cover), jadi upload gambar terlebih dahulu disini lalu load gambar menggunakan direktory gudang/namagambar
    pada input ckeditor 
  </div>
</div>

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
		<th>Nama Gambar</th>
		<th>Judul Artikel</th>
		<th>Gambar</th>
		<th>Action</th>
	</tr>
	<?php $i=1; foreach($gambar as $row) { ?>
	<tr>
		<td><?= $i++ ?></td>
		<td><?= $row->tanggal ?></td>
		<td><?= $row->nama_gambar ?></td>
		<td><?= $row->judul_artikel ?></td>
		<td><img src="<?= base_url('gudang/'.$row->nama_gambar) ?>" alt="Nama gambar" width="250px"></td>
		<td colspan="2">
			<a href="<?= base_url('gd_gambar/edit/'.$row->id_gambar)?>" class="btn btn-sm btn-warning">Edit</a>
			<a href="<?= base_url('gd_gambar/hapus/'.$row->nama_gambar)?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data? Data yang sudah terhapus tidak dapat dikembalikan')">Hapus</a>
		</td>
	</tr>
	<?php } ?>

</table>

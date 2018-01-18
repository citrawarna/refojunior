<h2><?= $ket ?> Data</h2>

<form action="<?= base_url('kategori/tambah') ?>" method="post">
	Nama Kategori :
	<input type="text" class="form-control" name="nama_kategori" >
	<?= form_error('nama_kategori', '<p class="alert alert-danger">', '</p>') ?>
	Keterangan :
	<textarea name="keterangan" class="form-control" cols="30" rows="5"></textarea>
	<?= form_error('keterangan', '<p class="alert alert-danger">', '</p>') ?>
	<br>
	<input type="submit" class="btn btn-primary" value="Simpan">

</form>
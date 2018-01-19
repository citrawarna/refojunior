<h2><?= $ket ?> Data Kategori</h2>

<?= form_open($form_action) ?>
	Nama Kategori :
	<?= form_input('nama_kategori', $input->nama_kategori, ['class' => 'form-control']); ?>
	<?= form_error('nama_kategori', '<p class="alert alert-danger">', '</p>') ?>
	
	Keterangan :
	<textarea name="keterangan" class="form-control" cols="30" rows="5" ><?= $input->keterangan ?></textarea>
	<?= form_error('keterangan', '<p class="alert alert-danger">', '</p>') ?>
	<br>
	<input type="submit" class="btn btn-primary" value="Simpan">

<?= form_close() ?>
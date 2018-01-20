<h2><?= $ket ?> Data Gambar</h2>

<?= form_open_multipart($form_action) ?>

Tanggal
<?= form_input('tanggal', $input->tanggal, ['class' => 'form-control']); ?>
<?= form_error('tanggal', '<p class="alert alert-danger">', '</p>') ?>

Gambar
<?= form_upload('nama_gambar', $input->nama_gambar, ['class' => 'form-control']) ?>
<?= form_error('nama_gambar') ?>

Judul Artikel
<?= form_input('judul_artikel', $input->judul_artikel, ['class' => 'form-control']); ?>
<?= form_error('judul_artikel', '<p class="alert alert-danger">', '</p>') ?>
<br>

<input type="submit" class="btn btn-primary" value="Simpan">

<?= form_close(); ?>
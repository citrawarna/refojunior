<h2><?= $ket ?> Data Portofolio</h2>

<?= form_open_multipart($form_action) ?>
	Tanggal
	<?= form_input('tanggal', $input->tanggal, ['class' => 'form-control']); ?>
	<?= form_error('tanggal', '<p class="alert alert-danger">', '</p>') ?>

	Nama Sistem
	<?= form_input('nama_sistem', $input->nama_sistem, ['class' => 'form-control']); ?>
	<?= form_error('nama_sistem', '<p class="alert alert-danger">', '</p>') ?>
	
	Link 
	<?= form_input('link', $input->link, ['class' => 'form-control']); ?>
	<?= form_error('link', '<p class="alert alert-danger">', '</p>') ?>
	<br>
	Kategori Sistem 
	<?= form_dropdown('id_kategori', getDropdownList('kategori', ['id_kategori', 'nama_kategori']),$input->id_kategori, 'id_kategori="kategori"') ?>
	<br><br>
	Isi Sistem :
	<textarea name="isi" name="editor1" id="editor1"  cols="30" rows="5" ><?= $input->isi ?></textarea>
	<?= form_error('isi', '<p class="alert alert-danger">', '</p>') ?>
	<br>
	
	Gambar Cover 
	<?= form_upload('gambar', $input->gambar, ['class' => 'form-control']) ?>
	<?= form_error('gambar') ?>
	<br>

	<input type="submit" class="btn btn-primary" value="Simpan">
	
	<script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>

<?= form_close() ?>
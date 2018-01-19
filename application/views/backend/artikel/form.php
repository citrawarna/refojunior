<h2><?= $ket ?> Data Artikel</h2>

<?= form_open_multipart($form_action) ?>
	Tanggal
	<?= form_input('tanggal', $input->tanggal, ['class' => 'form-control']); ?>
	<?= form_error('tanggal', '<p class="alert alert-danger">', '</p>') ?>

	Judul Artikel
	<?= form_input('judul', $input->judul, ['class' => 'form-control']); ?>
	<?= form_error('judul', '<p class="alert alert-danger">', '</p>') ?>
	
	Link Artikel
	<?= form_input('link', $input->link, ['class' => 'form-control']); ?>
	<?= form_error('link', '<p class="alert alert-danger">', '</p>') ?>
	<br>
	Kategori Artikel 
	<?= form_dropdown('id_kategori', getDropdownList('kategori', ['id_kategori', 'nama_kategori']),$input->id_kategori, 'id_kategori="kategori"') ?>
	<br><br>
	Isi Artikel :
	<textarea name="isi" name="editor1" id="editor1"  cols="30" rows="5" ><?= $input->isi ?></textarea>
	<?= form_error('isi', '<p class="alert alert-danger">', '</p>') ?>
	<br>
	
	Meta Tags
	<?= form_input('meta', $input->meta, ['class' => 'form-control']); ?>
	<?= form_error('meta', '<p class="alert alert-danger">', '</p>') ?>

	Keywords Google SEO
	<?= form_input('keywords', $input->keywords, ['class' => 'form-control']); ?>
	<?= form_error('keywords', '<p class="alert alert-danger">', '</p>') ?>
	
	Gambar Cover 
	<?= form_upload('cover', $input->cover, ['class' => 'form-control']) ?>
	<?= form_error('cover') ?>
	<br>

	<input type="submit" class="btn btn-primary" value="Simpan">
	
	<script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>

<?= form_close() ?>
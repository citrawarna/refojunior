<?php $this->load->view('head_artikel'); ?>

	<div class="container-fluid">
		<?php $this->load->view('layout/navbar'); ?>
		<div class="row fit">
			<?php $this->load->view($artikel_isi)?>
			
		</div>
		<br><br>
		<!-- contact -->
		<?php $this->load->view('layout/contact') ?>
	</div>
</body>
</html>
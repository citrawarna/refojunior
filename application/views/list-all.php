<!-- INI ADALAH HALAMAN LIST DARI PORTFOLIO DAN ARTIKEL -->
<?php $this->load->view('layout/head-home') ?>


	<?php $this->load->view('layout/navbar'); ?>

		<div class="row fit">
			<div class="overlay"></div>
			<img src="<?= base_url('img/cover.jpg') ?>" alt="cover" class="bg">
			<div class="article-all">
				<?= $text_title ?>
			</div>
		</div>

		<br>
		<div class="container">
			<?php $this->load->view($daftar) ?>
			<br>
			<!-- PAGINATION -->
			<div class="row justify-content-center">
				<nav aria-label="...">
				  <ul class="pagination pagination-lg">
				    <li class="page-item disabled">
				      <a class="page-link" href="#" tabindex="-1">1</a>
				    </li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				  </ul>
				</nav>
			</div>
		</div>
		<br><br>
		<!-- contact -->
		<?php $this->load->view('layout/contact') ?>
	</div>
	<?php $this->load->view('layout/footer') ?>
</body>
</html>
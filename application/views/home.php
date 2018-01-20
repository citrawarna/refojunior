<?php $this->load->view('layout/head-home') ?>


	<?php $this->load->view('layout/navbar'); ?>

		<div class="row fit">
			<img src="img/carousel.jpg" class="bg" width="100%" alt="img-home">
			<div class="box-home box-home-t box-home-m">
				<h1 align="center">Welcome to My Site</h1>
				<hr>
				<p class="text-home">Hi, my name is Refo Junior Farigia, a Website Developer based in Denpasar, Bali. I'm a student in STIMIK STIKOM Bali and i really love to make a website. 
				So contact me now to get special price!</p>
				<a href="#" class="btn btn-outline-primary"><i class="fa fa-envelope"></i> Contact Me</a>
			</div>
		</div>
		<br><br>

		<div class="row justify-content-center">
			<h1>My Portfolio</h1>
		</div>
		<div class="container">
			<div class="row">	
				<div class="col-md-4 col-sm-4 col-lg-4">
					<a href="#">
						<img src="img/port-1.jpg" class="img-thumbnail" alt="">
						<h4>Aplikasi Orderan Khusus Berbasis Web untuk Perusahaan</h4>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 col-lg-4">
					<a href="#">
						<img src="img/port-2.jpg" class="img-thumbnail" alt="">
						<h4>Aplikasi Perpustakaan Berbasis Web</h4>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 col-lg-4">
					<a href="#">
						<img src="<?= base_url(). 'img/port-3.jpg' ?>" class="img-thumbnail" alt="">
						<h4>Aplikasi Lamar Kerja Online Berbasis Web Untuk Perusahaan</h4>
					</a>
				</div>
			</div>
			<br>
			<div class="row">	
				<div class="col-md-4 col-sm-4 col-lg-4">
					<a href="#">
						<img src="<?= base_url('img/port-4.jpg') ?>" class="img-thumbnail" alt="">
						<h4>Website Dinamis Bali Massive Shuffle</h4>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 col-lg-4">
					<a href="#">
						<img src="img/port-5.jpg" class="img-thumbnail" alt="">
						<h4>Website Dinamis Creavi Media</h4>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 col-lg-4">
					<img src="img/soon.jpg" class="img-thumbnail" alt="">
				</div>
			</div>
		</div>
		<br><br>
		
		<div class="row relative">
			<div class="skills">
				<div class="container">
					<br>
					<div class="row justify-content-center">
						<h1>My Skills</h1>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<h2>HTML</h2>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
							</div>
						</div>
						<div class="col-md-6">
							<h2>CSS</h2>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
							</div>
						</div>	
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<h2>PHP</h2>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%</div>
							</div>
						</div>
						<div class="col-md-6">
							<h2>Javascript</h2>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
							</div>
						</div>	
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<h2>Multimedia</h2>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%</div>
							</div>
						</div>
						<div class="col-md-6">
							<h2>Hardware and Networking</h2>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
							</div>
						</div>	
					</div>
					<br><br>
					<div class="row justify-content-center">
						<p>i will always practice and learning about this, because this is my passion</p>
					</div>
				</div>
			</div>		
		</div>
		<br><br>

		<div class="row justify-content-center">
			<h1>Recent Articles</h1>
		</div>
		<br>
		<div class="container">
			<div class="row">
			<?php foreach($artikel as $row) { ?>
				<div class="col-md-4 col-lg-4">
					<div class="blog">
						<h2><?= $row->judul ?></h2>
						<img src="<?= base_url('gudang/'.$row->cover) ?>" alt="">
						<p><?= strip_tags(substr($row->isi, 0, 150)); ?>...</p>
						&nbsp;&nbsp;
						<a href="<?= base_url('articles/read/'.$row->link) ?>" class="btn btn-primary">Read More</a>
					</div>
					<br>		
				</div>
				<?php } ?>
			
			</div>
			<div class="row justify-content-center">
				<h4><a href="<?= base_url('articles') ?>">See More Articles</a></h4>
			</div>
		</div>
		<br><br>

		<?php $this->load->view('layout/contact.php') ?>
		

<?php $this->load->view('layout/footer') ?>
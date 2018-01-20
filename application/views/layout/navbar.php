	<div class="row">
			<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			  <a class="navbar-brand" href="<?= base_url() ?>">
			    <img src="<?= base_url('img/logo.jpg') ?>" height="50" alt="">
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item <?php if($this->uri->segment(1)=='') echo 'active' ?>">
			        <a class="nav-link" href="<?= base_url() ?>">Home </a>
			      </li>
			      <li class="nav-item <?php if($this->uri->segment(1)=='portfolio') echo 'active' ?>">
			        <a class="nav-link" href="<?= base_url('portfolio') ?>">Portfolio</a>
			      </li>
			      <li class="nav-item <?php if($this->uri->segment(1)=='articles') echo 'active' ?>">
			        <a class="nav-link" href="<?= base_url('articles') ?>">Articles</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Contact</a>
			      </li>
			    </ul>

			    <form class="form-inline my-2 my-lg-0">
				    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
				</form>
			  </div>
			  
			</nav>
	</div>
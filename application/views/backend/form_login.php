<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form - Refo Junior Website Developer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
</head>
<body>
	<!-- LOGIN FORM -->
	<br><br>
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-6 col-md-offset-3">
	            <div class="login-content">
	                <div class="login-title">
	                    <h4>login</h4>
	                </div>
	                <?php 
	        			if($this->session->flashdata('error')) { 
						    echo '<div class="alert alert-danger">';
						    echo $this->session->flashdata('error');
						    echo '</div>';
						} 
	                 ?>
	                <div class="login-form">
	                    <form action="<?= base_url('backend') ?>" method="post">
	                        <input name="username" placeholder="Username" type="text" class="form-control">
	                        <?= form_error('username', '<p class="alert alert-danger">', '</p>') ?>
	                        <input name="password" placeholder="Password" class="form-control" type="password">
	                        <?= form_error('password', '<p class="alert alert-danger">', '</p>') ?>
	                        <button type="submit" class="login-btn bg-primary">Login</button>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- JAVASCRIPT -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>
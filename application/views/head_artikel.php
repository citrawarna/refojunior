<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Default Meta Tags -->
    <meta name="keywords" content="<?= $artikel->keywords ?>">
    <meta name="Description" CONTENT="<?= $artikel->meta ?>">
   	<meta name="image" content="<?= base_url('gudang/'.$artikel->cover) ?>">
   	<meta name="author" content="RefoJunior">
   	<meta name="copyright" content="RefoJunior">
   	<!-- Facebook Meta Tags -->
   	<meta property="og:site_name" content="Refo Junior">
   	<meta property="og:url" content="<?= base_url($artikel->link) ?>" />
	<meta property="og:description" content="<?= $artikel->meta ?>" />
	<meta property="og:image" content="<?= base_url('gudang/'.$artikel->cover) ?>" />
	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?= $artikel->judul. 'Refo Junior Website Developer' ?>">
	<meta name="twitter:description" content="<?= $artikel->meta ?>">
	
	<title><?= $artikel->judul. ' - Refo Junior Website Developer' ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">
	<link rel="icon" href="<?= base_url('img/icon.jpg'); ?>">
</head>
<body>
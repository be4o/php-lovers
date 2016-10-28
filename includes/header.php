<?php include_once('config/config.php');?>
<?php include_once('libraries/Database.php');?>
<?php include_once('helper/format_helper.php');?>
<?php
$db = new Database();
$cat = $db->select("select * from categories"); 
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome PHPLoversBlog</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/custom.css" />

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
	<body>
		<nav class="navbar navbar-default" id="navbar">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynav" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">PHPLoversBlog</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="mynav">
			  <ul class="nav navbar-nav">
				<li ><a href="index.php">Home</a></li>
				<li><a href="posts.php">All Posts</a></li>
			  </ul>

			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<div class="container">
			<header class="header">
				<h1 class="blog-title">PHP Lovers Blog</h1>
				<p class="lead blog-des">PHP News, Tutorials videos and More.</p>
			</header>

			<div class="row main">
				<div class="col-sm-8  blog-main">

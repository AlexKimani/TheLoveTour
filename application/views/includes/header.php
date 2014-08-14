<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" http-equiv="CONTENT-TYPE" content="text/html">
	<title><?php echo $title; ?></title>
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8">
	<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8">
	<link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen"
	      charset="utf-8">
	<link href="<?php echo base_url(); ?>css/flat-ui.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8">
	<link href="<?php echo base_url(); ?>css/prettify.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8">
	<link href="<?php echo base_url(); ?>css/bootstrap-docs.css" rel="stylesheet" type="text/css" media="screen"
	      charset="utf-8">
	<link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet" type="text/css" media="screen"
	      charset="utf-8">
	<link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen"
	      charset="utf-8">
	<script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
	<script src="<?php echo base_url(); ?>js/respond.min.js"></script>
</head>
<body>
<!-- Fixed navbar -->
<div class="navbar navbar-collapse navbar-fixed-top" role="navigation" id="navbar">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">The Love Tour</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href='<?php echo base_url() . "lovetour/"; ?>'><span class="glyphicon glyphicon-home"></span>
						Home</a></li>
				<li><a href='<?php echo base_url() . "lovetour/portFolio"; ?>'><span class="glyphicon
				glyphicon-briefcase"></span>
						Portfolio</a></li>
				<li><a href='<?php echo base_url() . "lovetour/aboutUs"; ?>'><span class="glyphicon glyphicon-info-sign"></span>
						About Us</a></li>
				<li><a href='<?php echo base_url() . "lovetour/contactUs"; ?>'><span class="glyphicon
				glyphicon-envelope"></span>
						Contact Us</a></li>
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>

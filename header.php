<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Simple theme for <?php echo get_bloginfo( 'name' ); ?></title>
	<!-- <link href="<?php //bloginfo('template_directory');?>/style.css" rel="stylesheet"> -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

	<header>
		<div class="container">
      <div class="header">
				<div class="menu"><i class="fa fa-bars" aria-hidden="true"></i> Menu</div>
				<div class="title">
					<h3><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a></h3>
				</div>
				<div class="search"><i class="fa fa-search" aria-hidden="true"></i> Search</div>
      </div>
		</div>
	</header>
	<?php get_sidebar(); ?>

	<main class="">

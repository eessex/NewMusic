<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Blog Template for <?php echo get_bloginfo( 'name' ); ?></title>
	<!-- <link href="<?php //bloginfo('template_directory');?>/style.css" rel="stylesheet"> -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

	<header class="ajaxified">
		<div class="container">
      <div class="header">
  			<div class="title"><h2><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a></h2>
  			<div class="lead description"><p><?php echo get_bloginfo( 'description' ); ?></p></div></div>

        <nav class="main-nav">
          <?php
            // Primary navigation menu.
            wp_nav_menu( array(
              'theme_location' => 'primary',
            ) );
          ?>
        </nav>
      </div><!-- /.header-->
		</div>
	</header>

	<main class="ajaxified">

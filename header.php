<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
	
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>

	<!-- <link rel="stylesheet" href="https://medialoot.com/preview/sundown/css/chocolat.css"> -->
    <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115877672-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-115877672-1');
	</script> -->	
</head>

<body id="page-top" <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<!-- <header class="wrapper-fluid wrapper-navbar sticky-top" id="wrapper-navbar"> -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" data-toggle="sticky-onscroll" style="font-weight: bold">

			<?php if ('container' == $container) : ?>
				<div class="container">
			<?php else : ?>		
				<div class="container-fluid">
			<?php endif; ?>

			<!-- Your site title as branding in the menu -->
			<?php if (!has_custom_logo()) { ?>

				<?php if (is_front_page() && is_home()) : ?>

					<h1 class="navbar-brand mb-0 js-scroll-trigger"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"><?php bloginfo('name'); ?></a></h1>
					
				<?php else : ?>

					<a class="navbar-brand js-scroll-trigger" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"><?php bloginfo('name'); ?></a>
				
				<?php endif; ?>
					
				
				<?php 
				} else {
					the_custom_logo();
				} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(array(
					'theme_location' => 'primary',
					'container_class' => 'collapse navbar-collapse',
					'container_id' => 'navbarResponsive',
					'menu_class' => 'navbar-nav text-uppercase ml-auto',
					'fallback_cb' => '',
					'menu_id' => 'main-menu',
					'walker' => new understrap_WP_Bootstrap_Navwalker(),
				)); ?>
			<?php if ('container' == $container) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	<!-- </div>.wrapper-navbar end -->
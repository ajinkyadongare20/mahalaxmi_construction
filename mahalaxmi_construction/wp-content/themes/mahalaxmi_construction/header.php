<?php

/**
 * The header for our theme
 * Template Name: Header
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mahalaxmi_construction
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<title>Mahalaxmi Construction</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Construction Company Website Template" name="keywords">
	<meta content="Construction Company Website Template" name="description">

	<!-- Favicon -->
	<link href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" rel="icon">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/mahalaxmi_construction_logo.png" type="image/jpg">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">


	<!-- CSS Libraries -->
	<!-- Bootstrap 5 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/lib/flaticon/font/flaticon.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/lib/slick/slick.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/lib/slick/slick-theme.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
</head>


<body>
	<div class="wrapper">
		<!-- Top Bar Start -->
		<div class="top-bar">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-4 col-md-12">
						<div class="logo header-logo">
							<a href="index.html">
								<!-- <h1>.</h1> -->
								<img src="<?php bloginfo('template_directory'); ?>/img/mahalaxmi_construction_logo.png" alt="Logo">
							</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-7 d-none d-lg-block">
						<div class="row">
							<div class="col-4">
								<div class="top-bar-item">
									<div class="top-bar-icon">
										<i class="flaticon-calendar"></i>
									</div>
									<div class="top-bar-text">
										<h3>Working Hours</h3>
										<p>Mon - Sat : 08:00 - 19:00</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="top-bar-item">
									<div class="top-bar-icon">
										<i class="flaticon-call"></i>
									</div>
									<div class="top-bar-text">
										<h3>Call Us</h3>
										<p>+91 78921 00691</p>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="top-bar-item">
									<div class="top-bar-icon">
										<i class="flaticon-send-mail"></i>
									</div>
									<div class="top-bar-text">
										<h3>Email Us</h3>
										<p>info@mahaconstruction.com</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Top Bar End -->

		<!-- Nav Bar Start -->
		<div class="nav-bar">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
					<a href="#" class="navbar-brand">MENU</a>
					<button class="navbar-toggler" type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarCollapse"
						aria-controls="navbarCollapse"
						aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarCollapse">

						<?php
						wp_nav_menu(array(
							'theme_location'    => 'menu-1',
							'container'         => false,
							'container_class'   => '',
							'menu_class'        => 'navbar-nav ms-auto',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'depth'             => 3,
							'walker'            => new wp_bootstrap_navwalker()
						));
						?>

						<a href="<?php echo site_url('/about'); ?>" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a>
					</div>
				</nav>

				<!-- Full Screen Search End -->
				<div class="clearfix"></div>
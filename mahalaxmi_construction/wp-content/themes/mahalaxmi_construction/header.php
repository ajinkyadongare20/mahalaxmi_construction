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
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- Bootstrap 4.6 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

<?php
$header_page_id = 13;
?>

<body>
	<div class="wrapper">
		<!-- Top Bar Start -->
		<div class="top-bar">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-4 col-md-12">
						<div class="logo header-logo">
							<a href="index.html">
								<?php if ($header_company_logo = get_field('header_company_logo', $header_page_id)): ?>
									<img src="<?php echo esc_url($header_company_logo); ?>" alt="Mahalaxmi Construction Logo">
								<?php endif; ?>
							</a>
						</div>
					</div>

					<div class="col-lg-8 col-md-7 d-none d-lg-block">
						<div class="row">
							<!-- Working Hours -->
							<div class="col-4">
								<div class="top-bar-item">
									<div class="top-bar-icon">
										<i class="flaticon-calendar"></i>
									</div>
									<div class="top-bar-text">
										<h3><?php echo esc_html(get_field('working_hours_title', $header_page_id)); ?></h3>
										<?php echo wp_kses_post(get_field('working_hours_text', $header_page_id)); ?>
									</div>
								</div>
							</div>

							<!-- Phone -->
							<div class="col-4">
								<div class="top-bar-item">
									<div class="top-bar-icon">
										<i class="flaticon-call"></i>
									</div>
									<div class="top-bar-text">
										<h3><?php echo esc_html(get_field('phone_title', $header_page_id)); ?></h3>
										<p><?php echo wp_kses_post(get_field('phone_number', $header_page_id)); ?></p>
									</div>
								</div>
							</div>

							<!-- Email -->
							<div class="col-4">
								<div class="top-bar-item">
									<div class="top-bar-icon">
										<i class="flaticon-send-mail"></i>
									</div>
									<div class="top-bar-text">
										<h3><?php echo esc_html(get_field('email_title', $header_page_id)); ?></h3>
										<p><?php echo wp_kses_post(get_field('email_address', $header_page_id)); ?></p>
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
					<a href="<?php echo site_url(); ?>" class="navbar-brand">
						<span class="menu-text"></span>
						<img src="<?php bloginfo('template_directory'); ?>/img/mahalaxmi_construction_logo.png" class="mobile-menu-logo" alt="Logo">
					</a>
					<button class="navbar-toggler" type="button"
						data-toggle="collapse"
						data-target="#navbarCollapse"
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

					</div>
					<?php
					$quote_link = get_field('quote_button_link', $header_page_id);
					$quote_text = get_field('quote_button_text', $header_page_id);
					if ($quote_link && $quote_text):
						$link_url = is_array($quote_link) ? $quote_link['url'] : $quote_link;
						$link_target = is_array($quote_link) ? $quote_link['target'] : '';
					?>
						<a href="<?php echo esc_url($link_url); ?>" class="btn btn-primary px-3 d-none d-lg-block"
							<?php echo $link_target ? 'target="' . esc_attr($link_target) . '"' : ''; ?>><?php echo esc_html($quote_text); ?></a>
					<?php endif; ?>
				</nav>

				<!-- Full Screen Search End -->
				<div class="clearfix"></div>
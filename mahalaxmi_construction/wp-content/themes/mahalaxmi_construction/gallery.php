<?php

/**
 * The main template file
 * Template Name: Gallery
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mahalaxmi_construction
 */

get_header();
?>

<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel" data-slide-to="0" class="active"></li>
		<li data-target="#carousel" data-slide-to="1"></li>
		<li data-target="#carousel" data-slide-to="2"></li>
	</ol>

	<div class="carousel-inner">

		<!-- Slide 1 -->
		<div class="carousel-item active">
			<img src="<?php bloginfo('template_directory'); ?>/img/carousel-1.jpg" alt="Mahalaxmi Construction">
			<div class="carousel-caption">
				<p class="animated fadeInRight">Building • Waterproofing • Renovation</p>
				<h1 class="animated fadeInLeft">Complete Construction & Waterproofing Solutions</h1>
				<a class="btn animated fadeInUp" href="#contact">Get A Quote</a>
			</div>
		</div>

		<!-- Slide 2 -->
		<div class="carousel-item">
			<img src="<?php bloginfo('template_directory'); ?>/img/carousel-2.jpg" alt="Terrace Waterproofing">
			<div class="carousel-caption">
				<p class="animated fadeInRight">Leakage? Seepage? Damp Walls?</p>
				<h1 class="animated fadeInLeft">Expert Terrace & Basement Waterproofing Services</h1>
				<a class="btn animated fadeInUp" href="#services">Get A Quote</a>
			</div>
		</div>

		<!-- Slide 3 -->
		<div class="carousel-item">
			<img src="<?php bloginfo('template_directory'); ?>/img/carousel-3.jpg" alt="Home Renovation">
			<div class="carousel-caption">
				<p class="animated fadeInRight">Strong Foundation. Lasting Protection.</p>
				<h1 class="animated fadeInLeft">Trusted Construction & Renovation Experts</h1>
				<a class="btn animated fadeInUp" href="#contact">Get A Quote</a>
			</div>
		</div>

	</div>

	<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>

	<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- Carousel End -->











<?php
// get_sidebar();
get_footer();

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

<!-- Page Header -->
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><?php echo esc_html(get_field('banner_page_tittle')); ?></h2>
			</div>
			<div class="col-12">
				<?php
				$home_link = get_field('banner_page_home_link');
				if ($home_link) :
					$home_url = is_array($home_link) ? $home_link['url'] : $home_link;
				?>
					<a href="<?php echo esc_url($home_url); ?>">
						<?php echo esc_html(get_field('banner_page_home_text')); ?>
					</a>
				<?php endif; ?>
				<?php
				$page_link = get_field('banner_page_name_link');
				if ($page_link) :
					$page_url = is_array($page_link) ? $page_link['url'] : $page_link;
				?>
					<a href="<?php echo esc_url($page_url); ?>">
						<?php echo esc_html(get_field('banner_page_name')); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>


<!-- Start Gallery  -->
<div class="container-fluid">
	<div class="container px-0 py-5">
		<h2 class="text-center mb-4">Our Gallery</h2>
		<div class="row">

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/1.jpeg" class="product-card rounded-0" alt="Project Number 1">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Terrace Waterproofing Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/2.jpeg" class="product-card rounded-0" alt="Project Number 1">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Bathroom Waterproofing Project</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/3.jpeg" class="product-card rounded-0" alt="Project Number 1">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Water Tank Waterproofing</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/4.jpeg" class="product-card rounded-0" alt="Project Number 1">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">RCC Wall Waterproofing</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/5.jpeg" class="product-card rounded-0" alt="Project Number 2">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Internal Plaster Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/6.jpeg" class="product-card rounded-0" alt="Project Number 3">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">External Plaster Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/7.jpeg" class="product-card rounded-0" alt="Project Number 4">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Compound Wall Construction</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/8.jpeg" class="product-card rounded-0" alt="Project Number 4">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Basement Waterproofing</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/9.jpeg" class="product-card rounded-0" alt="Project Number 4">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Balcony Waterproofing Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/10.jpeg" class="product-card rounded-0" alt="Project Number 4">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Swimming Pool Waterproofing</h5>
					</div>
				</div>
			</div>

			<!-- Continue same structure -->

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/11.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Residential Waterproofing Project</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/12.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Commercial Building Waterproofing</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/13.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Roof Leakage Repair Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/14.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Brick Work Construction</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/15.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Structural Repair Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/16.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Concrete Repair Project</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/17.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">House Renovation Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/18.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Industrial Waterproofing</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/19.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Water Leakage Solution</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/20.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Building Repair Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/21.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Construction Site Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/22.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Concrete Waterproofing</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/23.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Structural Strengthening</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/24.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Home Waterproofing</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/25.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Leakage Repair Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/26.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Terrace Repair Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/27.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Wall Waterproofing</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/28.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Building Maintenance Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/29.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Residential Construction Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0"><img src="<?php bloginfo('template_directory'); ?>/img/gallery/30.jpeg" class="product-card rounded-0" alt="">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Final Project Completion</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/31.jpeg" class="product-card rounded-0" alt="Project Number 31">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Construction Work Project</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/32.jpeg" class="product-card rounded-0" alt="Project Number 32">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Waterproofing Application</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/33.jpeg" class="product-card rounded-0" alt="Project Number 33">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Terrace Leakage Repair</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/34.jpeg" class="product-card rounded-0" alt="Project Number 34">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Building Repair Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/35.jpeg" class="product-card rounded-0" alt="Project Number 35">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Residential Waterproofing</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/36.jpeg" class="product-card rounded-0" alt="Project Number 36">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Exterior Wall Waterproofing</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/37.jpeg" class="product-card rounded-0" alt="Project Number 37">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Concrete Structure Repair</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/38.jpeg" class="product-card rounded-0" alt="Project Number 38">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Roof Waterproofing Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/39.jpeg" class="product-card rounded-0" alt="Project Number 39">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Leakage Protection System</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/40.jpeg" class="product-card rounded-0" alt="Project Number 40">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Water Tank Repair Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/41.jpeg" class="product-card rounded-0" alt="Project Number 41">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Balcony Waterproofing</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/42.jpeg" class="product-card rounded-0" alt="Project Number 42">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Industrial Waterproofing Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/43.jpeg" class="product-card rounded-0" alt="Project Number 43">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Structural Repair Project</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/44.jpeg" class="product-card rounded-0" alt="Project Number 44">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Concrete Waterproof Coating</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/45.jpeg" class="product-card rounded-0" alt="Project Number 45">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Wall Leakage Repair</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/46.jpeg" class="product-card rounded-0" alt="Project Number 46">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Building Renovation Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/47.jpeg" class="product-card rounded-0" alt="Project Number 47">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Residential Building Repair</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/48.jpeg" class="product-card rounded-0" alt="Project Number 48">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Construction Site Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/49.jpeg" class="product-card rounded-0" alt="Project Number 49">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Terrace Repair Project</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/50.jpeg" class="product-card rounded-0" alt="Project Number 50">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Roof Protection System</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/51.jpeg" class="product-card rounded-0" alt="Project Number 51">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Waterproof Coating Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/52.jpeg" class="product-card rounded-0" alt="Project Number 52">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Building Maintenance Project</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/53.jpeg" class="product-card rounded-0" alt="Project Number 53">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Concrete Protection Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/54.jpeg" class="product-card rounded-0" alt="Project Number 54">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Basement Waterproofing Project</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/55.jpeg" class="product-card rounded-0" alt="Project Number 55">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Industrial Construction Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/56.jpeg" class="product-card rounded-0" alt="Project Number 56">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Residential Waterproofing Project</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/57.jpeg" class="product-card rounded-0" alt="Project Number 57">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Wall Protection Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/58.jpeg" class="product-card rounded-0" alt="Project Number 58">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Roof Waterproofing System</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/59.jpeg" class="product-card rounded-0" alt="Project Number 59">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Construction Progress Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/60.jpeg" class="product-card rounded-0" alt="Project Number 60">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Project Completion Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/61.jpeg" class="product-card rounded-0" alt="Project Number 61">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Concrete Surface Protection</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/62.jpeg" class="product-card rounded-0" alt="Project Number 62">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Industrial Repair Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/63.jpeg" class="product-card rounded-0" alt="Project Number 63">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Structural Strengthening Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/64.jpeg" class="product-card rounded-0" alt="Project Number 64">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Leakage Protection Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/65.jpeg" class="product-card rounded-0" alt="Project Number 65">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Building Restoration Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/66.jpeg" class="product-card rounded-0" alt="Project Number 66">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Terrace Coating Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/67.jpeg" class="product-card rounded-0" alt="Project Number 67">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Construction Site Progress</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/68.jpeg" class="product-card rounded-0" alt="Project Number 68">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Residential Construction Work</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/69.jpeg" class="product-card rounded-0" alt="Project Number 69">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Roof Leakage Solution</h5>
					</div>
				</div>
			</div>

			<div class="col-md-6 mb-4 py-3">
				<div class="card team-card h-100 mx-2 rounded-0">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/70.jpeg" class="product-card rounded-0" alt="Project Number 70">
					<div class="card-body">
						<h5 class="mb-3" style="font-weight: 700;">Final Completed Project</h5>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- End Products  -->


<!-- FAQs Start -->
<div class="faqs">
	<div class="container">
		<div class="section-header text-center">
			<p class="text-uppercase">Frequently Asked Questions</p>
			<h2>Common Questions About Our Services</h2>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div id="accordion-1">

					<div class="card wow fadeInLeft" data-wow-delay="0.1s">
						<div class="card-header">
							<a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
								What is terrace waterproofing and why is it important?
							</a>
						</div>
						<div id="collapseOne" class="collapse" data-parent="#accordion-1">
							<div class="card-body">
								Terrace waterproofing protects your roof from water leakage, seepage and structural damage. It increases the life of your building and prevents cracks, dampness and ceiling leakage.
							</div>
						</div>
					</div>

					<div class="card wow fadeInLeft" data-wow-delay="0.2s">
						<div class="card-header">
							<a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
								Which waterproofing chemical do you use?
							</a>
						</div>
						<div id="collapseTwo" class="collapse" data-parent="#accordion-1">
							<div class="card-body">
								We use high-quality waterproofing materials like Dr. Fixit, SmartCare coatings and other branded chemicals depending on site condition and customer requirement.
							</div>
						</div>
					</div>

					<div class="card wow fadeInLeft" data-wow-delay="0.3s">
						<div class="card-header">
							<a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
								Do you provide bathroom and water tank waterproofing?
							</a>
						</div>
						<div id="collapseThree" class="collapse" data-parent="#accordion-1">
							<div class="card-body">
								Yes, we provide complete bathroom waterproofing and internal/external water tank waterproofing solutions to prevent leakage and dampness problems.
							</div>
						</div>
					</div>

					<div class="card wow fadeInLeft" data-wow-delay="0.4s">
						<div class="card-header">
							<a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
								Do you construct compound walls and retaining walls?
							</a>
						</div>
						<div id="collapseFour" class="collapse" data-parent="#accordion-1">
							<div class="card-body">
								Yes, we construct brick compound walls, RCC compound walls and strong retaining walls with proper foundation and quality materials.
							</div>
						</div>
					</div>

					<div class="card wow fadeInLeft" data-wow-delay="0.5s">
						<div class="card-header">
							<a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
								Do you provide plastering services?
							</a>
						</div>
						<div id="collapseFive" class="collapse" data-parent="#accordion-1">
							<div class="card-body">
								We provide internal plaster, external plaster, slab plaster, ceiling plaster and terrace plaster with smooth and durable finishing.
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="col-md-6">
				<div id="accordion-2">

					<div class="card wow fadeInRight" data-wow-delay="0.1s">
						<div class="card-header">
							<a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
								Do you handle basement waterproofing?
							</a>
						</div>
						<div id="collapseSix" class="collapse" data-parent="#accordion-2">
							<div class="card-body">
								Yes, we specialize in basement waterproofing and basement retaining wall treatment to protect underground areas from water damage.
							</div>
						</div>
					</div>

					<div class="card wow fadeInRight" data-wow-delay="0.2s">
						<div class="card-header">
							<a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
								Do you provide swimming pool waterproofing?
							</a>
						</div>
						<div id="collapseSeven" class="collapse" data-parent="#accordion-2">
							<div class="card-body">
								Yes, we provide complete swimming pool waterproofing solutions to prevent leakage and ensure long-term durability.
							</div>
						</div>
					</div>

					<div class="card wow fadeInRight" data-wow-delay="0.3s">
						<div class="card-header">
							<a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
								Do you provide home renovation services?
							</a>
						</div>
						<div id="collapseEight" class="collapse" data-parent="#accordion-2">
							<div class="card-body">
								Yes, we provide complete home renovation including plaster work, waterproofing, structural repairs and remodeling services.
							</div>
						</div>
					</div>

					<div class="card wow fadeInRight" data-wow-delay="0.4s">
						<div class="card-header">
							<a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
								Do you provide demolition (Todphod) services?
							</a>
						</div>
						<div id="collapseNine" class="collapse" data-parent="#accordion-2">
							<div class="card-body">
								Yes, we provide safe and professional demolition services for houses, old structures and renovation projects.
							</div>
						</div>
					</div>

					<div class="card wow fadeInRight" data-wow-delay="0.5s">
						<div class="card-header">
							<a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
								How can I contact Mahalaxmi Construction?
							</a>
						</div>
						<div id="collapseTen" class="collapse" data-parent="#accordion-2">
							<div class="card-body">
								You can contact us for a site visit and quotation. We provide reliable civil work and waterproofing services with quality assurance.
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
<!-- FAQs End -->


<!-- Quote Start -->
<div class="container-fluid py-lg-5 py-0 wow fadeInUp" data-wow-delay="0.1s">
	<div class="container py-5">
		<div class="row g-5">

			<div class="col-lg-7">
				<div class="section-header text-start">
					<p class="text-uppercase">Get a Free Estimate</p>
					<h2>Planning Waterproofing or Construction Work? Get a Quote Today</h2>
				</div>

				<div class="row gx-3">
					<div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
						<h5 class="mb-4 quote-subheading">
							<i class="fa fa-reply m-2"></i>Quick Response within 24 hours
						</h5>
					</div>

					<div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
						<h5 class="mb-4 quote-subheading">
							<i class="fa fa-tools m-2"></i>Professional Site Inspection
						</h5>
					</div>
				</div>

				<p class="mb-4">
					Looking for reliable waterproofing or construction services? Mahalaxmi Construction offers
					expert solutions including terrace waterproofing, bathroom waterproofing, water tank sealing,
					plaster work, compound wall construction, basement waterproofing, and home renovation services.
					Fill out the form to request a quote and our team will contact you shortly to discuss your project.
				</p>

				<div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">

					<div class="quote-call-icon d-flex align-items-center justify-content-center rounded"
						style="width: 60px; height: 60px;">
						<i class="fa fa-phone-alt text-white"></i>
					</div>

					<div class="ps-4">
						<h5 class="m-2 quote-subheading">Need immediate assistance?</h5>
						<h4 class="m-2 fw-bold" style="font-size: 1.5rem; font-weight:bold;">
							+91 7892100691
						</h4>
					</div>

				</div>
			</div>


			<div class="col-lg-5">
				<div class="quote-form rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">

					<form>

						<div class="row g-3">

							<div class="col-12 my-2">
								<input type="text" class="form-control border-0"
									placeholder="Your Name *"
									style="height: 55px;" required>
							</div>

							<div class="col-12 my-2">
								<input type="text" class="form-control border-0"
									placeholder="Project Location"
									style="height: 55px;">
							</div>

							<div class="col-12 my-2">
								<input type="email" class="form-control border-0"
									placeholder="Email Address *"
									style="height: 55px;" required>
							</div>

							<div class="col-12 my-2">
								<input type="tel" class="form-control border-0"
									placeholder="Phone Number"
									style="height: 55px;" required>
							</div>

							<div class="col-12 my-2">
								<select class="form-select border-0"
									style="height: 55px; width: 100%;" required>

									<option selected disabled>Select Service *</option>
									<option value="terrace-waterproofing">Terrace Waterproofing</option>
									<option value="bathroom-waterproofing">Bathroom Waterproofing</option>
									<option value="water-tank">Water Tank Waterproofing</option>
									<option value="basement-waterproofing">Basement Waterproofing</option>
									<option value="plaster-work">Plaster Work</option>
									<option value="compound-wall">Compound Wall Construction</option>
									<option value="home-renovation">Home Renovation</option>
									<option value="other">Other</option>

								</select>
							</div>

							<div class="col-12 my-2">
								<textarea class="form-control border-0"
									rows="3"
									placeholder="Describe your project requirements"></textarea>
							</div>

							<div class="col-12 my-2">
								<button class="btn w-100 py-3" type="submit">
									Request a Quote
								</button>
							</div>

						</div>

					</form>

				</div>
			</div>

		</div>
	</div>
</div>
<!-- Quote End -->












<?php
// get_sidebar();
get_footer();

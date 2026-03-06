<?php

/**
 * The main template file
 * Template Name: Contact
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


<!-- Contact Start -->
<div class="container-fluid bg-light">
	<div class="container py-5 py-sm-4 py-md-5 px-2 px-sm-3 px-md-4">

		<div class="mx-auto text-center">
			<div class="section-header text-center">
				<h2 class="fw-bold" style="margin: 10px;">Get in Touch with Mahalaxmi Construction</h2>
				<span class="text-muted">
					Contact us for professional waterproofing & construction services in Pune.
					Our team provides reliable solutions for terrace waterproofing, plaster work,
					wall construction, home renovation projects.
				</span>
			</div>
		</div>

		<div class="bg-white shadow p-3 p-sm-4 p-md-5">
			<div class="row g-4">

				<!-- Contact Details -->
				<div class="col-lg-6">

					<div class="bg-white shadow p-3 p-sm-4 p-md-5">

						<div class="py-2">

							<h5 class="mb-3" style="font-weight: 700;">Mahalaxmi Construction</h5>

							<h5 class="mt-4">Email:</h5>
							<p>
								<a href="mailto:info@mahalaxmiconstruction.in" class="text-dark text-decoration-none">
									info@mahalaxmiconstruction.in
								</a>
							</p>

							<h5 class="mt-4">Phone:</h5>
							<p>
								<a href="tel:+917892100691" class="text-dark text-decoration-none">
									+91 7892100691
								</a>
							</p>

							<h5 class="mt-4">Office Address:</h5>
							<p>
								Mahalaxmi Construction<br>
								Pune, Maharashtra<br>
								India
							</p>

							<h5 class="mt-4">Our Services:</h5>
							<p>
								Terrace Waterproofing, Bathroom Waterproofing, Water Tank Waterproofing,
								RCC Wall Waterproofing, Plaster Work, Compound Wall Construction,
								Basement Waterproofing, and Home Renovation Services.
							</p>

							<h5 class="mt-4">Social Media:</h5>

							<div class="d-flex gap-3">

								<a class="btn btn-outline-primary rounded-pill contact-icons" href="#" target="_blank">
									<i class="fab fa-facebook-f"></i>
								</a>

								<a class="btn btn-outline-primary rounded-pill contact-icons" href="#" target="_blank">
									<i class="fab fa-instagram"></i>
								</a>

								<a class="btn btn-outline-primary rounded-pill contact-icons" href="https://wa.me/917892100691" target="_blank">
									<i class="fab fa-whatsapp"></i>
								</a>

								<a class="btn btn-outline-primary rounded-pill contact-icons" href="#" target="_blank">
									<i class="fab fa-youtube"></i>
								</a>

							</div>

						</div>

					</div>

				</div>

				<!-- Contact Form -->
				<div class="col-lg-6">
					<?php echo do_shortcode('[contact-form-7 id="2fb0c43" title="Contact form 1"]'); ?>
				</div>

			</div>
		</div>

	</div>
</div>
<!-- Contact End -->


<!-- Contact Map Start -->
<div class="container-fluid bg-white py-5">
	<div class="container d-flex flex-column flex-lg-row gap-4 align-items-stretch">

		<!-- Left Image -->
		<div class="w-100 w-lg-50" style="flex: 1;">
			<img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg"
				alt="Mahalaxmi Construction Work"
				style="height: 450px; width: 100%; object-fit: cover;" />
		</div>

		<!-- Google Map -->
		<div class="w-100 w-lg-50" style="flex: 1;">
			<iframe
				src="https://maps.google.com/maps?q=Pune%20Maharashtra&t=&z=13&ie=UTF8&iwloc=&output=embed"
				width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
			</iframe>
		</div>

	</div>
</div>
<!-- Contact Map End -->











<?php
// get_sidebar();
get_footer();

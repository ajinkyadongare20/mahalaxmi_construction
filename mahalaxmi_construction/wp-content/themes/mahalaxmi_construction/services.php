<?php

/**
 * The main template file
 * Template Name: Services
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
$quote_page_id = 39;
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


<!-- Services Start -->
<div id="services" class="py-5">
	<div class="container">

		<!-- Header -->
		<div class="row text-center mb-lg-5 mb-0 ">
			<div class="section-header text-center">
				<p class="text-uppercase"><?php echo esc_html(get_field('services_section_header')); ?></p>
				<h2 class="fw-bold" style="margin: 10px;"><?php echo esc_html(get_field('services_small_title')); ?></h2>
				<span class="text-muted" style="margin: 10px !important;">
					<?php echo wp_kses_post(get_field('services_small_title_description')); ?>
				</span>
			</div>
		</div>

		<div class="row g-4">

			<?php
			$args = [
				'post_type'      => 'services_speciality',
				'posts_per_page' => -1,
				'orderby'        => 'date',
				'order'          => 'ASC',
			];

			$query = new WP_Query($args);

			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();

					$icon = get_field('services_speciality_icon');
					$name = get_field('services_speciality_name');
			?>

					<div class="col-12 col-md-4 col-lg-3">
						<div class="service-card text-center">

							<div class="service-feature-icon">
								<i class="<?php echo esc_attr($icon); ?>"></i>
							</div>

							<h5 class="mt-3">
								<?php echo esc_html($name); ?>
							</h5>

						</div>
					</div>

			<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>

		</div>
	</div>
</div>
<!-- Services End -->


<!--Services About Section -->
<div class="services-highlight py-5">
	<div class="container text-center text-white">
		<h3 class="fw-bold text-white mb-3">
			<?php echo esc_html(get_field('services_about_title')); ?>
		</h3>
		<p class="mb-0">
			<?php echo wp_kses_post(get_field('services_about_description')); ?>
		</p>
	</div>

	<div class="container text-center text-white py-5">
		<h2 class="fw-bold mb-3 text-white">
			<?php echo esc_html(get_field('services_cta_title')); ?>
		</h2>
		<p class="mb-4">
			<?php echo wp_kses_post(get_field('services_cta_description')); ?>
		</p>

		<?php
		$services_cta_button_link = get_field('services_cta_button_link');
		$services_cta_button_text = get_field('services_cta_button_text');
		?>
		<?php if ($services_cta_button_link && $services_cta_button_text): ?>
			<a class="btn py-2 px-3 me-3" href="<?php echo esc_url($services_cta_button_link); ?>"
				target="_blank">
				<?php echo esc_html($services_cta_button_text); ?>
				<div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
					<i class="fa fa-arrow-right"></i>
				</div>
			</a>
		<?php endif; ?>
	</div>
</div>


<!-- Content Section -->
<div class="container py-5">
	<div class="row align-items-center">

		<div class="col-md-6 mb-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/gallery/18.jpeg"
				class="img-fluid rounded shadow"
				style="width: 100%; object-fit: scale-down;"
				alt="">
		</div>

		<div class="col-md-6">

			<div class="section-header text-start">
				<p class="text-uppercase">
					<?php echo esc_html(get_field('services_why_choose_heading')); ?>
				</p>

				<h2>
					<?php echo esc_html(get_field('services_why_choose_title')); ?>
				</h2>
			</div>

			<p class="mb-4">
				<?php echo wp_kses_post(get_field('services_why_choose_description')); ?>
			</p>

			<div class="text-dark mb-4">
				<?php for ($i = 1; $i <= 6; $i++): ?>
					<p class="fs-5">
						<span class="fa fa-check me-2"></span>
						<?php echo esc_html(get_field("services_why_choose_points_$i")); ?>
					</p>
				<?php endfor; ?>
			</div>
		</div>
	</div>
</div>


<!-- New Contain Start  -->
<div class="container py-lg-5 py-0 wow fadeInUp" data-wow-delay="0.1s">
	<div class="row">
		<div class="col-lg-12">

			<div class="section-header text-start">
				<h2 class="fw-bold" style="margin: 10px;">
					<?php echo esc_html(get_field('services_capabilities_title')); ?>
				</h2>
			</div>

			<p class="mt-31s">
				<?php echo wp_kses_post(get_field('services_capabilities_description_1')); ?>
			</p>

			<p>
				<b>
					<?php echo wp_kses_post(get_field('services_capabilities_description_2')); ?>
				</b>
			</p>

			<ul class="list-unstyled capabilities-list">
				<?php for ($i = 1; $i <= 7; $i++): ?>
					<li>
						<span class="custom-bullet">➤</span>
						<?php echo esc_html(get_field("services_capabilities_point_$i")); ?>
					</li>
				<?php endfor; ?>
			</ul>
			<p>
				<?php echo wp_kses_post(get_field('services_capabilities_bottom_text')); ?>
			</p>

		</div>
	</div>
</div>


<!-- Why Choose Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="row g-5">

			<!-- Left Content -->
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

				<div class="section-header text-start">
					<h2><?php echo esc_html(get_field('services_why_clients_choose_heading')); ?></h2>
				</div>

				<?php echo wp_kses_post(get_field('services_why_clients_choose_description')); ?>

				<?php
				$args = [
					'post_type'      => 'services_why_client',
					'posts_per_page' => -1,
					'orderby'        => 'date',
					'order'          => 'ASC',
				];

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post();
				?>

						<div class="d-flex mb-5">

							<div class="flex-shrink-0 btn-square rounded-circle d-flex align-items-center justify-content-center"
								style="width: 90px; height: 90px; background-color: #002a5b;">

								<i class="<?php echo esc_attr(get_field('services_why_choose_client_icons')); ?> fa-2x text-white"></i>

							</div>

							<div class="ml-4">

								<h5 class="mb-3">
									<?php echo esc_html(get_field('services_why_choose_client_heading')); ?>
								</h5>

								<span>
									<?php echo esc_html(get_field('services_why_choose_client_description')); ?>
								</span>

							</div>

						</div>

				<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>

			</div>

			<!-- Right Image -->
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
				<div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
					<?php if ($image1 = get_field('services_why_clients_choose_image')): ?>
						<img class="position-absolute w-100 h-100"
							src="<?php echo esc_url($image1); ?>" alt="Why Choose Leal Software Solution"
							style="object-fit: cover;">
					<?php endif; ?>

				</div>

			</div>
		</div>
	</div>
</div>
<!-- Why Choose End -->


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
					<p class="text-uppercase">
						<?php echo esc_html(get_field('quote_small_title', $quote_page_id)); ?>
					</p>
					<h2><?php echo esc_html(get_field('quote_heading', $quote_page_id)); ?></h2>
				</div>

				<div class="row gx-3">
					<div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
						<h5 class="mb-4 quote-subheading">
							<i class="fa fa-reply m-2"></i>
							<?php echo esc_html(get_field('quote_feature_1', $quote_page_id)); ?>
						</h5>
					</div>
					<div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
						<h5 class="mb-4 quote-subheading">
							<i class="fa fa-tools m-2"></i>
							<?php echo esc_html(get_field('quote_feature_2', $quote_page_id)); ?>
						</h5>
					</div>
				</div>

				<?php echo wp_kses_post(get_field('quote_description', $quote_page_id)); ?>

				<div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
					<div class="quote-call-icon d-flex align-items-center justify-content-center rounded"
						style="width: 60px; height: 60px;">
						<i class="fa fa-phone-alt text-white"></i>
					</div>

					<div class="ps-4">
						<h5 class="m-2 quote-subheading">
							<?php echo esc_html(get_field('quote_assistance_text', $quote_page_id)); ?>
						</h5>
						<h4 class="m-2 fw-bold" style="font-size: 1.5rem; font-weight: bold;">
							<?php echo esc_html(get_field('quote_phone_number', $quote_page_id)); ?>
						</h4>
					</div>
				</div>
			</div>

			<div class="col-lg-5">
				<div class="quote-form rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
					<?php echo do_shortcode('[contact-form-7 id="c569c15" title="Contact form 2 - Quote"]'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Quote End -->


<?php
// get_sidebar();
get_footer();

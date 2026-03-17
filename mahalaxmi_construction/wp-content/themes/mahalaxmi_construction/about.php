<?php

/**
 * The main template file
 * Template Name: About
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

<!-- About Page -->
<div class="container-fluid about-page py-5">
	<div class="row">
		<div class="section-header text-center">
			<p><?php echo esc_html(get_field('about_section_small_title')); ?></p>
			<h2 class="px-3"><?php echo esc_html(get_field('about_section_main_title')); ?></h2>
		</div>
	</div>

	<div class="row g-4">

		<!-- Overview Card -->
		<div class="col-lg-6">
			<div class="about-card overview-card h-100 animate-on-scroll">

				<div class="fact d-flex align-items-center mb-4">
					<div class="fact-icon">
						<i class="flaticon-worker"></i>
					</div>
					<h3><?php echo esc_html(get_field('about_overview_title')); ?></h3>
				</div>

				<p><?php echo wp_kses_post(get_field('about_overview_description_1')); ?></p>

				<p class="about-subheading">
					<?php echo esc_html(get_field('about_overview_description_2')); ?>
				</p>

				<ul class="service-list">
					<?php for ($i = 1; $i <= 5; $i++):
						$field = get_field("about_service_list_$i");
						if ($field): ?>
							<li><i class="fas fa-check-circle"></i> <?php echo esc_html($field); ?></li>
					<?php endif;
					endfor; ?>
				</ul>


				<div class="tagline">
					<i class="fas fa-quote-left"></i>
					<?php echo esc_html(get_field('about_overview_tagline')); ?>
					<i class="fas fa-quote-right"></i>
				</div>

			</div>
		</div>


		<!-- History Card -->
		<div class="col-lg-6">
			<div class="about-card history-card h-100 animate-on-scroll">

				<div class="fact d-flex align-items-center mb-4">
					<div class="fact-icon">
						<i class="flaticon-building"></i>
					</div>

					<h3><?php echo esc_html(get_field('about_journey_title')); ?></h3>
				</div>

				<p><?php echo wp_kses_post(get_field('about_journey_description_1')); ?></p>

				<p><?php echo wp_kses_post(get_field('about_journey_description_2')); ?></p>

				<div class="founder-note">
					<?php echo wp_kses_post(get_field('about_founder_vision')); ?>
				</div>

				<div class="tagline">
					<i class="fas fa-quote-left"></i>
					<?php echo esc_html(get_field('about_journey_tagline')); ?>
					<i class="fas fa-quote-right"></i>
				</div>

			</div>
		</div>

	</div>
</div>


<!-- About Start -->
<div class="container-fluid about py-5">
	<div class="container py-5">
		<div class="row g-5">

			<!-- Left Column -->
			<div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.2s">
				<div class="h-100">

					<div class="section-header text-start">
						<p><?php echo esc_html(get_field('about_small_title')); ?></p>
						<h2><?php echo esc_html(get_field('about_main_title')); ?></h2>
					</div>

					<!-- Feature Icons -->
					<div class="row g-4 mb-4">

						<div class="col-md-6">
							<div class="about-feature d-flex align-items-center">
								<div class="about-feature-icon mb-lg-0 mb-3">
									<i class="<?php echo esc_html(get_field('about_feature_1_icon')); ?>"></i>
								</div>
								<h4 class="mb-0"><?php echo esc_html(get_field('about_feature_1_title')); ?></h4>
							</div>
						</div>

						<div class="col-md-6">
							<div class="about-feature d-flex align-items-center">
								<div class="about-feature-icon">
									<i class="<?php echo esc_html(get_field('about_feature_2_icon')); ?>"></i>
								</div>
								<h4 class="mb-0"><?php echo esc_html(get_field('about_feature_2_title')); ?></h4>
							</div>
						</div>

					</div>

					<?php echo wp_kses_post(get_field('about_mahalaxmi_construction_description')); ?>

					<div class="text-dark mb-4">
						<?php for ($i = 1; $i <= 6; $i++):
							$point = get_field("about_mahalaxmi_construction_service_point_$i");
							if ($point): ?>
								<p><span>✔</span> <?php echo esc_html($point); ?></p>
						<?php endif;
						endfor; ?>
					</div>

					<?php
					$about_contact_button_link = get_field('about_contact_button_link');
					$about_contact_button_text = get_field('about_contact_button_text');
					?>
					<?php if ($about_contact_button_link && $about_contact_button_text): ?>
						<a class="btn btn-contact py-3 px-4 px-md-5 ms-2" href="<?php echo esc_url($about_contact_button_link); ?>">
							<?php echo esc_html($about_contact_button_text); ?>
						</a>
					<?php endif; ?>

				</div>
			</div>

			<!-- Right Column -->
			<div class="col-lg-5 wow fadeInRight" data-wow-delay="0.2s">

				<div class="position-relative h-100">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/10.jpeg"
						class="img-fluid w-100 h-100"
						style="object-fit: cover;" alt="Mahalaxmi Construction">

					<div class="bg-white">

						<div class="position-absolute pt-3 bg-white"
							style="width: 50%; left: 0; bottom: 0;">

							<div class="about-years-exp p-4">
								<h4 class="mb-0" style="font-size: 4.5rem;">
									<?php echo esc_html(get_field('about_years_experience_number')); ?>
								</h4>
								<p class="text-white fs-5 mb-0" style="font-size: 1.25rem;">
									<?php echo esc_html(get_field('about_years_experience_text')); ?>
								</p>
							</div>

						</div>

						<div class="position-absolute p-3 bg-white pb-0 pe-0"
							style="width: 50%; bottom: 0; right: 0;">

							<img src="<?php bloginfo('template_directory'); ?>/img/gallery/24.jpeg"
								class="img-fluid"
								alt="Construction Work">

						</div>

					</div>
				</div>

			</div>

		</div>
	</div>
</div>
<!-- About End -->


<!-- Mission, Vision & Core Values Start -->
<div class="container-fluid py-lg-5 py-0 wow fadeInUp" data-wow-delay="0.1s">
	<div class="container py-5">

		<div class="section-header text-center">
			<p><?php echo esc_html(get_field('mvc_heading')); ?></p>
			<h2><?php echo esc_html(get_field('mvc_subheading')); ?></h2>
		</div>

		<div class="row g-4 py-3">

			<?php
			$args = array(
				'post_type'      => 'about_mvc_values',
				'posts_per_page' => -1,
				'order'          => 'ASC'
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) :
				$count = 1;
				while ($query->have_posts()) : $query->the_post();

					$heading = get_field('about_mvc_heading');
					$description = get_field('about_mvc_description');

					// Dynamic class based on position
					if ($count == 2) {
						$border_class = 'border-success';
						$text_class   = 'text-success';
					} else {
						$border_class = 'border-primary';
						$text_class   = 'text-primary';
					}
			?>

					<div class="col-lg-4">
						<div class="bg-light h-100 p-4 shadow-sm border-top border-5 <?php echo $border_class; ?> rounded">

							<h4 class="mb-3 <?php echo $text_class; ?>">
								<?php echo esc_html($heading); ?>
							</h4>

							<p class="text-muted mb-0">
								<?php echo wp_kses_post($description); ?>
							</p>

						</div>
					</div>

			<?php
					$count++;
				endwhile;
				wp_reset_postdata();
			endif;
			?>

		</div>

	</div>
</div>
<!-- Mission, Vision & Core Values End -->


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

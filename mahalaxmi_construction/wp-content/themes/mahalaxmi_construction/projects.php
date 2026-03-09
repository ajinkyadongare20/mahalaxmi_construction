<?php

/**
 * The main template file
 * Template Name: Projects
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

<!-- Projects Section Start -->
<div class="container px-3 px-lg-0">
	<div class="py-5">

		<div class="section-header text-center">
			<h2 class="fw-bold" style="margin: 10px;">Our Projects</h2>
		</div>

		<div class="row g-4 g-lg-5 portfolio-container">
			<?php
			$projects_cpt = new WP_Query(array(
				'post_type'      => 'projects_cpt',
				'posts_per_page' => -1,
				'orderby'        => 'date',
				'order'          => 'ASC',
			));

			if ($projects_cpt->have_posts()) :
				while ($projects_cpt->have_posts()) :
					$projects_cpt->the_post();

					$projects_image        = get_field('projects_image');
					$projects_heading_text = get_field('projects_heading_text');
					$projects_icon         = get_field('projects_icon');
					$projects_description  = get_field('projects_heading_description');

					// Normalize image URL
					$projects_image_url = '';
					if (is_array($projects_image) && isset($projects_image['url'])) {
						$projects_image_url = $projects_image['url'];
					} elseif (is_string($projects_image)) {
						$projects_image_url = $projects_image;
					} elseif (is_numeric($projects_image)) {
						$projects_image_url = wp_get_attachment_url($projects_image);
					}
			?>
					<div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
						<div class="position-relative portfolio-box">

							<?php if ($projects_image_url) : ?>
								<img
									class="img-fluid w-100"
									src="<?php echo esc_url($projects_image_url); ?>"
									style="height:700px; object-fit:cover;"
									alt="<?php echo esc_attr($projects_heading_text); ?>">
							<?php endif; ?>

							<a class="portfolio-title shadow-sm" href="#">
								<h5 class="mb-3" style="font-weight:700;">
									<?php echo esc_html($projects_heading_text); ?>
								</h5>

								<span class="text-body d-flex align-items-start">
									<?php if ($projects_icon) : ?>
										<i class="<?php echo esc_attr($projects_icon); ?> text-primary mr-2 mt-1"></i>
									<?php endif; ?>

									<span>
										<?php echo wp_kses_post($projects_description); ?>
									</span>
								</span>
							</a>

						</div>
					</div>
			<?php
				endwhile;
				wp_reset_postdata();
			else :
				echo '<p>No Projects found.</p>';
			endif;
			?>
		</div>

	</div>
</div>
<!-- Projects Section End -->

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
								Terrace waterproofing protects your roof from water leakage,
								seepage and structural damage. It increases the life of your
								building and prevents cracks, dampness and ceiling leakage.
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
								We use high-quality waterproofing materials like Dr. Fixit,
								SmartCare coatings and other branded chemicals depending on
								site condition and customer requirement.
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
								Yes, we provide complete bathroom waterproofing and
								internal/external water tank waterproofing solutions to prevent
								leakage and dampness problems.
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
								Yes, we construct brick compound walls, RCC compound walls and
								strong retaining walls with proper foundation and quality materials.
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
								We provide internal plaster, external plaster, slab plaster,
								ceiling plaster and terrace plaster with smooth and durable finishing.
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
								Yes, we specialize in basement waterproofing and basement retaining
								wall treatment to protect underground areas from water damage.
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
								Yes, we provide complete swimming pool waterproofing solutions to
								prevent leakage and ensure long-term durability.
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
								Yes, we provide complete home renovation including plaster work,
								waterproofing, structural repairs and remodeling services.
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
								Yes, we provide safe and professional demolition services for
								houses, old structures and renovation projects.
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
								You can contact us for a site visit and quotation. We provide
								reliable civil work and waterproofing services with quality assurance.
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

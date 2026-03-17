<?php

/**
 * The main template file
 * Template Name: Home
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

<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<?php
		$indicator_query = new WP_Query(array(
			'post_type'      => 'home_carousel_slider',
			'posts_per_page' => -1,
			'orderby'        => 'title',
			'order'          => 'ASC'
		));
		$indicator_count = 0;
		if ($indicator_query->have_posts()) :
			while ($indicator_query->have_posts()) : $indicator_query->the_post();
				$active_class = ($indicator_count == 0) ? 'active' : '';
		?>
				<li data-target="#carousel" data-slide-to="<?php echo $indicator_count; ?>" class="<?php echo $active_class; ?>"></li>
			<?php
				$indicator_count++;
			endwhile;
			wp_reset_postdata();
		else :
			// Fallback indicators
			?>
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
		<?php endif; ?>
	</ol>

	<div class="carousel-inner">

		<?php
		$home_carousel_slider = new WP_Query(array(
			'post_type'      => 'home_carousel_slider',
			'posts_per_page' => -1,
			'orderby'        => 'title',
			'order'          => 'ASC'
		));

		$i = 0; // counter to set 'active' only for the first slide
		if ($home_carousel_slider->have_posts()) :
			while ($home_carousel_slider->have_posts()) : $home_carousel_slider->the_post();
				$home_carousel_slider_image = get_field('home_carousel_slider_image');
				$button_link         = get_field('home_carousel_slider_page_link');
				$button_text         = get_field('home_carousel_slider_page_link_text');
				$active_class = ($i === 0) ? 'active' : '';
		?>

				<div class="carousel-item <?php echo $active_class; ?>">
					<?php if (!empty($home_carousel_slider_image)): ?>
						<img src="<?php echo esc_url($home_carousel_slider_image['url']); ?>" alt="">
					<?php endif; ?>
					<div class="carousel-caption">
						<p class="animated fadeInRight"><?php echo esc_html(get_field('home_carousel_slider_heading')); ?></p>
						<h1 class="animated fadeInLeft"><?php echo esc_html(get_field('home_carousel_slider_heading_line')); ?></h1>

						<?php if ($button_link && $button_text): ?>
							<a class="btn animated fadeInUp" href="<?php echo esc_url($button_link['url']); ?>">
								<?php echo esc_html($button_text); ?>
							</a>
						<?php endif; ?>
					</div>
				</div>

			<?php
				$i++;
			endwhile;
			wp_reset_postdata();
			?>
		<?php endif; ?>

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


<!-- Feature Start-->
<div class="feature wow fadeInUp" data-wow-delay="0.1s">
	<div class="container-fluid">
		<div class="row align-items-center">

			<?php
			$args = array(
				'post_type' => 'home_features',
				'posts_per_page' => 3,
				'orderby'        => 'title',
				'order'          => 'ASC'
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();

					$icon = get_field('home_features_icons');
					$title = get_field('home_features_heading');
					$desc = get_field('home_features_description');
			?>

					<div class="col-lg-4 col-md-12">
						<div class="feature-item">
							<div class="feature-icon">
								<i class="<?php echo esc_attr($icon); ?>"></i>
							</div>
							<div class="feature-text">
								<h3><?php echo esc_html($title); ?></h3>
								<p class="text-white">
									<?php echo wp_kses_post($desc); ?>
								</p>
							</div>
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
<!-- Feature End-->


<!-- Home About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
	<div class="container py-lg-5 py-0">
		<div class="row align-items-center">
			<div class="col-lg-7 col-md-6">
				<div class="section-header text-left">
					<p class="text-uppercase">
						<?php echo esc_html(get_field('home_about_heading_tittle')); ?>
					</p>
					<h2>
						<?php echo esc_html(get_field('home_about_subheading_tittle')); ?>
					</h2>
				</div>

				<div class="about-text">
					<?php echo wp_kses_post(get_field('home_about_description')); ?>

					<?php
					$home_about_services_link       = get_field('home_about_services_link');
					$home_about_services_link_text  = get_field('home_about_services_link_text');
					?>
					<?php if ($home_about_services_link && $home_about_services_link_text) : ?>
						<a class="btn" href="<?php echo esc_url($home_about_services_link); ?>">
							<?php echo esc_html($home_about_services_link_text); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-lg-5 col-md-6">
				<div class="about-img">
					<img src="<?php bloginfo('template_directory'); ?>/img/gallery/25.jpeg" alt="Mahalaxmi Construction">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Home About End -->


<!-- Why Choose Us -->
<div class="container-fluid bg-dark custom-counter feature pt-5">
	<div class="container pt-0 pt-lg-5">
		<div class="row g-5">

			<!-- Left Side Content -->
			<div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.2s">

				<h2 class="text-white mb-4">
					<?php echo esc_html(get_field('home_why_choose_text_name')); ?>
				</h2>

				<p class="text-light mb-4">
					<?php echo wp_kses_post(get_field('home_why_choose_text_description')); ?>
				</p>

				<!-- Static List (ACF Fields) -->
				<?php for ($i = 1; $i <= 4; $i++) : ?>
					<div class="d-flex align-items-center text-white mb-3">
						<div class="btn-sm-square bg-white text-primary rounded-circle mr-3">
							<i class="fa fa-check"></i>
						</div>
						<span>
							<?php echo esc_html(get_field("why_choose_services_list{$i}")); ?>
						</span>
					</div>
				<?php endfor; ?>

				<!-- Counters -->
				<div class="row g-4 pt-3">
					<div class="col-sm-6 p-0">
						<div class="d-flex rounded p-3 m-3" style="background: rgba(256, 256, 256, 0.1);">
							<i class="fa fa-users fa-3x text-white"></i>
							<div class="ml-3">
								<h2 class="text-counter-up mb-0" data-toggle="counter-up">100</h2>
								<p class="text-white mb-0">Happy Clients</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 p-0">
						<div class="d-flex rounded p-3 m-3" style="background: rgba(256, 256, 256, 0.1);">
							<i class="fa fa-check fa-3x text-white"></i>
							<div class="ml-3">
								<h2 class="text-counter-up mb-0" data-toggle="counter-up">250</h2>
								<p class="text-white mb-0">Projects</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 p-0">
						<div class="d-flex rounded p-3 m-3" style="background: rgba(256, 256, 256, 0.1);">
							<i class="fa fa-user-tie fa-3x text-white"></i>
							<div class="ml-3">
								<h2 class="text-counter-up mb-0" data-toggle="counter-up">15</h2>
								<p class="text-white mb-0">Skilled Workers</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 p-0">
						<div class="d-flex rounded p-3 m-3" style="background: rgba(256, 256, 256, 0.1);">
							<i class="fa fa-map-marker-alt fa-3x text-white"></i>
							<div class="ml-3">
								<h2 class="text-counter-up mb-0">Pune</h2>
								<p class="text-white mb-0">Service Area</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Right Side Feature Cards -->
			<div class="col-lg-6 pb-5">

				<?php
				$why_choose_feature = new WP_Query(array(
					'post_type' => 'why_choose_feature',
					'posts_per_page' => -1,
					'orderby'        => 'title',
					'order'          => 'ASC'
				));

				$delay = 0.3;

				if ($why_choose_feature->have_posts()) :
					while ($why_choose_feature->have_posts()) : $why_choose_feature->the_post();
				?>
						<div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4 wow fadeIn"
							data-wow-delay="<?php echo esc_attr($delay); ?>s"
							style="background-color: rgba(256, 256, 256, 0.1);">

							<div class="d-flex align-items-center">
								<div class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
									<i class="<?php echo esc_attr(get_field('why_choose_feature_icon')); ?> fa-2x text-white"></i>
								</div>
								<div class="px-3">
									<h4 class="text-white mb-3">
										<?php echo esc_html(get_field('why_choose_feature_text')); ?>
									</h4>
								</div>
							</div>

							<p class="text-white mb-4">
								<?php echo wp_kses_post(get_field('why_choose_feature_text_description')); ?>
							</p>

						</div>

				<?php
						$delay += 0.1; // animation increment
					endwhile;
					wp_reset_postdata();
				endif;
				?>

			</div>

		</div>
	</div>
</div>
<!-- End Why Choose Us -->


<!-- Main Service Start -->
<div class="service">
	<div class="container">
		<div class="section-header text-center">
			<p><?php echo esc_html(get_field('home_main_services_heading')); ?></p>
			<h2><?php echo esc_html(get_field('home_main_services_subheading')); ?></h2>
		</div>

		<div class="row">

			<?php
			$args = array(
				'post_type'      => 'home_main_services',
				'posts_per_page' => -1,
				'post_status'    => 'publish',
				'orderby'        => 'title',
				'order'          => 'ASC'
			);

			$services_query = new WP_Query($args);

			if ($services_query->have_posts()) :
				$delay = 0.1;

				while ($services_query->have_posts()) : $services_query->the_post();

					// Get ACF Fields
					$image       = get_field('home_main_services_image');
					$heading     = get_field('home_main_services_heading');
					$description = get_field('home_main_services_description');

					// Image URL (since return format = array)
					$image_url = !empty($image['url']) ? $image['url'] : '';
			?>

					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
						<div class="service-item">

							<div class="service-img">
								<?php if ($image_url): ?>
									<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($heading); ?>">
								<?php endif; ?>

								<div class="service-overlay">
									<p>
										<?php echo wp_trim_words(wp_strip_all_tags($description), 25); ?>
									</p>
								</div>
							</div>

							<div class="service-text">
								<h3><?php echo esc_html($heading); ?></h3>
								<a class="btn">+</a>
							</div>

						</div>
					</div>

			<?php
					$delay += 0.2; // animation delay increment
				endwhile;

				wp_reset_postdata();
			else :
				echo '<p>No services found</p>';
			endif;
			?>

		</div>
	</div>
</div>
<!-- Main Service End -->


<!-- Video Start -->
<div class="video wow fadeIn" data-wow-delay="0.1s">
	<div class="container">
		<button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
			<span></span>
		</button>
	</div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<!-- 16:9 aspect ratio -->
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Video End -->


<!-- Team Start -->
<div class="team">
	<div class="container">
		<div class="section-header text-center">
			<p><?php echo esc_html(get_field('home_team_heading')); ?></p>
			<h2><?php echo esc_html(get_field('home_team_subheading')); ?></h2>
		</div>
		<div class="row">

			<?php
			$args = array(
				'post_type'      => 'team_cpt',
				'posts_per_page' => -1,
				'post_status'    => 'publish',
				'orderby'        => 'title',
				'order'          => 'ASC'
			);

			$team_query = new WP_Query($args);

			if ($team_query->have_posts()) :
				$delay = 0.1;

				while ($team_query->have_posts()) : $team_query->the_post();

					// ACF Fields
					$image = get_field('team_member_image');
					$name  = get_field('team_member_name');
					$role  = get_field('team_member_role');

					// Image URL (array format)
					$image_url = !empty($image['url']) ? $image['url'] : '';
			?>

					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
						<div class="team-item">

							<div class="team-img">
								<?php if ($image_url): ?>
									<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($name); ?>">
								<?php endif; ?>
							</div>

							<div class="team-text">
								<h2><?php echo esc_html($name); ?></h2>
								<p><?php echo wp_kses_post($role); ?></p>
							</div>

							<div class="team-social">
								<a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
								<a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
								<a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
							</div>

						</div>
					</div>

			<?php
					$delay += 0.2;
				endwhile;

				wp_reset_postdata();
			else :
				echo '<p>No team members found</p>';
			endif;
			?>

		</div>
	</div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="testimonial wow fadeIn" data-wow-delay="0.1s">
	<div class="container">

		<?php
		$args = array(
			'post_type'      => 'testimonials_cpt',
			'posts_per_page' => -1,
			'post_status'    => 'publish',
			'orderby'        => 'title',
			'order'          => 'ASC'
		);

		$testimonial_query = new WP_Query($args);
		?>

		<!-- NAV IMAGES -->
		<div class="row">
			<div class="col-12">
				<div class="testimonial-slider-nav">

					<?php if ($testimonial_query->have_posts()) : ?>
						<?php while ($testimonial_query->have_posts()) : $testimonial_query->the_post();

							$image = get_field('testimonials_cpt_image');
							$image_url = !empty($image['url']) ? $image['url'] : '';
						?>

							<div class="slider-nav">
								<?php if ($image_url): ?>
									<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(get_field('testimonials_name')); ?>">
								<?php endif; ?>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>

		<?php wp_reset_postdata(); ?>

		<!-- SLIDER CONTENT -->
		<div class="row">
			<div class="col-12">
				<div class="testimonial-slider">

					<?php
					$testimonial_query = new WP_Query($args);

					if ($testimonial_query->have_posts()) :
						while ($testimonial_query->have_posts()) : $testimonial_query->the_post();

							$name = get_field('testimonials_name');
							$role = get_field('testimonials_role');
							$desc = get_field('testimonials_description');
					?>

							<div class="slider-item">
								<h3><?php echo esc_html($name); ?></h3>
								<h4><?php echo esc_html($role); ?></h4>
								<p><?php echo wp_kses_post($desc); ?></p>
							</div>

					<?php
						endwhile;
						wp_reset_postdata();
					else :
						echo '<p>No testimonials found</p>';
					endif;
					?>

				</div>
			</div>
		</div>

	</div>
</div>
<!-- Testimonial End -->


<!-- FAQs Start -->
<div class="faqs">
	<div class="container">

		<div class="section-header text-center">
			<p class="text-uppercase"><?php echo esc_html(get_field('faqs_heading')); ?></p>
			<h2><?php echo esc_html(get_field('faqs_subheading')); ?></h2>
		</div>

		<?php
		$args = array(
			'post_type'      => 'faqs_cpt',
			'posts_per_page' => -1,
			'post_status'    => 'publish',
			'orderby'        => 'title',
			'order'          => 'ASC'
		);

		$faq_query = new WP_Query($args);

		$faqs = [];

		if ($faq_query->have_posts()) :
			while ($faq_query->have_posts()) : $faq_query->the_post();

				$faqs[] = [
					'question' => get_field('faq_question'),
					'answer'   => get_field('faq_answer')
				];

			endwhile;
			wp_reset_postdata();
		endif;

		$total = count($faqs);
		$half  = ceil($total / 2);
		?>

		<div class="row">

			<!-- LEFT COLUMN -->
			<div class="col-md-6">
				<div id="accordion-1">

					<?php for ($i = 0; $i < $half; $i++): ?>
						<div class="card wow fadeInLeft" data-wow-delay="<?php echo ($i + 1) * 0.1; ?>s">

							<div class="card-header">
								<a class="card-link collapsed" data-toggle="collapse" href="#faq-<?php echo $i; ?>">
									<?php echo esc_html($faqs[$i]['question']); ?>
								</a>
							</div>

							<div id="faq-<?php echo $i; ?>" class="collapse" data-parent="#accordion-1">
								<div class="card-body">
									<?php echo wp_kses_post($faqs[$i]['answer']); ?>
								</div>
							</div>

						</div>
					<?php endfor; ?>

				</div>
			</div>

			<!-- RIGHT COLUMN -->
			<div class="col-md-6">
				<div id="accordion-2">

					<?php for ($i = $half; $i < $total; $i++): ?>
						<div class="card wow fadeInRight" data-wow-delay="<?php echo ($i + 1) * 0.1; ?>s">

							<div class="card-header">
								<a class="card-link collapsed" data-toggle="collapse" href="#faq-<?php echo $i; ?>">
									<?php echo esc_html($faqs[$i]['question']); ?>
								</a>
							</div>

							<div id="faq-<?php echo $i; ?>" class="collapse" data-parent="#accordion-2">
								<div class="card-body">
									<?php echo wp_kses_post($faqs[$i]['answer']); ?>
								</div>
							</div>

						</div>
					<?php endfor; ?>

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

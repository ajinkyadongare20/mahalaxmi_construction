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
			$args = array(
				'post_type' => 'services_speciality',
				'posts_per_page' => -1,
				'orderby'        => 'date',
				'order'          => 'ASC'
			);

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
		$cta_link = get_field('services_cta_button_link');
		if ($cta_link && ! empty($cta_link['url'])) :
		?>
			<a href="<?php echo esc_url($cta_link['url']); ?>" class="btn btn-light text-primary fw-bold px-4 py-2">
				<?php echo esc_html(get_field('services_cta_button_text')); ?>
			</a>
		<?php endif; ?>
	</div>
</div>


<!-- Content Section -->
<div class="container py-5">
	<div class="row align-items-center">
		<div class="col-md-6 mb-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/gallery/18.jpeg"
				class="img-fluid rounded shadow" style="width: 100%; object-fit: scale-down;"
				alt="Mahalaxmi Construction Work">
		</div>

		<div class="col-md-6">
			<div class="section-header text-start">
				<p class="text-uppercase">Why Choose US</p>
				<h2>Why Choose Mahalaxmi Construction</h2>
			</div>

			<p class="mb-4">
				Mahalaxmi Construction provides reliable waterproofing, plastering, and construction services for residential and commercial properties.
				With years of practical experience, we ensure durable solutions that protect buildings from water damage and structural issues.
			</p>

			<div class="text-dark mb-4">

				<p class="fs-5">
					<span class="fa fa-check me-2"></span>
					Terrace, Bathroom, Water Tank & RCC Wall Waterproofing
				</p>

				<p class="fs-5">
					<span class="fa fa-check me-2"></span>
					Internal, External, Sanla, Taar & Daba Plaster
				</p>

				<p class="fs-5">
					<span class="fa fa-check me-2"></span>
					Compound Wall, Bhandhkam & Retaining Wall Construction
				</p>

				<p class="fs-5">
					<span class="fa fa-check me-2"></span>
					PCC Concrete, Dr Fixit & Smart Care Chemical Coating
				</p>

				<p class="fs-5">
					<span class="fa fa-check me-2"></span>
					Swimming Pool, Basement & Balcony Waterproofing
				</p>

				<p class="fs-5">
					<span class="fa fa-check me-2"></span>
					Home Renovation & Demolition (Todphod) Services
				</p>

			</div>
		</div>
	</div>
</div>


<!-- New Contain Start  -->
<div class="container py-lg-5 py-0 wow fadeInUp" data-wow-delay="0.1s">
	<div class="row">
		<div class="col-lg-12">

			<div class="section-header text-start">
				<h2 class="fw-bold" style="margin: 10px;">Mahalaxmi Construction Waterproofing & Construction Capabilities</h2>
			</div>

			<p class="mt-31s">
				Mahalaxmi Construction specializes in providing reliable waterproofing and construction
				solutions for residential and commercial properties. With years of practical experience,
				we handle a wide range of services including terrace waterproofing, bathroom waterproofing,
				plaster work, compound wall construction, and home renovation projects. Our team focuses
				on quality workmanship and long-lasting protection against water leakage and structural damage.
			</p>

			<p>
				<b>
					We use proven construction methods and trusted chemical coatings to ensure durability,
					strength, and long-term protection. Our service capabilities include:
				</b>
			</p>

			<ul class="list-unstyled capabilities-list">

				<li>
					<span class="custom-bullet">➤</span> Terrace, Balcony & RCC Wall Waterproofing
				</li>

				<li>
					<span class="custom-bullet">➤</span> Bathroom & Water Tank Waterproofing
				</li>

				<li>
					<span class="custom-bullet">➤</span> Internal, External, Sanla, Taar & Daba Plaster Work
				</li>

				<li>
					<span class="custom-bullet">➤</span> Compound Wall & Retaining Wall Construction
				</li>

				<li>
					<span class="custom-bullet">➤</span> PCC Concrete, Dr Fixit, Smart Care & Chemical Coating
				</li>

				<li>
					<span class="custom-bullet">➤</span> Basement Waterproofing & Swimming Pool Waterproofing
				</li>

				<li>
					<span class="custom-bullet">➤</span> Home Renovation, Demolition (Todphod) & Repair Work
				</li>

			</ul>

			<p>
				Our experienced team is committed to delivering strong, durable, and cost-effective
				construction solutions. We focus on proper inspection, high-quality materials,
				and professional execution to ensure every project meets the highest standards
				of safety, reliability, and customer satisfaction.
			</p>

		</div>
	</div>
</div>
<!--  New Contain Ending-->


<!-- Why Choose Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="row g-5">
			<!-- Left Content -->
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
				<div class="section-header text-start">
					<h2>Why Clients Choose Mahalaxmi Construction</h2>
				</div>
				<p class="mb-5">
					Mahalaxmi Construction Pvt Ltd is not just a service provider—we are your strategic construction partner.
					Leveraging expertise in UI/UX design, cloud, AI/ML, IoT, and enterprise software, we deliver solutions
					that are innovative, secure, scalable, and tailored to accelerate business growth across industries.
				</p>

				<!-- Reason 1 -->
				<div class="d-flex mb-5">
					<div class="flex-shrink-0 btn-square rounded-circle d-flex align-items-center justify-content-center"
						style="width: 90px; height: 90px; background-color: #002a5b;">
						<i class="fa fa-lightbulb fa-2x text-white"></i>
					</div>
					<div class="ml-4">
						<h5 class="mb-3">Innovation & Design</h5>
						<span>
							Creating intuitive and engaging digital experiences with UI/UX design, web, and mobile applications.
						</span>
					</div>
				</div>

				<!-- Reason 2 -->
				<div class="d-flex mb-5">
					<div class="flex-shrink-0 btn-square rounded-circle d-flex align-items-center justify-content-center"
						style="width: 90px; height: 90px; background-color: #002a5b;">
						<i class="fa fa-shield-alt fa-2x text-white"></i>
					</div>
					<div class="ml-4">
						<h5 class="mb-3">Security & Reliability</h5>
						<span>
							Enterprise-grade security practices ensuring reliable and safe digital operations for clients.
						</span>
					</div>
				</div>

				<!-- Reason 3 -->
				<div class="d-flex mb-0">
					<div class="flex-shrink-0 btn-square rounded-circle d-flex align-items-center justify-content-center"
						style="width: 90px; height: 90px; background-color: #002a5b;">
						<i class="fa fa-cogs fa-2x text-white"></i>
					</div>
					<div class="ml-4">
						<h5 class="mb-3">Comprehensive Solutions</h5>
						<span>
							End-to-end technology services, from cloud and AI to IoT and enterprise solutions, driving efficiency and growth.
						</span>
					</div>
				</div>
			</div>

			<!-- Right Image -->
			<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
				<div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
					<img class="position-absolute w-100 h-100"
						src="<?php bloginfo('template_directory'); ?>/img/gallery/25.jpeg" alt="Why Choose Leal Software Solution"
						style="object-fit: cover;">
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

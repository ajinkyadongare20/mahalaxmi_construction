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

<!-- Updated HTML for About Page -->
<div class="container-fluid about-page py-5">
	<div class="row">
		<div class="section-header text-center">
			<p>About Us</p>
			<h2 class="px-3">About Mahalaxmi Construction</h2>
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
					<h3>Company Overview</h3>
				</div>

				<p>Mahalaxmi Construction is a trusted name in the construction and waterproofing industry, offering comprehensive solutions for residential and commercial projects. With years of hands‑on experience, we specialize in delivering high‑quality workmanship across a wide range of services.</p>
				<p class="about-subheading">Our core expertise includes:</p>
				<ul class="service-list">
					<li><i class="fas fa-check-circle"></i> Plastering (Internal, External, Sanla, Taar, Daba)</li>
					<li><i class="fas fa-check-circle"></i> Bhandhkam & Compound Walls (Dabar, Vita Bandhkam, RCC, Retaining Wall)</li>
					<li><i class="fas fa-check-circle"></i> Home Renovation & Todphod (Demolition)</li>
					<li><i class="fas fa-check-circle"></i> Waterproofing (Tarace, Bathroom, Water Tank, RCC Wall, Swimming Pool, Basement)</li>
					<li><i class="fas fa-check-circle"></i> PCC Concrete & Chemical Coatings (Dr Fixit, Smart Care, Regzing, Scriding)</li>

				</ul>
				<div class="tagline">
					<i class="fas fa-quote-left"></i> Quality Construction, Lasting Solutions <i class="fas fa-quote-right"></i>
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
					<h3>Our Journey</h3>
				</div>

				<p>Mahalaxmi Construction was founded with a clear mission: to deliver excellence in every project we undertake. What began as a small team dedicated to waterproofing has grown into a full‑service construction firm trusted by numerous clients across the region.</p>
				<p>Over the years we have successfully completed projects of all sizes – from precise waterproofing applications to complete home renovations. Our growth is built on a foundation of integrity, transparency, and an unwavering commitment to quality.</p>
				<div class="founder-note">
					<strong>Founder’s Vision:</strong> “To build a company that stands for craftsmanship, reliability, and complete customer satisfaction.”
				</div>
				<div class="tagline">
					<i class="fas fa-quote-left"></i> Quality Construction, Lasting Solutions <i class="fas fa-quote-right"></i>
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
						<p>About Mahalaxmi Construction</p>
						<h2>Expert Waterproofing & Construction Services</h2>
					</div>

					<!-- Feature Icons -->
					<div class="row g-4 mb-4">

						<div class="col-md-6">
							<div class="about-feature d-flex align-items-center">
								<div class="about-feature-icon mb-lg-0 mb-3">
									<i class="flaticon-building"></i>
								</div>
								<h4 class="mb-0">Waterproofing Solutions</h4>
							</div>
						</div>

						<div class="col-md-6">
							<div class="about-feature d-flex align-items-center">
								<div class="about-feature-icon">
									<i class="flaticon-building"></i>
								</div>
								<h4 class="mb-0">Construction & Plaster Work</h4>
							</div>
						</div>

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
							Internal, External, Chanla, Taar & Daba Plaster
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

					<a class="btn btn-contact py-3 px-4 px-md-5 ms-2" href="<?php echo site_url('/contact'); ?>">
						Contact Mahalaxmi Construction
					</a>

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
								<h4 class="mb-0" style="font-size: 4.5rem;">10+</h4>
								<p class="text-white fs-5 mb-0" style="font-size: 1.25rem;">Years Experience</p>
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
			<p>Who We Are</p>
			<h2>Our Mission, Vision & Core Values</h2>
		</div>

		<div class="row g-4 py-3">

			<!-- Mission -->
			<div class="col-lg-4">
				<div class="bg-light h-100 p-4 shadow-sm border-top border-5 border-primary rounded">

					<h4 class="mb-3 text-primary">Our Mission</h4>

					<p class="text-muted mb-0">
						At Mahalaxmi Construction, our mission is to provide reliable and long-lasting construction
						and waterproofing solutions that protect buildings from damage and ensure structural durability.
						We focus on quality workmanship, proper materials, and professional execution for every project.
						Whether it is terrace waterproofing, bathroom sealing, compound wall construction, plaster work,
						or home renovation, we strive to deliver dependable results that bring value and satisfaction
						to every client.
					</p>

				</div>
			</div>

			<!-- Vision -->
			<div class="col-lg-4">
				<div class="bg-light h-100 p-4 shadow-sm border-top border-5 border-success rounded">

					<h4 class="mb-3 text-success">Our Vision</h4>

					<p class="text-muted mb-0">
						Our vision is to become a trusted name in construction and waterproofing services,
						recognized for quality work, honest service, and reliable solutions.
						We aim to expand our expertise across residential and commercial projects while maintaining
						high standards in waterproofing systems, plaster work, concrete construction, and renovation.
						By continuously improving our techniques and using trusted chemical coatings like Dr Fixit
						and Smart Care, we aim to create safer, stronger, and longer-lasting structures for our clients.
					</p>

				</div>
			</div>

			<!-- Core Values -->
			<div class="col-lg-4">
				<div class="bg-light h-100 p-4 shadow-sm border-top border-5 border-primary rounded">

					<h4 class="mb-3 text-primary">Core Values</h4>

					<p class="text-muted mb-0">
						Our Values is to become a trusted name in construction and waterproofing services,
						recognized for quality work, honest service, and reliable solutions.
						We aim to expand our expertise across residential and commercial projects while maintaining
						high standards in waterproofing systems, plaster work, concrete construction, and renovation.
						By continuously improving our techniques and using trusted chemical coatings like Dr Fixit
						and Smart Care, we aim to create safer, stronger, and longer-lasting structures for our clients.
					</p>

				</div>
			</div>

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

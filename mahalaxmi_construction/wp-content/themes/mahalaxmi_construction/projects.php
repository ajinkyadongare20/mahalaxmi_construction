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

			<!-- Project 1 -->
			<div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
				<div class="position-relative portfolio-box">
					<img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/gallery/21.jpeg" style="height: 700px; object-fit: cover;">
					<a class="portfolio-title shadow-sm" href="#">
						<h5 class="mb-3" style="font-weight: 700;">Terrace Waterproofing</h5>
						<span class="text-body"><i class="fa fa-water text-primary me-2"></i>
							Complete terrace waterproofing project ensuring long-lasting protection against rainwater leakage.
						</span>
					</a>
				</div>
			</div>

			<!-- Project 2 -->
			<div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
				<div class="position-relative portfolio-box">
					<img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/gallery/22.jpeg" style="height: 700px; object-fit: cover;">
					<a class="portfolio-title shadow-sm" href="#">
						<h5 class="mb-3" style="font-weight: 700;">Bathroom Waterproofing</h5>
						<span class="text-body"><i class="fa fa-shower text-primary me-2"></i>
							Professional waterproofing work preventing water seepage in bathroom walls and floors.
						</span>
					</a>
				</div>
			</div>

			<!-- Project 3 -->
			<div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
				<div class="position-relative portfolio-box">
					<img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/gallery/23.jpeg" style="height: 700px; object-fit: cover;">
					<a class="portfolio-title shadow-sm" href="#">
						<h5 class="mb-3" style="font-weight: 700;">Water Tank Waterproofing</h5>
						<span class="text-body"><i class="fa fa-tint text-primary me-2"></i>
							Specialized waterproofing solutions for residential and commercial water tanks.
						</span>
					</a>
				</div>
			</div>

			<!-- Project 4 -->
			<div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
				<div class="position-relative portfolio-box">
					<img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/gallery/24.jpeg" style="height: 700px; object-fit: cover;">
					<a class="portfolio-title shadow-sm" href="#">
						<h5 class="mb-3" style="font-weight: 700;">RCC Wall Waterproofing</h5>
						<span class="text-body"><i class="fa fa-building text-primary me-2"></i>
							Advanced waterproofing work protecting RCC structures from moisture damage.
						</span>
					</a>
				</div>
			</div>

			<!-- Project 5 -->
			<div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
				<div class="position-relative portfolio-box">
					<img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/gallery/25.jpeg" style="height: 700px; object-fit: cover;">
					<a class="portfolio-title shadow-sm" href="#">
						<h5 class="mb-3" style="font-weight: 700;">Internal Plaster Work</h5>
						<span class="text-body"><i class="fa fa-tools text-primary me-2"></i>
							Quality internal plastering ensuring smooth wall finishing for residential homes.
						</span>
					</a>
				</div>
			</div>

			<!-- Project 6 -->
			<div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
				<div class="position-relative portfolio-box">
					<img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/gallery/26.jpeg" style="height: 700px; object-fit: cover;">
					<a class="portfolio-title shadow-sm" href="#">
						<h5 class="mb-3" style="font-weight: 700;">External Plaster Work</h5>
						<span class="text-body"><i class="fa fa-home text-primary me-2"></i>
							Durable external plastering improving building strength and weather resistance.
						</span>
					</a>
				</div>
			</div>

			<!-- Project 7 -->
			<div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
				<div class="position-relative portfolio-box">
					<img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/gallery/27.jpeg" style="height: 700px; object-fit: cover;">
					<a class="portfolio-title shadow-sm" href="#">
						<h5 class="mb-3" style="font-weight: 700;">Compound Wall Construction</h5>
						<span class="text-body"><i class="fa fa-border-all text-primary me-2"></i>
							Strong compound wall construction providing safety and property boundaries.
						</span>
					</a>
				</div>
			</div>

			<!-- Project 8 -->
			<div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
				<div class="position-relative portfolio-box">
					<img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/gallery/28.jpeg" style="height: 700px; object-fit: cover;">
					<a class="portfolio-title shadow-sm" href="#">
						<h5 class="mb-3" style="font-weight: 700;">Basement Waterproofing</h5>
						<span class="text-body"><i class="fa fa-layer-group text-primary me-2"></i>
							Basement protection systems preventing underground water leakage.
						</span>
					</a>
				</div>
			</div>

			<!-- Project 9 -->
			<div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
				<div class="position-relative portfolio-box">
					<img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/gallery/29.jpeg" style="height: 700px; object-fit: cover;">
					<a class="portfolio-title shadow-sm" href="#">
						<h5 class="mb-3" style="font-weight: 700;">Swimming Pool Waterproofing</h5>
						<span class="text-body"><i class="fa fa-swimmer text-primary me-2"></i>
							Professional waterproofing ensuring leak-free swimming pool structures.
						</span>
					</a>
				</div>
			</div>

			<!-- Project 10 -->
			<div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
				<div class="position-relative portfolio-box">
					<img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/gallery/30.jpeg" style="height: 700px; object-fit: cover;">
					<a class="portfolio-title shadow-sm" href="#">
						<h5 class="mb-3" style="font-weight: 700;">Balcony Waterproofing</h5>
						<span class="text-body"><i class="fa fa-water text-primary me-2"></i>
							Balcony brick bed and waterproofing work preventing leakage into lower floors.
						</span>
					</a>
				</div>
			</div>

			<!-- Project 11 -->
			<div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
				<div class="position-relative portfolio-box">
					<img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/gallery/27.jpeg" style="height: 700px; object-fit: cover;">
					<a class="portfolio-title shadow-sm" href="#">
						<h5 class="mb-3" style="font-weight: 700;">Home Renovation</h5>
						<span class="text-body"><i class="fa fa-hammer text-primary me-2"></i>
							Complete home renovation projects improving structure and appearance.
						</span>
					</a>
				</div>
			</div>

			<!-- Project 12 -->
			<div class="col-xl-6 col-lg-6 col-md-6 portfolio-item business">
				<div class="position-relative portfolio-box">
					<img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/gallery/28.jpeg" style="height: 700px; object-fit: cover;">
					<a class="portfolio-title shadow-sm" href="#">
						<h5 class="mb-3" style="font-weight: 700;">Demolition & Structural Repairs</h5>
						<span class="text-body"><i class="fa fa-hard-hat text-primary me-2"></i>
							Demolition and structural repair work for renovation and rebuilding projects.
						</span>
					</a>
				</div>
			</div>

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

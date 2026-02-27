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


<!-- Feature Start-->
<div class="feature wow fadeInUp" data-wow-delay="0.1s">
	<div class="container-fluid">
		<div class="row align-items-center">

			<!-- Feature 1 -->
			<div class="col-lg-4 col-md-12">
				<div class="feature-item">
					<div class="feature-icon">
						<i class="flaticon-worker"></i>
					</div>
					<div class="feature-text">
						<h3>Skilled & Experienced Team</h3>
						<p class="text-white">Our trained professionals deliver reliable construction and waterproofing solutions with precision, safety, and long-lasting results.</p>
					</div>
				</div>
			</div>

			<!-- Feature 2 -->
			<div class="col-lg-4 col-md-12">
				<div class="feature-item">
					<div class="feature-icon">
						<i class="flaticon-building"></i>
					</div>
					<div class="feature-text">
						<h3>Waterproofing Advanced Solutions</h3>
						<p>We use high-quality materials and modern techniques for terrace, basement, bathroom, and water tank waterproofing ensure complete protection.</p>
					</div>
				</div>
			</div>

			<!-- Feature 3 -->
			<div class="col-lg-4 col-md-12">
				<div class="feature-item">
					<div class="feature-icon">
						<i class="flaticon-call"></i>
					</div>
					<div class="feature-text">
						<h3>Free Site Inspection & Support</h3>
						<p class="text-white">We provide free site visits, proper leakage diagnosis, and customer support to ensure the best solution for your property.</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Feature End-->


<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
	<div class="container">
		<div class="row align-items-center">

			<div class="col-lg-5 col-md-6">
				<div class="about-img">
					<img src="<?php bloginfo('template_directory'); ?>/img/about.jpg" alt="Mahalaxmi Construction">
				</div>
			</div>

			<div class="col-lg-7 col-md-6">
				<div class="section-header text-left">
					<p class="text-uppercase">Welcome to Mahalaxmi Construction</p>
					<h2>Your Trusted Construction & Waterproofing Partner</h2>
				</div>

				<div class="about-text">
					<p>Mahalaxmi Construction is a reliable name in building construction, waterproofing, plastering, and renovation services. We specialize in providing long-lasting solutions for terrace leakage, basement waterproofing, bathroom seepage, water tank protection, and RCC wall treatment.</p>

					<p>With a skilled team and modern techniques, we ensure high-quality workmanship, durable materials, and complete customer satisfaction. From small home repairs to full-scale construction projects, we deliver strong foundations and long-term protection for your property.</p>

					<p>We also provide compound wall construction, retaining wall solutions, PCC concrete works, brick bed coba waterproofing, and complete home renovation services. Our approach focuses on detailed site inspection.</p>

					<a class="btn" href="#services">Explore Our Services</a>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- About End -->


<!-- Why Choose Us -->
<div class="container-fluid bg-dark custom-counter feature pt-5">
	<div class="container pt-0 pt-lg-5">
		<div class="row g-5">

			<!-- Left Side Content -->
			<div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.2s">
				<h2 class="text-white mb-4">Why Choose<br> Mahalaxmi Construction</h2>

				<p class="text-light mb-4">
					Mahalaxmi Construction is a trusted name in waterproofing, plastering, and building construction services. We focus on delivering long-lasting protection, strong structures, and complete customer satisfaction with every project we undertake.
				</p>

				<div class="d-flex align-items-center text-white mb-3">
					<div class="btn-sm-square bg-white text-primary rounded-circle mr-3">
						<i class="fa fa-check"></i>
					</div>
					<span>Expert in Terrace, Basement & Bathroom Waterproofing</span>
				</div>

				<div class="d-flex align-items-center text-white mb-3">
					<div class="btn-sm-square bg-white text-primary rounded-circle mr-3">
						<i class="fa fa-check"></i>
					</div>
					<span>High-Quality Materials & Chemical Coatings</span>
				</div>

				<div class="d-flex align-items-center text-white mb-3">
					<div class="btn-sm-square bg-white text-primary rounded-circle mr-3">
						<i class="fa fa-check"></i>
					</div>
					<span>Free Site Inspection & Leakage Diagnosis</span>
				</div>

				<div class="d-flex align-items-center text-white mb-3">
					<div class="btn-sm-square bg-white text-primary rounded-circle mr-3">
						<i class="fa fa-check"></i>
					</div>
					<span>Complete Construction & Renovation Solutions</span>
				</div>

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

				<div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4 wow fadeIn"
					data-wow-delay="0.3s" style="background-color: rgba(256, 256, 256, 0.1);">
					<div class="d-flex align-items-center">
						<div class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
							<i class="fa fa-home fa-2x text-white"></i>
						</div>
						<div class="px-3">
							<h4 class="text-white mb-3">Complete Waterproofing Solutions</h4>
						</div>
					</div>
					<p class="text-white mb-4">
						We provide reliable waterproofing for terraces, balconies, basements, water tanks, swimming pools, and RCC walls using proven methods and durable materials.
					</p>
				</div>

				<div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
					data-wow-delay="0.4s" style="background-color: rgba(256, 256, 256, 0.1);">
					<div class="d-flex align-items-center">
						<div class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
							<i class="fa fa-tools fa-2x text-white"></i>
						</div>
						<div class="px-3">
							<h4 class="text-white mb-3">Strong Construction & Plastering</h4>
						</div>
					</div>
					<p class="text-white mb-4">
						From compound walls to retaining walls and internal-external plastering, we ensure structural strength and quality finishing.
					</p>
				</div>

				<div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
					data-wow-delay="0.5s" style="background-color: rgba(256, 256, 256, 0.1);">
					<div class="d-flex align-items-center">
						<div class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
							<i class="fa fa-thumbs-up fa-2x text-white"></i>
						</div>
						<div class="px-3">
							<h4 class="text-white mb-3">Customer Satisfaction</h4>
						</div>
					</div>
					<p class="text-white mb-4">
						We believe in transparency, timely delivery, and long-term relationships built on trust and reliable service.
					</p>
				</div>

			</div>

		</div>
	</div>
</div>
<!-- End Why Choose Us -->


<!-- Service Start -->
<div class="service">
	<div class="container">
		<div class="section-header text-center">
			<p>Our Services</p>
			<h2>Complete Construction & Waterproofing Solutions</h2>
		</div>

		<div class="row">

			<!-- Service 1 -->
			<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
				<div class="service-item">
					<div class="service-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/service-1.jpg" alt="Terrace Waterproofing">
						<div class="service-overlay">
							<p>
								Professional terrace and balcony waterproofing solutions to prevent leakage, cracks, and seepage using high-quality chemical coatings and brick bat coba treatment.
							</p>
						</div>
					</div>
					<div class="service-text">
						<h3>Terrace Waterproofing</h3>
						<a class="btn" href="#">+</a>
					</div>
				</div>
			</div>

			<!-- Service 2 -->
			<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
				<div class="service-item">
					<div class="service-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/service-2.jpg" alt="Basement Waterproofing">
						<div class="service-overlay">
							<p>
								Complete basement and retaining wall waterproofing systems to protect structures from groundwater damage and long-term moisture issues.
							</p>
						</div>
					</div>
					<div class="service-text">
						<h3>Basement Waterproofing</h3>
						<a class="btn" href="#">+</a>
					</div>
				</div>
			</div>

			<!-- Service 3 -->
			<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
				<div class="service-item">
					<div class="service-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/service-3.jpg" alt="Bathroom Waterproofing">
						<div class="service-overlay">
							<p>
								Advanced bathroom and water tank waterproofing to stop leakage, damp walls, and tile damage using reliable and durable materials.
							</p>
						</div>
					</div>
					<div class="service-text">
						<h3>Bathroom & Tank Waterproofing</h3>
						<a class="btn" href="#">+</a>
					</div>
				</div>
			</div>

			<!-- Service 4 -->
			<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
				<div class="service-item">
					<div class="service-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/service-4.jpg" alt="Compound Wall">
						<div class="service-overlay">
							<p>
								RCC compound wall, brick compound wall, and retaining wall construction with strong foundation and long-lasting structural support.
							</p>
						</div>
					</div>
					<div class="service-text">
						<h3>Compound & Retaining Wall</h3>
						<a class="btn" href="#">+</a>
					</div>
				</div>
			</div>

			<!-- Service 5 -->
			<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
				<div class="service-item">
					<div class="service-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/service-5.jpg" alt="Plastering Work">
						<div class="service-overlay">
							<p>
								Internal and external plastering services including Chanla plaster, Taar plaster, and Daba plaster for smooth finishing and durability.
							</p>
						</div>
					</div>
					<div class="service-text">
						<h3>Plastering Services</h3>
						<a class="btn" href="#">+</a>
					</div>
				</div>
			</div>

			<!-- Service 6 -->
			<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
				<div class="service-item">
					<div class="service-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/service-6.jpg" alt="Home Renovation">
						<div class="service-overlay">
							<p>
								Complete home renovation, repair (Todphod), RCC work, and structural improvement services with quality workmanship and timely delivery.
							</p>
						</div>
					</div>
					<div class="service-text">
						<h3>Home Renovation & Repair</h3>
						<a class="btn" href="#">+</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Service End -->


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
			<p>Our Team</p>
			<h2>Meet Our Experts</h2>
		</div>
		<div class="row">

			<!-- Owner -->
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
				<div class="team-item">
					<div class="team-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/team-1.jpg" alt="Vishnu Chavan - Owner">
					</div>
					<div class="team-text">
						<h2>Vishnu Chavan</h2>
						<p>Founder & <br>Civil Contractor</p>
					</div>
					<div class="team-social">
						<a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
						<a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
						<a class="social-in" href="#"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>

			<!-- Site Engineer -->
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
				<div class="team-item">
					<div class="team-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/team-2.jpg" alt="Site Engineer">
					</div>
					<div class="team-text">
						<h2>Ajinkya D</h2>
						<p>Construction & RCC Specialist</p>
					</div>
					<div class="team-social">
						<a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
						<a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>

			<!-- Waterproofing Expert -->
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
				<div class="team-item">
					<div class="team-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/team-3.jpg" alt="Waterproofing Expert">
					</div>
					<div class="team-text">
						<h2>Sachin S</h2>
						<p>Terrace & Basement Specialist</p>
					</div>
					<div class="team-social">
						<a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
						<a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>

			<!-- Renovation Supervisor -->
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
				<div class="team-item">
					<div class="team-img">
						<img src="<?php bloginfo('template_directory'); ?>/img/team-4.jpg" alt="Renovation Supervisor">
					</div>
					<div class="team-text">
						<h2>Gaurav B</h2>
						<p>Home Renovation & Demolition</p>
					</div>
					<div class="team-social">
						<a class="social-fb" href="#"><i class="fab fa-facebook-f"></i></a>
						<a class="social-li" href="#"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Team End -->


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


<!-- Testimonial Start -->
<div class="testimonial wow fadeIn" data-wow-delay="0.1s">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="testimonial-slider-nav">
					<div class="slider-nav"><img src="<?php bloginfo('template_directory'); ?>/img/testimonial-1.jpg" alt="Client Review"></div>
					<div class="slider-nav"><img src="<?php bloginfo('template_directory'); ?>/img/testimonial-2.jpg" alt="Client Review"></div>
					<div class="slider-nav"><img src="<?php bloginfo('template_directory'); ?>/img/testimonial-3.jpg" alt="Client Review"></div>
					<div class="slider-nav"><img src="<?php bloginfo('template_directory'); ?>/img/testimonial-4.jpg" alt="Client Review"></div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="testimonial-slider">

					<div class="slider-item">
						<h3>Rahul Patil</h3>
						<h4>Home Owner</h4>
						<p>
							Mahalaxmi Construction did excellent terrace waterproofing work at my home. Leakage problem is completely solved. Quality work and proper finishing. Highly recommended.
						</p>
					</div>

					<div class="slider-item">
						<h3>Sneha Kulkarni</h3>
						<h4>Apartment Owner</h4>
						<p>
							Very professional team. They completed bathroom waterproofing and internal plaster work on time. Clean work and reasonable pricing.
						</p>
					</div>

					<div class="slider-item">
						<h3>Amit Jadhav</h3>
						<h4>Property Developer</h4>
						<p>
							We hired them for RCC compound wall and retaining wall construction. Strong foundation work and proper supervision by owner Vishnu Chavan. Satisfied with the service.
						</p>
					</div>

					<div class="slider-item">
						<h3>Priya Deshmukh</h3>
						<h4>Residential Client</h4>
						<p>
							Basement waterproofing work was done perfectly. Earlier we had heavy seepage issues, now completely fixed. Reliable and skilled team.
						</p>
					</div>

					<div class="slider-item">
						<h3>Sachin More</h3>
						<h4>Villa Owner</h4>
						<p>
							They completed swimming pool waterproofing and terrace brick bat coba work with great quality. Good finishing and honest service.
						</p>
					</div>

					<div class="slider-item">
						<h3>Neha Shinde</h3>
						<h4>Home Renovation Client</h4>
						<p>
							Home renovation and demolition (Todphod) work was done safely and professionally. Team handled everything smoothly from start to finish.
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Testimonial End -->


<?php
// get_sidebar();
get_footer();

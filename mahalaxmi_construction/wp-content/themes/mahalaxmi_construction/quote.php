<?php
/**
 * The main template file
 * Template Name: Quote
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


<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Get a Free Quote</h2>
			</div>
			<div class="col-12">
				<a href="">Home</a>
				<a href="">Quote</a>
			</div>
		</div>
	</div>
</div>


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

<?php

/**
 * The template for displaying the footer
 * Template Name: Footer
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mahalaxmi_construction
 */

?>

<!-- Footer Start -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
	<div class="container">
		<div class="row">

			<!-- Contact -->
			<div class="col-md-6 col-lg-3">
				<div class="footer-contact">
					<h2>Office Contact</h2>

					<p><i class="fa fa-map-marker-alt"></i>Pune, Maharashtra, India</p>

					<p><i class="fa fa-phone-alt"></i>+91 7892100691</p>

					<p><i class="fa fa-envelope"></i>info@mahalaxmi.in</p>

					<div class="footer-social">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-youtube"></i></a>
						<a href="#"><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>

			<!-- Services -->
			<div class="col-md-6 col-lg-3">
				<div class="footer-link">
					<h2>Our Services</h2>

					<a href="#">Terrace Waterproofing</a>
					<a href="#">Bathroom Waterproofing</a>
					<a href="#">Water Tank Waterproofing</a>
					<a href="#">Plaster Work</a>
					<a href="#">Home Renovation</a>

				</div>
			</div>

			<!-- Useful Pages -->
			<div class="col-md-6 col-lg-3">
				<div class="footer-link">
					<h2>Useful Pages</h2>

					<a href="<?php echo site_url('/about'); ?>">About Us</a>

					<a href="<?php echo site_url('/services'); ?>">Our Services</a>

					<a href="<?php echo site_url('/projects'); ?>">Projects</a>

					<a href="<?php echo site_url('/contact'); ?>">Contact Us</a>

				</div>
			</div>

			<!-- Newsletter / Info -->
			<div class="col-md-6 col-lg-3">
				<div class="newsletter">

					<h2>About Mahalaxmi Construction</h2>

					<p>
						Mahalaxmi Construction provides professional waterproofing and construction
						services in Pune.
					</p>

					<div class="form">
						<input class="form-control" placeholder="Your Email">
						<button class="btn">Subscribe</button>
					</div>

				</div>
			</div>

		</div>
	</div>

	<div class="container footer-menu">
		<div class="f-menu">

			<a href="#">Terms of Use</a>
			<a href="#">Privacy Policy</a>
			<a href="#">Help</a>
			<a href="#">FAQs</a>

		</div>
	</div>

	<div class="container copyright">
		<div class="row">

			<div class="col-md-6">
				<p>
					&copy; <a href="https://lealsolution.com">Mahalaxmi Construction</a>,
					All Rights Reserved.
				</p>
			</div>

			<div class="col-md-6">
				<p>
					Designed By <a href="https://lealsolution.com">Leal Software Solution Pvt Ltd</a>
				</p>
			</div>

		</div>
	</div>

</div>
<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<!-- Bootstrap 5 JS (Includes Popper) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
<!-- jQuery (Required for Bootstrap 4) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Bootstrap 4 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/lib/easing/easing.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/wow/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/lightbox/js/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/counterup/counterup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>

</html>
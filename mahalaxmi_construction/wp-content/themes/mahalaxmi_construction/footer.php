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
			<div class="col-md-6 col-lg-3">
				<div class="footer-contact">
					<h2>Office Contact</h2>
					<p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
					<p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
					<p><i class="fa fa-envelope"></i>info@example.com</p>
					<div class="footer-social">
						<a href=""><i class="fab fa-twitter"></i></a>
						<a href=""><i class="fab fa-facebook-f"></i></a>
						<a href=""><i class="fab fa-youtube"></i></a>
						<a href=""><i class="fab fa-instagram"></i></a>
						<a href=""><i class="fab fa-linkedin-in"></i></a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="footer-link">
					<h2>Services Areas</h2>
					<a href="">Building Construction</a>
					<a href="">House Renovation</a>
					<a href="">Architecture Design</a>
					<a href="">Interior Design</a>
					<a href="">Painting</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="footer-link">
					<h2>Useful Pages</h2>
					<a href="">About Us</a>
					<a href="">Contact Us</a>
					<a href="">Our Team</a>
					<a href="">Projects</a>
					<a href="">Testimonial</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="newsletter">
					<h2>Newsletter</h2>
					<p>
						Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu
					</p>
					<div class="form">
						<input class="form-control" placeholder="Email here">
						<button class="btn">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container footer-menu">
		<div class="f-menu">
			<a href="">Terms of use</a>
			<a href="">Privacy policy</a>
			<a href="">Cookies</a>
			<a href="">Help</a>
			<a href="">FQAs</a>
		</div>
	</div>
	<div class="container copyright">
		<div class="row">
			<div class="col-md-6">
				<p>&copy; <a href="https://lealsolution.com">Mahalaxmi Construction</a>, All Right Reserved.</p>
			</div>
			<div class="col-md-6">
				<!--/*** The author’s attribution link must remain intact in the template. ***/-->
				<!--/*** If you wish to remove this credit link, please purchase the Pro Version . ***/-->
				<p>Designed By <a href="https://lealsolution.com">Leal Software Solution Pvt Ltd</a></p>
			</div>
		</div>
	</div>
</div>
<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<!-- Bootstrap 5 JS (Includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
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
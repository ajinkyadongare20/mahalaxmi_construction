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

$footer_page_id = 15;
?>

<!-- Footer Start -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
	<div class="container">
		<div class="row">

			<!-- Contact -->
			<div class="col-md-6 col-lg-3">
				<div class="footer-contact">
					<h2><?php echo esc_html(get_field('footer_office_contact', $footer_page_id)); ?></h2>
					<p><i class="fa fa-map-marker-alt"></i><?php echo esc_html(get_field('footer_office_address', $footer_page_id)); ?></p>
					<p><i class="fa fa-phone-alt"></i><?php echo esc_html(get_field('footer_mobile_number', $footer_page_id)); ?></p>
					<p><i class="fa fa-envelope"></i><?php echo esc_html(get_field('footer_email_address', $footer_page_id)); ?></p>
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
					<h2><?php echo esc_html(get_field('footer_services_heading', $footer_page_id)); ?></h2>
					<?php for ($i = 1; $i <= 5; $i++) : ?>
						<?php $service = get_field('footer_our_services_' . $i, $footer_page_id); ?>
						<?php if ($service) : ?>
							<a href="#"><?php echo esc_html($service); ?></a>
						<?php endif; ?>
					<?php endfor; ?>
				</div>
			</div>

			<!-- Useful Pages -->
			<div class="col-md-6 col-lg-3">
				<div class="footer-link">
					<h2><?php echo esc_html(get_field('footer_linking_page_heading', $footer_page_id)); ?></h2>
					<?php
					$args = array(
						'post_type'      => 'footer_quick_links',
						'posts_per_page' => -1,
						'orderby'        => 'menu_order',
						'order'          => 'ASC'
					);
					$footer_quick_links = new WP_Query($args);
					if ($footer_quick_links->have_posts()) :
						while ($footer_quick_links->have_posts()) :
							$footer_quick_links->the_post();
							$link = get_field('footer_quick_links_url');
							if ($link) :
								$link_url = is_array($link) ? $link['url'] : $link;
					?>
								<a href="<?php echo esc_url($link_url); ?>"><?php the_title(); ?></a>
					<?php
							endif;
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
			</div>

			<!-- Newsletter / Info -->
			<div class="col-md-6 col-lg-3">
				<div class="newsletter">
					<h2><?php echo esc_html(get_field('footer_newsletter_heading', $footer_page_id)); ?></h2>
					<?php echo wp_kses_post(get_field('footer_newsletter_description', $footer_page_id)); ?>
					<div class="form">
						<input class="form-control" placeholder="<?php esc_attr_e('Your Email', 'mahalaxmi_construction'); ?>">
						<button class="btn"><?php esc_html_e('Subscribe', 'mahalaxmi_construction'); ?></button>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Footer Menu -->
	<div class="container footer-menu">
		<div class="f-menu">
			<a href="#"><?php echo esc_html(get_field('footer_terms_use', $footer_page_id)); ?></a>
			<a href="#"><?php echo esc_html(get_field('footer_privacy_policy', $footer_page_id)); ?></a>
			<a href="#"><?php echo esc_html(get_field('footer_help', $footer_page_id)); ?></a>
			<a href="#"><?php echo esc_html(get_field('footer_faqs', $footer_page_id)); ?></a>
		</div>
	</div>

	<!-- Copyright -->
	<div class="container copyright">
		<div class="row">
			<div class="col-md-6">
				<p>
					&copy; <?php echo esc_html(date('Y')); ?>
					<?php
					$mahalaxmi_link = get_field('footer_bottom_link_mahalaxmi', $footer_page_id);
					if ($mahalaxmi_link) :
						$link_url = is_array($mahalaxmi_link) ? $mahalaxmi_link['url'] : $mahalaxmi_link;
					?>
						<a href="<?php echo esc_url($link_url); ?>">
							<?php echo esc_html(get_field('footer_bottom_link_mahalaxmi_text', $footer_page_id)); ?>
						</a>,
					<?php endif; ?>
					<?php echo esc_html(get_field('footer_all_rights_reserved', $footer_page_id)); ?>
				</p>
			</div>

			<div class="col-md-6">
				<p>
					<?php echo esc_html(get_field('footer_desgined_&_developed', $footer_page_id)); ?>
					<?php
					$design_link = get_field('footer_desgin_by_link', $footer_page_id);
					if ($design_link) :
						$link_url = is_array($design_link) ? $design_link['url'] : $design_link;
					?>
						<a href="<?php echo esc_url($link_url); ?>">
							<?php echo esc_html(get_field('footer_desgined_by_text', $footer_page_id)); ?>
						</a>
					<?php endif; ?>
				</p>
			</div>
		</div>
	</div>

</div>
<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
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
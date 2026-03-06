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
$quote_page_id = 39;
?>

<!-- Page Header -->
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><?php echo esc_html( get_field( 'banner_page_tittle' ) ); ?></h2>
			</div>
			<div class="col-12">
				<?php
				$home_link = get_field( 'banner_page_home_link' );
				if ( $home_link ) :
					$home_url = is_array( $home_link ) ? $home_link['url'] : $home_link;
					?>
					<a href="<?php echo esc_url( $home_url ); ?>">
						<?php echo esc_html( get_field( 'banner_page_home_text' ) ); ?>
					</a>
				<?php endif; ?>
				<?php
				$page_link = get_field( 'banner_page_name_link' );
				if ( $page_link ) :
					$page_url = is_array( $page_link ) ? $page_link['url'] : $page_link;
					?>
					<a href="<?php echo esc_url( $page_url ); ?>">
						<?php echo esc_html( get_field( 'banner_page_name' ) ); ?>
					</a>
				<?php endif; ?>
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
					<p class="text-uppercase">
						<?php echo esc_html( get_field( 'quote_small_title', $quote_page_id ) ); ?>
					</p>
					<h2><?php echo esc_html( get_field( 'quote_heading', $quote_page_id ) ); ?></h2>
				</div>

				<div class="row gx-3">
					<div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
						<h5 class="mb-4 quote-subheading">
							<i class="fa fa-reply m-2"></i>
							<?php echo esc_html( get_field( 'quote_feature_1', $quote_page_id ) ); ?>
						</h5>
					</div>

					<div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
						<h5 class="mb-4 quote-subheading">
							<i class="fa fa-tools m-2"></i>
							<?php echo esc_html( get_field( 'quote_feature_2', $quote_page_id ) ); ?>
						</h5>
					</div>
				</div>

				<?php echo wp_kses_post( get_field( 'quote_description', $quote_page_id ) ); ?>

				<div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
					<div class="quote-call-icon d-flex align-items-center justify-content-center rounded"
						style="width: 60px; height: 60px;">
						<i class="fa fa-phone-alt text-white"></i>
					</div>

					<div class="ps-4">
						<h5 class="m-2 quote-subheading">
							<?php echo esc_html( get_field( 'quote_assistance_text', $quote_page_id ) ); ?>
						</h5>
						<h4 class="m-2 fw-bold" style="font-size: 1.5rem; font-weight: bold;">
							<?php echo esc_html( get_field( 'quote_phone_number', $quote_page_id ) ); ?>
						</h4>
					</div>
				</div>
			</div>

			<div class="col-lg-5">
				<div class="quote-form rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
					<?php echo do_shortcode( '[contact-form-7 id="c569c15" title="Contact form 2 - Quote"]' ); ?>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Quote End -->

<?php
get_footer();

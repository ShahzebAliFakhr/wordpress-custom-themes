<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SAF-Services
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#page"><?php esc_html_e('Skip to content', 'saf-services'); ?></a>

		<!-- Start of Header -->
		<!-- Top Panel -->
		<div class="container-fluid bg-base" id="top-panel">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 md-text-center text-white">
						<i class="fas fa-map-marker-alt text-white mr-3"></i>
						<?php echo get_theme_mod('address_setting', '') ?>
					</div>
					<div class="col-lg-6 md-text-center text-right social-icons">
						<?php get_template_part( 'template-parts/social', 'icons' );  ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Middle Panel -->
		<div class="container-fluid" id="middle-panel">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 md-text-center" id="logo-container">
						<a href="#" class="navbar-brand text-base">
							<?php
							the_custom_logo();
							?>
						</a>
					</div>
					<div class="col-lg-9 text-right md-text-center" id="middle-panel-left">

						<div class="contact-block">
							<div class="contact-block-icon">
								<i class="fa fa-phone-volume text-base"></i>
							</div>
							<div class="contact-block-values">
								<a href="tel:<?php echo get_theme_mod('phone_setting', '') ?>" class="text-base"><?php echo get_theme_mod('phone_setting', '') ?></a>
							</div>
						</div>
						<div class="contact-block">
							<div class="contact-block-icon">
								<i class="far fa-envelope-open text-base"></i>
							</div>
							<div class="contact-block-values">
								<a href="mailto:<?php echo get_theme_mod('email_setting', '') ?>" class="text-base"><?php echo get_theme_mod('email_setting', '') ?></a>
							</div>
						</div>

						<a href="#" data-toggle="modal" data-target="#GetQuoteModal" class="btn-base" id="get-quote-btn">GET QUOTE</a>

					</div>
				</div>
			</div>
		</div>

		<?php get_template_part( 'template-parts/navigation', 'code' );  ?>	
	
		<!-- Starts of Modals -->
		<div class="modal fade" id="GetQuoteModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h2 class="modal-title text-base">GET QUOTE</h2>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
					</div>
					<!-- Modal Body -->
					<div class="modal-body">
						<?php
						$get_quote = get_theme_mod('get_quote_setting','[contact-form-7 id="8" title="Get Quote"]');
						?>
						<?php echo do_shortcode($get_quote); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Ends of Modals -->
		<!-- End Of Header -->

		<div id="wrapper">
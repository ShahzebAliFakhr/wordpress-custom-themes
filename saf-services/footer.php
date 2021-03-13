<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SAF-Services
 */

?>

</div><!-- #wrapper -->

<div class="container-fluid" id="footer-widgets">
	<div class="row">
		<div class="col-lg-3 col-md-6"><?php dynamic_sidebar( 'footer-1' ); ?></div>
		<div class="col-lg-3 col-md-6"><?php dynamic_sidebar( 'footer-2' ); ?></div>
		<div class="col-lg-3 col-md-6"><?php dynamic_sidebar( 'footer-3' ); ?></div>
		<div class="col-lg-3 col-md-6"><?php dynamic_sidebar( 'footer-4' ); ?></div>
	</div>	
</div>


<footer class="footer-bottom container-fluid bg-base">
	<div class="container">
		<div class="row">
		<div class="col-lg-6 md-text-center"><?php echo get_theme_mod('footer_setting', 'Copyright &copy; 2019 SAF Services. All Rights Reserved.') ?></div>
		<div class="col-lg-6 md-text-center text-right social-icons">
			<?php get_template_part('template-parts/social', 'icons');  ?>
		</div>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

</div><!-- #page --> 
</body>
</html>
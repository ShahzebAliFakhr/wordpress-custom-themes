<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SAF-Services
 */

get_header();
?>

	<div class="row" >
		<div class="col-lg-9">
			<div id="single-content">	

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</div><!-- #single-content -->
			</div>
			<div class="col-lg-3">
				<div id="sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>
	</div><!-- .row -->

<?php
get_footer();

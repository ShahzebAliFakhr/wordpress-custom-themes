<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SAF-Services
 */

get_header();
?>

	<div class="row">
		<div class="col-lg-9">
			<div id="content-404">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'saf-services' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'saf-services' ); ?></p>

						<?php
						get_search_form();
						?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
		</div><!-- #404-content -->
		</div>
		<div class="col-lg-3">
			<div id="sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div><!-- .row -->

<?php
get_footer();

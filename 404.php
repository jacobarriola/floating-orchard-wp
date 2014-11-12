<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Floating Orchard
 */

get_header(); ?>

	<div class="row page-container section">
		<div class="large-12 columns">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'floatingorchard' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location.', 'floatingorchard' ); ?></p>					

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- .columns -->
	</div><!-- .page-container -->

<?php get_footer(); ?>

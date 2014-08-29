<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Floating Orchard
 */

get_header(); ?>

	<div class="row page-container">
		<div class="large-12 columns">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>

		</div><!-- end columns -->
	</div><!-- end row -->


<?php get_footer(); ?>

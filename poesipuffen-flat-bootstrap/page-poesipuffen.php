<?php
/**
 * Theme: poesipuffen
 * 
 * Template Name: Page-poesipuffen - Full Width

 */

get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>

	<div id="primary" class="content-area-wide">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page-fullwidth' ); ?>
				
				Hejja

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php //get_sidebar(); ?>

<?php get_footer(); ?>

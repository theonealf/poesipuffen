<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>

<?php get_sidebar( 'home' ); ?>

<div class="container">
<div id="main-grid" class="row">

	<section id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">
           
		<?php if ( have_posts() ) : ?>

                <?php
                  global $wp_query;
                  $postid = $wp_query->post->ID;
                  echo get_post_meta($postid, 'forfattare', true);
                  wp_reset_query();
                ?>

                <?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php get_sidebar(); ?>

</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
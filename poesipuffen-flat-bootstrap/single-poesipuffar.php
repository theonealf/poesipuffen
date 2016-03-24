<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The Template for displaying all single posts.
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>

<div class="container">
<div id="main-grid" class="row">

	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">
        testar

                <?php
                global $wp_query;
                $postid = $wp_query->post->ID;
                echo get_post_meta($postid, 'forlag', true);
                wp_reset_query();
                ?>

            </main>
            <!-- #main -->
	</div><!-- #primary -->

</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
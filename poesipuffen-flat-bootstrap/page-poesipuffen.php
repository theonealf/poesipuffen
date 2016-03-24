<?php
/**
 * Theme: poesipuffen
 * 
 * Template Name: Page-poesipuffen - Full Width

 */

get_header(); ?>



	<div id="primary" class="content-area-wide">
		<main id="main" class="site-main" role="main">
        detta

        <?php
           
        $type = 'poesipuffar';
        $args=array(
          'post_type' => $type,
          'post_status' => 'publish',
          'posts_per_page' => -1,
          'caller_get_posts'=> 1
          );

            $custom_query = new WP_Query($args); 
              
            if( $custom_query->have_posts() ) {
  while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
    <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
    <?php
  endwhile;
}
            wp_reset_query();  // Restore global post data stomped by the_post().
    ?>
        <?php wp_reset_postdata(); // reset the query ?>


		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
<?php get_footer(); ?>
            
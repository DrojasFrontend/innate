<?php
/**
 * The main template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Innate
 */

get_header(); ?>

	<main id="primary" class="site-main">
    <?php 
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); 
          the_content();
        }
      }
    ?>
  </main>
  
<?php get_footer();

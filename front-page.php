<?php
/**
 * The template for the front page
 *
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <div id="page" class="row" role="main">

 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
<?php 

get_template_part( 'parts/home-slider' );

 ?>




<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

 </div>
  <?php get_footer(); ?>
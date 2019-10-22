<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <?php while ( have_posts() ) : the_post(); ?>



 <div class="row align-middle align-center" style="margin-top:40px">
   <div class="columns small-12 medium-6 main-content">
     <?php the_title('<h1 class="text-center">', '</h1>'); ?>
     <?php the_content(); ?>
   </div>
 </div>
 <?php endwhile; ?>


 <?php do_action( 'foundationpress_after_content' ); ?>

 </div>

 <?php get_footer(); ?>

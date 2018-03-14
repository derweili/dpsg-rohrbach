<?php
/*
Template Name: Stufen
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>



<div class="row align-middle align-center">
  <div class="columns small-12 medium-6 main-content">
    <?php the_title('<h1 class="text-center">', '</h1>'); ?>
    <?php the_content(); ?>
  </div>
</div>
<?php endwhile; ?>

<?php get_template_part( 'parts/feature-boxes' ); ?>

 <?php get_footer(); ?>

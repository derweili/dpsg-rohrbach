<?php
/*
Template Name: Woelflinge
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="home-banner">
  <div class="row align-center align-middle">
    <div class="columns small-12 text-center text-container">
      <h1>
        WÖLFLINGE<br>
        <span class="small">
          7 – 10 JAHRE
        </span>
      </h1>
      <!-- <a href="/category/bildergalerie/"class="button hollow">Zur Bildergalerie</a>
      <a class="button">Mitglied werden</a> -->
    </div>

  </div>
</section>


<div class="row align-middle">
  <div class="columns small-12 medium-4">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/img/woelfi@2x.png" alt="">
  </div>
  <div class="columns small-12 medium-6 medium-offset-1">
    <?php the_content(); ?>
  </div>


</div>

<?php endwhile; ?>

<?php get_template_part( 'parts/home-news' ); ?>

 <?php get_footer(); ?>

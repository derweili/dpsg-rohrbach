<?php
/*
Template Name: Jungpfadfinder
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="home-banner">
  <div class="row align-center align-middle">
    <div class="columns small-12 text-center text-container">
      <h1>
        Jungpfadfinder<br>
        <span class="small">
          10 – 13 JAHRE
        </span>
      </h1>
      <!-- <a href="/category/bildergalerie/"class="button hollow">Zur Bildergalerie</a>
      <a class="button">Mitglied werden</a> -->
    </div>

  </div>
</section>


<div class="row align-middle">
  <div class="columns small-12 medium-4">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/img/kobold.png" alt="">
  </div>
  <div class="columns small-12 medium-6 medium-offset-1">
    <?php the_content(); ?>
  </div>


</div>
<?php endwhile; ?>
<?php get_template_part( 'parts/home-news' ); ?>

 <?php get_footer(); ?>

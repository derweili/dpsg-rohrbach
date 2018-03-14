<?php
/*
Template Name: Über uns
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="home-banner">
  <div class="row align-center align-middle">
    <div class="columns small-12 text-center text-container">
      <h1>
        <?php the_title(); ?><br>
        <span class="small">
          Der Stamm Dom-Helder Camara<br>Sinsheim–Rohrbach
        </span>
      </h1>
      <!-- <a href="/category/bildergalerie/"class="button hollow">Zur Bildergalerie</a>
      <a class="button">Mitglied werden</a> -->
    </div>

  </div>
</section>


<div class="row align-middle align-center">
  <div class="columns small-12 medium-8 content-section">
    <?php the_content(); ?>
  </div>


</div>
<?php endwhile; ?>


 <?php get_footer(); ?>

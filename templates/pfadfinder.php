<?php
/*
Template Name: Pfadfinder
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="home-banner">
  <div class="row align-center align-middle">
    <div class="columns small-12 text-center text-container">
      <h1>
        Pfadfinder<br>
        <span class="small">
          13 – 16 JAHRE
        </span>
      </h1>
      <!-- <a href="/category/bildergalerie/"class="button hollow">Zur Bildergalerie</a>
      <a class="button">Mitglied werden</a> -->
    </div>

  </div>
</section>


<div class="row align-middle">
  <div class="columns small-12 medium-5 text-center">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/img/pfadistufe-logo.png" alt="">
  </div>
  <div class="columns small-12 medium-6">
    <p>Im Alter von sieben Jahren können Jungen und Mädchen Mitglied der Wölflingsstufe und damit der DPSG werden. In der Kinderstufe stehen die Wölflinge am Anfang einer Entdeckungsreise, in der sie bis zum 10. Lebensjahr vieles lernen, ausprobieren und erleben können.
</p>
    <p>Die Wölflinge treffen sich jeden Freitag von 17:00 Uhr bis 18:30 Uhr im Gruppenraum unter der Kapelle in Rohrbach. </p>
    <p>
      <a href="#" class="button hollow">Nachricht an die Leiter schicken</a>
    </p>
  </div>


</div>

<?php endwhile; ?>

<?php get_template_part( 'parts/home-news' ); ?>

 <?php get_footer(); ?>

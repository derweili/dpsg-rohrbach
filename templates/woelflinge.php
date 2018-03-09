<?php
/*
Template Name: Woelflinge
*/
get_header(); ?>


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


<div class="row">
  <div class="columns small-12 medium-4">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/img/woelfi@2x.png" alt="">
  </div>
  <div class="columns">
    <p>Im Alter von sieben Jahren können Jungen und Mädchen Mitglied der Wölflingsstufe und damit der DPSG werden. In der Kinderstufe stehen die Wölflinge am Anfang einer Entdeckungsreise, in der sie bis zum 10. Lebensjahr vieles lernen, ausprobieren und erleben können.
</p>
    <p>Die Wölflinge treffen sich jeden Freitag von 17:00 Uhr bis 18:30 Uhr im Gruppenraum unter der Kapelle in Rohrbach. </p>
    <p>
      <a href="#" class="button hollow">Nachricht an die Leiter schicken</a>
    </p>
  </div>


</div>

<?php get_template_part( 'parts/home-news' ); ?>

 <?php get_footer(); ?>

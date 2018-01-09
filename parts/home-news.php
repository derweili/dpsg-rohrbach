<?php

$args = array(
  'posts_per_page' => 6,
);

$posts = get_posts($args);

if($posts):

  ?>
    <div class="columns small-12">
      <div class="row archive" id="frontPageNews">
        <div class="columns small-12">
          <h2>Das neuste aus der Bildergalerie</h2>

        </div>
        <?php foreach ($posts as $post): setup_postdata($post); ?>
          <div id="post-<?php the_ID(); ?>" <?php post_class('columns small-6 medium-4'); ?>>
            <header>
              <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('galleryfeature'); ?></a>
              <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <?php //foundationpress_entry_meta(); ?>
            </header>
            <?php /*<div class="entry-content">
              <?php the_excerpt(); ?>
              <a href="<?php echo get_permalink(); ?>" class="button">Weiterlesen</a>
            </div>*/ ?>
            <!--<hr />-->
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  <?php
wp_reset_postdata();
endif;

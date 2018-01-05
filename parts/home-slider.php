
<?php
$args = array(
  'posts_per_page'   => 5,
  'post_type'        => 'post',
  'post_status'      => 'publish',
  'meta_key'    => 'show_on_homepage',  // Only Show Posts
  'meta_value'  => '1',                  // With checkbox "show_on_home" activated
  'suppress_filters' => true
);
$newssliderposts = get_posts( $args );

if ($newssliderposts):
  ?>
<div class="columns small-12">
  <div class="slider-container">
  <div class="image-slider un-initialized" role="region">

    <?php
      $count = 1;
      $bullets = '';
      foreach ( $newssliderposts as $post ) : setup_postdata( $post ); ?>
        <?php
        $sliderimage = get_field('sliderimage');


        if ($sliderimage['ID'] || has_post_thumbnail()):

         ?>

        <div class="slide">
          <a href="<?php echo get_permalink(); ?>">
            <?php if ($sliderimage['ID']): ?>
              <img data-lazy="<?php echo $sliderimage['sizes']['homeslider']; ?>" title="<?php echo $sliderimage['title']; ?>" alt="<?php echo $sliderimage['alt']; ?>"/>
            <?php else: ?>
              <?php the_post_thumbnail( 'homeslider',  array( 'data-crazy-lazy' => 'exclude' ) ); ?>
            <?php endif; ?>
            <hgroup>
              <h2 class="headline01 hide-for-small-only"><?php the_field('text_1'); ?></h2>
              <h2 class="headline02 hide-for-small-only"><?php the_field('text_2'); ?></h2>
            </hgroup>
          </a>
        </div>
    <?php

        // if ($count == 1) {
        //   $bullets .= '<button class="is-active" data-slide="0"><span class="">' . get_field('slidernav_text') . '</span><span class="show-for-sr">Current Slide</span></button>';
        // }else{
        //   $slide_data_id = $count - 1;
        //   $bullets .= '<button data-slide="' . $slide_data_id . '"><span class="">' . get_field('slidernav_text') . '</span></button>';
        // }

        $count++;
        endif;
      endforeach;
     ?>

  </div>
  </div>
</div>
<?php
endif;
?>

<?php

$events = tribe_get_events( array(
   'posts_per_page' => 1,
   'start_date'     => date( 'Y-m-d H:i:s' )
) );

if($events):
 ?>
<div class="next-event-teaser">
  <h3>Nächster Termin:</h3>
  <?php foreach ($events as $post ): setup_postdata( $post ); ?>
    <div class="next-event">
      <h4>
        <?php echo $post->post_title; ?>
        <span class="date"><?php echo  tribe_get_start_date( $post ); ?></span>
        <!-- <span class="time">09:00</span> -->
      </h4>
      <a href="<?php the_permalink(); ?>" class="read-more">Mehr erfahren</a>
    </div>
  <?php endforeach; wp_reset_postdata(); ?>
  <a href="<?php echo get_post_type_archive_link('tribe_events');?>" class="all-events">Alle Termine ansehen</a>
</div>
<?php

endif;

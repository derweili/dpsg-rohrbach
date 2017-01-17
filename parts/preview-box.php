<div id="post-<?php the_ID(); ?>" <?php post_class('columns small-6 medium-4 preview-card'); ?>>
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
<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
		<header>
			<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
			<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php foundationpress_entry_meta(); ?>
		</header>
		<div class="entry-content">
			<?php the_excerpt(); ?>
			<a href="<?php echo get_permalink(); ?>" class="button">Weiterlesen</a>
		</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags('Themen: '); ?></p><?php } ?>
	</footer>
	<!--<hr />-->
</div>

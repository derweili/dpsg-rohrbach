<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div id="page" class="row main-content" data-sticky-container role="main">
	<!--<article class=" columns small-12">-->
	<?php if ( have_posts() ) : ?>
		<div class="columns small-12  text-center" id="headlinesection">
			<h1><span class="light">Suchergebnisse zu: </span><?php echo get_search_query(); ?></h1>
			<p><?php category_description() ?></p>
		</div>


				<div class="columns small-12 large-12">
					<div class="row">
				<?php /* Start the Loop */
					$year = '';
					$years = array();
				?>
				<?php while ( have_posts() ) : the_post(); ?>

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
				<?php endwhile; ?>
					</div>

				</div>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; // End have_posts() check. ?>

				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
					<nav id="post-nav" class="columns small-12">
						<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
						<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
					</nav>
				<?php } ?>

			<!--</article>-->
			<?php //get_sidebar(); ?>

		</div>

		<?php get_footer(); ?>

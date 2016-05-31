<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="page" class="row main-content" role="main">
	<!--<article class=" columns small-12">-->
	<?php if ( have_posts() ) : ?>
		<div class="columns small-12">
			<h1><?php single_cat_title() ?></h1>
			<p><?php category_description() ?></p>
		</div>
		<?php /* Start the Loop */ 
			$year = '';
		?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php
				$currentyear = get_the_time( 'Y' );

				if ( $year != $currentyear ) {
					$year = $currentyear;
					echo '<div class="columns small-12 year-container"><h2 class="year">Bilder aus dem Jahr ' . $year . ':</h2></div>';
				} else{
					//echo '<div class="columns small-12"><h2>hallo</h2></div>';
				}
			?>
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

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

	<!--</article>-->
	<?php //get_sidebar(); ?>

</div>

<?php get_footer(); ?>

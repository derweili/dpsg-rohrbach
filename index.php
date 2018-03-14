<?php
/**
 * The template for displaying "bildergalerie" archive pages
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
			<h1><?php dpsg_rohrbach_archivetitle(); ?></h1>
			<p><?php category_description() ?></p>
		</div>
		<div class="columns small-12 large-12">
			<div class="row">
		<?php /* Start the Loop */
			$year = '';
			$years = array();
		?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'parts/preview-box', get_post_format() ); ?>
		<?php endwhile; ?>
			</div>

		</div>
			<!--<div class="columns large-2">
				<p class="lead">Jahre</p>
				<ul class="menu vertical">
					<?php foreach ($years as $year): ?>
						<li><a href="#year<?php echo $year; ?>"><?php echo $year; ?></a></li>
					<?php endforeach ?>
				</ul>
			</div>-->

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

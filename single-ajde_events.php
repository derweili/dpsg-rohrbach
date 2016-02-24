<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
		<?php endif; ?>
		<header>
			<h1 class="post-title"><?php the_title(); ?></h1>
			<?php // foundationpress_entry_meta(); ?>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="">



		<?php the_content(); ?>
		<div class="row">
			<div class="columns small-12 medium-6">
				Ort:<br />
				<?php echo get_post_meta( 'evcal_location', get_the_id() ); ?><br />
				<?php //the_meta( 'evcal_location_name', get_the_id() ); ?><br />
				<?php echo date( 'Y', get_post_meta( 'evcal_location' )); ?><br />

			</div>
			<div class="columns small-12 medium-6"></div>
		</div>
		</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>

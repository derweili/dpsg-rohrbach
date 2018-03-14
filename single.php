<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" role="main" data-equalizer data-equalize-on="medium">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>" >

		<?php
			$post_thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
		?>

		<section class="home-banner" style="<?php echo $post_thumbnail_url ? 'background-image: url(\'' . $post_thumbnail_url . '\');' : ''; ?> ">
		  <div class="row align-center align-middle">
		    <div class="columns small-12 text-center text-container">
		      <h1>
		        <?php the_title(); ?><br>
		        <span class="small">
		          <?php the_date( 'F Y' ); ?>
		        </span>
		      </h1>
		      <!-- <a href="/category/bildergalerie/"class="button hollow">Zur Bildergalerie</a>
		      <a class="button">Mitglied werden</a> -->
		    </div>

		  </div>
		</section>

		<div class="content-section row align-center">
			<div class="inner columns small-12 medium-7">


			<?php the_content(); ?>
			</div>

			<div class="columns small-12">
				<?php if ( function_exists( 'echo_ald_crp' ) ) echo_ald_crp(); ?>
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
</div>
<?php get_footer(); ?>

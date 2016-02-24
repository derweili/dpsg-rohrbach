<?php
/*
Template Name: Stufen
*/
get_header(); ?>

 <?php get_template_part( 'parts/featured-image' ); ?>

 <div id="page" class="row" role="main">
  <div class="columns small-12 medium-3">
  
  <?php get_template_part( 'parts/sidebarnav' ); ?>


  </div>
 <?php //get_sidebar(); ?>

 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
   <article <?php post_class('main-content columns small-12 medium-9') ?> id="post-<?php the_ID(); ?>">
       <header>
           <h1 class="entry-title"><?php the_title(); ?></h1>
       </header>
       <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
       <div class="entry-content">
           <?php the_content(); ?>

<?php

$category = get_post_meta(get_the_id(), 'stufen_metabox_stufe', true);
if (!empty($category)):

echo '<div class="row">';
$args = array(
  'posts_per_page'   => 3,
  //'offset'           => 0,
  //'category'         => $category,
  //'category_name'    => '',
  //'orderby'          => 'date',
  //'order'            => 'ASC',
  //'include'          => '',
  //'exclude'          => '',
  //'meta_key'         => '',
  //'meta_value'       => '',
  'post_type'        => 'post',
  //'post_mime_type'   => '',
  //'post_parent'      => $parent_id,
  //'author'     => '',
  //'post_status'      => 'publish',

  'tax_query' => array(
    array(
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => $category
    )
  ),
  'suppress_filters' => true 
);
$posts_array = get_posts( $args );


//print_r($posts_array);
foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
<?php 

 ?>
	<div class="columns small-12 medium-4">
		<a href="<?php the_permalink(); ?>" >
			<?php the_post_thumbnail(); ?>
	    	<?php the_title(); ?>
	    </a>
    </div>
<?php endforeach; 


wp_reset_postdata();

echo "</div>";

endif;
            ?>
       </div>
       <footer>
           <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
           <p><?php the_tags(); ?></p>
       </footer>
       <?php do_action( 'foundationpress_page_before_comments' ); ?>
       <?php comments_template(); ?>
       <?php do_action( 'foundationpress_page_after_comments' ); ?>
   </article>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>

 </div>

 <?php get_footer(); ?>

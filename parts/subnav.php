<?php
$idmain = get_the_id();

// only show subnav on pages
if ( 'page' == get_post_type($idmain) ) :

  if ($post->post_parent == 0){
    $parent_id = $idmain;
  }else{
    $parent_id = $post->post_parent;
  }


  $args = array(
    'posts_per_page'   => 999,
    //'offset'           => 0,
    //'category'         => '',
    //'category_name'    => '',
    //'orderby'          => 'date',
    'order'            => 'ASC',
    //'include'          => '',
    //'exclude'          => '',
    //'meta_key'         => '',
    //'meta_value'       => '',
    'post_type'        => 'page',
    //'post_mime_type'   => '',
    'post_parent'      => $parent_id,
    //'author'     => '',
    //'post_status'      => 'publish',
    'suppress_filters' => true
  );
  $posts_array = get_posts( $args );

  //print_r($posts_array);
  echo '<div class="subnav"><ul class="menu">';
  foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
  <?php
  //print_r($post);

   ?>
    <li <?php if(get_the_id() == $idmain){ echo ' class="active"';}; ?>>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </li>
  <?php endforeach;

  echo '</ul></div>';

  wp_reset_postdata();

endif; //post type page

?>

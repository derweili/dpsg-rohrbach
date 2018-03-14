<ul class="menu categorynav align-center">
  <?php

  $args = array(
      'taxonomy'               => 'category',
      'orderby'                => 'name',
      'order'                  => 'ASC',
      'hide_empty'             => true,
      'meta_query' => array(
           array(
              'key'       => 'dpsg_feature_category',
              'value'     => true,
              'compare'   => '='
           )
      )

  );
  $the_query = new WP_Term_Query($args);

  foreach($the_query->get_terms() as $term){
    $term->term_id == get_queried_object_id() ? $active_class = 'active' : $active_class = '';
    echo '<li class="' . $active_class . '"><a href="' . get_term_link($term) . '"class="">' . $term->name . '</a></li>';
  }
   ?>
  </ul>

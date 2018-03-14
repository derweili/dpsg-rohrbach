<?php

function dpsg_rohrbach_register_algolia_template( $locations, $file ){

//  var_dump($locations);

  //$locations = [];

  //$locations[] = $file;

  $templates_path = dirname(__FILE__);
  if ( 'algolia/' !== $templates_path ) {
    //$locations[] = 'algolia/' . $file;
  }
//  $locations[] = $templates_path . '/'. $file;

  array_unshift($locations, $templates_path . '/algolia/'. $file);
  // var_dump($locations);
  // var_dump( locate_template( array_unique( $locations ) ) );

  return $locations;

}

add_filter('algolia_template_locations', 'dpsg_rohrbach_register_algolia_template', 10, 2);


function dpsg_rohrbach_register_algolia_default_template( $path, $file ){
  $templates_path = dirname(__FILE__);
  return $templates_path . '/algolia/'. $file;
}
add_filter('algolia_default_template', 'dpsg_rohrbach_register_algolia_default_template', 10, 2);

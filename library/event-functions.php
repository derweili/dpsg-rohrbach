<?php


/**
V3
*/

//Register Column
add_filter('manage_edit-dpsg-event_columns', 'dpsg_rohrbach_event_add_date_column');
function dpsg_rohrbach_event_add_date_column($columns) {
    unset( $columns['date'] );
    $columns['eventdate'] =__('Datum','myplugindomain');
    return $columns;
}

//Add Content
add_action( 'manage_dpsg-event_posts_custom_column', 'dpsg_rohrbach_event_date_column_content', 10, 2 );
function dpsg_rohrbach_event_date_column_content( $column_name, $post_id ) {
    if ( 'eventdate' != $column_name )
        return;
    //Get number of slices from post meta
    $slices = get_post_meta($post_id, 'start_date', true);
    echo intval($slices);
}

//Make columns sortable
add_filter( 'manage_edit-dpsg-event_sortable_columns', 'dpsg_rohrbach_event_date_column_sortable' );
function dpsg_rohrbach_event_date_column_sortable( $columns ) {
    $columns['eventdate'] = 'eventdate';
 
    //To make a column 'un-sortable' remove it from the array
    //unset($columns['date']);
 
    return $columns;
}
//Set key to sort by
add_action( 'pre_get_posts', 'dpsg_rohrbach_event_date_sortable_query' );
function dpsg_rohrbach_event_date_sortable_query( $query ) {
    if( ! is_admin() )
        return;
 
    $orderby = $query->get( 'orderby');
 
    if( 'eventdate' == $orderby ) {
        $query->set('meta_key','start_date');
        $query->set('orderby','meta_value_num'); //Set meta_value if sort alphabetical instead of numerical
    }
}

//Set Initial Sort
add_action( 'pre_get_posts', 'dpsg_rohrbach_event_initial_sorting' );
function dpsg_rohrbach_event_initial_sorting( $query ) {
    if( ! is_admin() )
        return;
 
    $orderby = $query->get( 'orderby');
 
    if( '' == $orderby ) {
        $query->set('meta_key','start_date');
        $query->set('order','ASC');
        $query->set('orderby','meta_value_num'); //Set meta_value if sort alphabetical instead of numerical
    }
}
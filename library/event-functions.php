<?php
/*
add_filter( 'manage_dpsg_event_posts_columns', 'dpsg_rohrbach_set_custom_event_columns' ); //Add filter to register new columsn / deregister unused Columns
add_action( 'manage_dpsg_event_posts_custom_column' , 'dpsg_rohrbach_custom_event_column', 10, 2 ); //Add action do add content to new columns

function dpsg_rohrbach_set_custom_event_columns($columns) {
    unset( $columns['date'] );
    $columns['event_startdate'] = __( 'Datum', 'your_text_domain' );
    //$columns['publisher'] = __( 'Publisher', 'your_text_domain' );

    return $columns;
}*/

/** 
V2
*/
/*
//Register column
function event_date_column_register( $columns ) {
    $columns['eventdate'] = __( 'Datum', 'my-plugin' );

    return $columns;
}
add_filter( 'manage_dpsg_event_posts_columns', 'event_date_column_register' );


//Add Value for Column
function price_column_display( $column_name, $post_id ) {
    if ( 'eventdate' != $column_name )
        return;

    $price = get_post_meta($post_id, 'start_date', true);
    if ( !$price )
        $price = '<em>' . __( 'undefined', 'my-plugin' ) . '</em>';

    echo $price;
}
add_action( 'manage_dpsg_event_posts_custom_column', 'price_column_display', 10, 2 );

// Register the column as sortable
function price_column_register_sortable( $columns ) {
    $columns['eventdate'] = 'eventdate';

    return $columns;
}
add_filter( 'manage_edit-dpsg_event_sortable_columns', 'price_column_register_sortable' );


function eventdate_column_orderby( $vars ) {
    if ( isset( $vars['orderby'] ) && 'eventdate' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array(
            'meta_key' => 'start_date',
            'orderby' => 'meta_value_num'
        ) );
    }
 
    return $vars;
}
add_filter( 'request', 'eventdate_column_orderby' );

*/

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
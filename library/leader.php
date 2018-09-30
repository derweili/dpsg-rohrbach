<?php

add_action( 'init', 'dpsg_rohrbach_register_leader' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function dpsg_rohrbach_register_leader() {
	$labels = array(
		'name'               => _x( 'Leiter', 'post type general name', 'dpsg-rohrbach' ),
		'singular_name'      => _x( 'Leiter', 'post type singular name', 'dpsg-rohrbach' ),
		'menu_name'          => _x( 'Leiter', 'admin menu', 'dpsg-rohrbach' ),
		'name_admin_bar'     => _x( 'Leiter', 'add new on admin bar', 'dpsg-rohrbach' ),
		'add_new'            => _x( 'Erstellen', 'book', 'dpsg-rohrbach' ),
		'add_new_item'       => __( 'Leiter erstellen', 'dpsg-rohrbach' ),
		'new_item'           => __( 'Neuer Leiter', 'dpsg-rohrbach' ),
		'edit_item'          => __( 'Leiter bearbeiten', 'dpsg-rohrbach' ),
		'view_item'          => __( 'Leiter ansehen', 'dpsg-rohrbach' ),
		'all_items'          => __( 'Alle Leiter', 'dpsg-rohrbach' ),
		'search_items'       => __( 'Leiter druchsuchen', 'dpsg-rohrbach' ),
		'parent_item_colon'  => __( 'Übergeordneter Leiter', 'dpsg-rohrbach' ),
		'not_found'          => __( 'Keine Leiter gefunden', 'dpsg-rohrbach' ),
		'not_found_in_trash' => __( 'Keine Leiter im Papierkorb gefunden', 'dpsg-rohrbach' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Leiterrunde.', 'dpsg-rohrbach' ),
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'leiter' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail')
	);

	register_post_type( 'book', $args );
}

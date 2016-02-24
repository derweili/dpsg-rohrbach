<?php

/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function dpsg_rohrbach_register_event_posttype() {

	$labels = array(
		'name'                => __( 'Veranstaltungen', 'dpsg-rohrbach' ),
		'singular_name'       => __( 'Veranstaltung', 'dpsg-rohrbach' ),
		'add_new'             => _x( 'Veranstaltung hinzufügen', 'dpsg-rohrbach', 'dpsg-rohrbach' ),
		'add_new_item'        => __( 'Veranstaltung hinzufügen', 'dpsg-rohrbach' ),
		'edit_item'           => __( 'Veranstaltung bearbeiten', 'dpsg-rohrbach' ),
		'new_item'            => __( 'New Veranstaltung', 'dpsg-rohrbach' ),
		'view_item'           => __( 'Veranstaltung ansehen', 'dpsg-rohrbach' ),
		'search_items'        => __( 'Veranstaltungen suchen', 'dpsg-rohrbach' ),
		'not_found'           => __( 'Keine Veranstaltungen gefunden', 'dpsg-rohrbach' ),
		'not_found_in_trash'  => __( 'Keine Veranstaltungen im Papierkorb gefunden', 'dpsg-rohrbach' ),
		'parent_item_colon'   => __( 'Eltern Veranstaltung:', 'dpsg-rohrbach' ),
		'menu_name'           => __( 'Veranstaltungen', 'dpsg-rohrbach' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'thumbnail',
			'excerpt', 'revisions'
			)
	);

	register_post_type( 'dpsg-event', $args );
}

add_action( 'init', 'dpsg_rohrbach_register_event_posttype' );



/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function dpsg_rohrbach_register_event_type() {

	$labels = array(
		'name'					=> _x( 'Veranstaltungstypen', 'Taxonomy plural name', 'dpsg-rohrbach' ),
		'singular_name'			=> _x( 'Veranstaltungstyp', 'Taxonomy singular name', 'dpsg-rohrbach' ),
		'search_items'			=> __( 'Veranstaltungstyp suchen', 'dpsg-rohrbach' ),
		'popular_items'			=> __( 'Meistverwendete Veranstaltungstypen', 'dpsg-rohrbach' ),
		'all_items'				=> __( 'Alle Veranstaltungstypen', 'dpsg-rohrbach' ),
		'parent_item'			=> __( 'Übergeordneter Veranstaltungstyp', 'dpsg-rohrbach' ),
		'parent_item_colon'		=> __( 'Übergeordneter Veranstaltungstyp', 'dpsg-rohrbach' ),
		'edit_item'				=> __( 'Veranstaltungstyp bearbeiten', 'dpsg-rohrbach' ),
		'update_item'			=> __( 'Veranstaltungstyp aktualisieren', 'dpsg-rohrbach' ),
		'add_new_item'			=> __( 'Veranstaltungstyp hinzufügen', 'dpsg-rohrbach' ),
		'new_item_name'			=> __( 'Neuer Veranstaltungstyp Name', 'dpsg-rohrbach' ),
		'add_or_remove_items'	=> __( 'Veranstaltungstyp hinzufügen oder entfernen', 'dpsg-rohrbach' ),
		'choose_from_most_used'	=> __( 'Aus dem meistgenutzten Veranstaltungstypen wählen', 'dpsg-rohrbach' ),
		'menu_name'				=> __( 'Veranstaltungstyp', 'dpsg-rohrbach' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => false,
		'show_admin_column' => true,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'dpsg-event-type', array( 'dpsg-event' ), $args );
}

add_action( 'init', 'dpsg_rohrbach_register_event_type' );



/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function dpsg_rohrbach_register_event_group() {

	$labels = array(
		'name'					=> _x( 'Veranstaltungs Gruppen', 'Taxonomy plural name', 'dpsg-rohrbach' ),
		'singular_name'			=> _x( 'Veranstaltungsgruppe', 'Taxonomy singular name', 'dpsg-rohrbach' ),
		'search_items'			=> __( 'Gruppen durchsuchen', 'dpsg-rohrbach' ),
		'popular_items'			=> __( 'Meistverwendete Veranstaltungs Gruppen', 'dpsg-rohrbach' ),
		'all_items'				=> __( 'Alle Veranstaltungs Gruppen', 'dpsg-rohrbach' ),
		'parent_item'			=> __( 'Parent Veranstaltungsgruppe', 'dpsg-rohrbach' ),
		'parent_item_colon'		=> __( 'Parent Veranstaltungsgruppe', 'dpsg-rohrbach' ),
		'edit_item'				=> __( 'Veranstaltungsgruppe bearbeiten', 'dpsg-rohrbach' ),
		'update_item'			=> __( 'Update Veranstaltungsgruppe', 'dpsg-rohrbach' ),
		'add_new_item'			=> __( 'Gruppe hinzufügen', 'dpsg-rohrbach' ),
		'new_item_name'			=> __( 'Neuer Gruppen Name', 'dpsg-rohrbach' ),
		'add_or_remove_items'	=> __( 'Gruppe hinzufügen oder entfernen', 'dpsg-rohrbach' ),
		'choose_from_most_used'	=> __( 'Choose from most used dpsg-rohrbach', 'dpsg-rohrbach' ),
		'menu_name'				=> __( 'Veranstaltungsgruppe', 'dpsg-rohrbach' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'dpsg-event-group', array( 'dpsg-event' ), $args );
}

add_action( 'init', 'dpsg_rohrbach_register_event_group' );
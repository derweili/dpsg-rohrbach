<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

//Set WP Content Width
if( ! isset( $content_width ) ) $content_width = 1440;


/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );

require_once( 'library/metaheader.php' );

require_once( 'library/dpsg-cleanup.php' );


require_once( 'library/image-sizes.php' );

require_once( 'library/lazy-loading.php' );

require_once( 'library/amp.php' );

require_once( 'library/template-tags.php' );

require_once( 'library/register-algolia-template.php' );

require_once( 'library/custom-gallery.php' );

//Events
//require_once( 'library/register-events.php' );

//Events
//require_once( 'library/event-functions.php' );

add_editor_style( 'assets/stylesheets/foundation.css' );

?>

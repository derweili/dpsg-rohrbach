<?php

/**
Remove query strings from js and css files
*/
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?' ) )
        $src = remove_query_arg( 'ver', $src );

    if( strpos( $src, '?nf_ver=' ) )
        $src = remove_query_arg( 'nf_ver', $src );

    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

/**
Remove WP-Embed
*/
function block_wp_embed() {
    wp_deregister_script('wp-embed'); }
add_action('init', 'block_wp_embed');
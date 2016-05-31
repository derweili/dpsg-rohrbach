<?php

//Set AMP Logo
add_filter( 'amp_post_template_data', 'dpsg_rohrbach_amp_set_site_icon_url' );

function dpsg_rohrbach_amp_set_site_icon_url( $data ) {
    // Ideally a 32x32 image
    $data[ 'site_icon_url' ] = get_stylesheet_directory_uri() . '/assets/images/amp-site-icon.png';
    return $data;
}

//Style AMP Top Bar
add_action( 'amp_post_template_css', 'xyz_amp_additional_css_styles' );

function xyz_amp_additional_css_styles( $amp_template ) {
    // only CSS here please...
    ?>
    nav.amp-wp-title-bar {
        padding: 0 0;
        background: #003056;
        font-weight:bold;
    }
    /*nav.amp-wp-title-bar a {
        background-image: url( 'https://example.com/path/to/logo.png' );
        background-repeat: no-repeat;
        background-size: contain;
        display: block;
        height: 28px;
        width: 94px;
        margin: 0 auto;
        text-indent: -9999px;
    }*/
    <?php
}


//Set AMP featured image
add_action( 'pre_amp_render_post', 'xyz_amp_add_custom_actions' );
function xyz_amp_add_custom_actions() {
    add_filter( 'the_content', 'xyz_amp_add_featured_image', 1);
}

function xyz_amp_add_featured_image( $content ) {
    if ( has_post_thumbnail() ) {
        // Just add the raw <img /> tag; our sanitizer will take care of it later.
        $image = sprintf( '<p class="xyz-featured-image">%s</p>', get_the_post_thumbnail() );
        $content = $image . $content;
    }
    return $content;
}

//Remove author from amp meta
add_filter( 'amp_post_template_meta_parts', 'xyz_amp_remove_author_meta' );

function xyz_amp_remove_author_meta( $meta_parts ) {
    foreach ( array_keys( $meta_parts, 'meta-author', true ) as $key ) {
        unset( $meta_parts[ $key ] );
    }
    return $meta_parts;
}

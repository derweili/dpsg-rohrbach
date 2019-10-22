<?php

add_image_size('galleryfeature', 362, 222, true);



//Lazy Load
//function add_image_load( $content ) { if( is_feed() || is_preview() || ( function_exists( 'is_mobile' ) && is_mobile() ) ) return $content; if ( false !== strpos( $content, 'data-src' ) ) return $content; $placeholder_image = ('data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='); $content = preg_replace( '#<img([^>]+?)src=[\'"]?([^\'"\s>]+)[\'"]?([^>]*)>#', sprintf( '<img${1}src="%s" data-src="${2}"${3}><noscript><img${1}src="${2}"${3}></noscript>', $placeholder_image ), $content ); return $content; }  add_filter( 'the_content', 'add_image_load', 99 ); add_filter( 'post_thumbnail_html', 'add_image_load', 11 ); add_filter( 'get_avatar', 'add_image_load', 11 );


//add_action('foundationpress_before_closing_body', 'dpsg_rohrbach_lazy_loading_script');

function dpsg_rohrbach_lazy_loading_script(){
	?>
		<script>function init(){var imgDefer=document.getElementsByTagName('img');for(var i=0;i<imgDefer.length;i++){if(imgDefer[i].getAttribute('data-src')){imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));}}}window.onload=init;</script>
	<?php
}


add_filter( 'wp_calculate_image_srcset', '__return_false' );

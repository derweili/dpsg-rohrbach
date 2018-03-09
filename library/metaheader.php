<?php

register_nav_menus(array(
	'meta-nav'  => 'Meta Navigation',
));


if ( ! function_exists( 'dpsg_rohrbach_meta_nav' ) ) {
	function dpsg_rohrbach_meta_nav() {
		wp_nav_menu( array(
			'container'      => false,
			'menu_class'     => 'metanav',
			'items_wrap'     => '<ul id="%1$s" class="%2$s menu align-right" data-dropdown-menu>%3$s</ul>',
			'theme_location' => 'meta-nav',
			'depth'          => 1,
			'fallback_cb'    => false,
			//'walker'         => new Foundationpress_Top_Bar_Walker(),
		));
	}
};



add_action('foundationpress_layout_start', 'dpsg_rohrbach_metaheader');

function dpsg_rohrbach_metaheader() {
	?>

	<div class="row align-justify headersection hide-for-small-only">
		<div class="columns shrink">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dpsg.svg" title="DPSG Sinsheim Rohrbach - Startseite" alt="DPSG Logo" id="headerlogo" width="363" height="144"/>
			</a>
		</div>
		<div class="columns align-self-middle align-center">
			<?php get_search_form( true ); ?>
		</div>
		<div class="columns align-right shrink">
			<?php dpsg_rohrbach_meta_nav(); ?>
			<p style="" class="text-right float-right">
				Pfadfinderstamm Dom Helder Camara<br>
				Sinsheim – Rohrbach
				<?php //echo get_bloginfo( 'description' ) ?>
			</p>
		</div>
	</div>

	<?php
}

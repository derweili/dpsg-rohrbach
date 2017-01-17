<?php

if ( ! function_exists( 'dpsg_rohrbach_archivetitle' ) ) {
	function dpsg_rohrbach_archivetitle() {

		if ( is_search() ) {
			echo __( 'Suchergebnisse für', 'heilbronn-klimaschutz' ) . ': ' . get_search_query();
		}elseif ( is_category() ) {
			echo single_cat_title();
		}elseif ( is_month() ) {
			//echo single_month_title();
			the_archive_title();
		}elseif( is_year() ) {
			the_archive_title();
		}elseif( is_tag() ){
			the_archive_title();
		}else{
			echo 'Alle News';
		}

	}
}


if ( ! function_exists( 'dpsg_rohrbach_archive_description' ) ) {
	function dpsg_rohrbach_archive_description() {

		if ( is_search() ) {
			echo __( 'Suchergebnisse für', 'heilbronn-klimaschutz' ) . ': ' . get_search_query();
		}elseif ( is_category() ) {
			echo category_description();
		}elseif ( is_tag() ) {
			echo tag_description();
		}

	}
}

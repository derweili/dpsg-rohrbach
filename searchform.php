<?php
/**
 * The template for displaying search form
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

do_action( 'foundationpress_before_searchform' ); ?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

		<?php do_action( 'foundationpress_searchform_top' ); ?>

			<input type="search" value="" name="s" id="s" placeholder="<?php esc_attr_e( 'Was möchtest du finden?', 'foundationpress' ); ?>">

		<?php do_action( 'foundationpress_searchform_before_search_button' ); ?>

			<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'foundationpress' ); ?>" class="prefix button">

		<?php do_action( 'foundationpress_searchform_after_search_button' ); ?>

</form>
<?php do_action( 'foundationpress_after_searchform' ); ?>

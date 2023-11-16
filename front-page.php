<?php
/**
 * This template adds home page template to Astra Child theme
 *Template Name: Home
 *Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>


<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php function custom_body_class( $classes ) {
  
        $classes[] = 'home';
    
    return $classes;
}
add_filter( 'body_class', 'custom_body_class' ); ?>

<?php add_action( 'astra_entry_content_after', 'astra_child_custom_content' );

function asra_child_custom_content() {

}
?>
<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
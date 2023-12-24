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

function astra_child_custom_content() {
    while ( the_flexible_field('custom_fields') ) {
		get_template_part( 'flexible_content_sections/'. get_row_layout() );
        ?><hr><?php
	}
	/*Testimonials*/
	$count = 0;
		  $args = array(
		'post_type' => 'testimonials',
		'posts_per_page' => 3,
	); ?>
	<div class="testimonials-section">
		<div class="container-custom">
		<div id="testimonialscontrols" class="carousel slide my-4" data-ride="carousel" data-interval="8000" >
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#testimonialscontrols" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#testimonialscontrols" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#testimonialscontrols" data-bs-slide-to="2" aria-label="Slide 3"></button>
  		</div>
   		 <div class="carousel-inner">
			<?php $blogpost = new WP_Query($args);
			while($blogpost->have_posts()) {
				$count++;
			$blogpost->the_post();
				?>
			<div class="carousel-item <?php if($count == 1) { echo 'active'; } ?>" aria-label="Slide <?=$count;?> out of 3">
				<p><?php the_content(); ?></p>
				<h4 class="w-50 mx-auto mt-5" style="color:#67498f;"><?php the_title();  ?></h4>
			</div>
				<?php
				}
				?> 
			<button class="carousel-control-prev" type="button" data-bs-target="#testimonialscontrols" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</div>
		</div>
	</div>
   

<?php }
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
<?php
	/*Testimonials*/
	$count = 0;
		  $args = array(
		'post_type' => 'testimonials',
		'posts_per_page' => 3,
	); ?>
	<div class="testimonials-section">
		<h2>Kind words</h2>
		<div class="container-custom">
		<div id="testimonialscontrols" class="carousel slide" data-ride="carousel" data-interval="8000" >
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
				<div class="carousel-container-text">
					<?php the_content(); ?>
					<p class="testimonilas-title" ><?php the_title();  ?></p>
				</div>
			</div>
				<?php
				}
				?> 
			<button class="carousel-control-prev" type="button" data-bs-target="#testimonialscontrols" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#testimonialscontrols" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</div>
		</div>
	</div>
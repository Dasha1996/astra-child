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
					<svg style="margin: auto; transform: rotate(180deg);" xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
						<path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/>
					</svg>
					<?php the_content(); ?>
					<p class="testimonilas-title" ><strong><?php the_title();  ?></strong></p>
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
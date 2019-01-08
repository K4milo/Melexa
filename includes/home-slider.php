<?php

$args = array(
	'post_type' => 'home-slider',
	'posts_per_page' => -1
);

$query = new WP_Query($args);
?>
<div class="bx-slider home-slider">
	<?php
	if($query->have_posts()): 
		while($query->have_posts()): $query->the_post();
	?>

		<div class="slides">
			<?php the_post_thumbnail('full'); ?>
			<div class="slider-caption">
				<div class="mid-content">
					<h1 class="caption-title">70 años Fluke</h1>
					<h2 class="caption-description">
						<div class="todown">
							<a href="<?php echo types_render_field( "banner-cta", array("post_id"=>$post->ID, "output"=>"raw")); ?>">
								<span>Ver más</span>
							</a>
						</div>
					</h2>
				</div>
			</div>
		</div>
		
	<?php 
		endwhile; 
		endif; 
	?>
</div>
<?php
	wp_reset_query(); 

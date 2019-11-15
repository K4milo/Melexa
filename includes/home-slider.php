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
			$var_link = types_render_field( "banner-cta", array("post_id"=>$post->ID, "output"=>"raw"));

	?>
	<div class="slides">
		<a href="<?php echo $var_link; ?>">
		<?php the_post_thumbnail('full'); ?>
		</a>
		<?php /*
		<div class="slider-caption">
			<div class="mid-content">
				<h1 class="caption-title"></h1>
				<h2 class="caption-description">
					<div class="todown">
						<?php
							$var_link = types_render_field( "banner-cta", array("post_id"=>$post->ID, "output"=>"raw"));
							if ($var_link != ""): ?>
								<a href="<?php echo $var_link; ?>">
									<span>Ver más</span>
								</a>
						<?php endif ?>
					</div>
				</h2>
			</div>
		</div>
		*/ ?>
	</div>
	<?php 

		endwhile; 

		endif; 

	?>

</div>

<?php

	wp_reset_query(); 


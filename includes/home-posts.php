<?php



$args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'category_name' => 'destacado'
);



$query = new WP_Query($args);

?>

<section class="home-posts container">
	<header>
		<h2>Últimos Posts</h2>
	</header>
	<div class="home-posts__wrapper">
		<?php

		if($query->have_posts()): 

			while($query->have_posts()): $query->the_post();
				$var_link = types_render_field( "banner-cta", array("post_id"=>$post->ID, "output"=>"raw"));

		?>
			<article class="home-posts__item">
				<figure>
					<a href="<?php the_permalink()?>">
						<?php the_post_thumbnail('medium'); ?>
					</a>
				</figure>
				<div class="description">
					<a href="<?php the_permalink()?>">
						<h3><?php the_title(); ?></h3>
					</a>
					<?php the_excerpt(); ?>
				</div>
			</article>
		<?php 

			endwhile; 
			endif; 

		?>
	</div>

</section>

<?php

	wp_reset_query(); 

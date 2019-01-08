<?php
/**
 * Template Name: Page tres
 *
 * @package accesspress_parallax
 */


get_header(); ?>

<?php 
if(of_get_option('enable_parallax') == 1 && is_front_page() && get_option( 'show_on_front' ) == 'page'){
	get_template_part('index','parallax');
}else{
?>




<?php  
	            $query = new WP_Query( 'page_id='.$post->ID );
	            while ( $query->have_posts() ) : $query->the_post();
	        ?>

				
					<h1><span><?php the_title(); ?></span></h1>

					<div class="parallax-content">
					<?php if(get_the_content() != "") : ?>
						<div class="page-content">
						<?php the_content(); ?>
						</div>
					<?php endif; ?>
					</div> 
			<?php 
		        endwhile;    
	        ?>
	        <?php include(locate_template($template."-section.php"));?>


<?php } ?>

<?php get_footer(); ?>


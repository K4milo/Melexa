<?php
/**
 * Template Name: Page dos
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
// Ruta de la imagen destacada (tamaño completo)
global $post;
$thumbID = get_post_thumbnail_id( $post->ID );
$imgDestacada = wp_get_attachment_url( $thumbID );
?>



<?php 
			global $page;
			if(of_get_option('enable_parallax') == 0 || is_singular()): ?>

				<?php while ( have_posts() ) : the_post(); ?>

<section class="page-dos" style="
    background-image: url(<?php echo $imgDestacada;?>);
    background-size: cover;
    min-height: 500px;
">
				<?php the_content(); ?>
</section>
			<?php endwhile; // end of the loop. ?>
			<?php else:

 			echo wpautop($page->post_content); 
			
			endif; ?>

<?php } ?>

<?php get_footer(); ?>


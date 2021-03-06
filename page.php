<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package accesspress_parallax
 */


get_header(); ?>
<style type="text/css">


body{
    background: #fff;
}
</style>

<?php 
if(of_get_option('enable_parallax') == 1 && is_front_page() && get_option( 'show_on_front' ) == 'page'){
	get_template_part('index','parallax');
}else{
?>

<div class="mid-content clearfix">
	<div id="primary" class="content-area primary2">
		<main id="main" class="site-main" role="main">

			<?php 
			global $page;
			if(of_get_option('enable_parallax') == 0 || is_singular()): ?>

				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
			<?php else:

 			echo wpautop($page->post_content); 
			
			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


</div>
<?php } ?>

<?php get_footer(); ?>


<?php
/**
 * The template for displaying all single posts.
 *
 * @package accesspress_parallax
 */

get_header(); ?>
<?php
foreach((get_the_category()) as $category)
?>

<?php if ($category->cat_ID == 20){  ?>

<section class="page-dos postcursos" style="
    background-image: url();
    background-size: cover;
    min-height: 500px;
">
	<section id="part1" style="
    margin-bottom: 0px!important;
     background-image: url(<?php echo get_post_meta(2973, 'wpcf-cursos-presenciales', true); ?>)!important;
">
	<div class="text-part1">
	<h3>Capacitaciones y eventos</h3>
	</div>
	<div class="senor"></div>
	<div class="divicionb"></div>
	</section>
	<section id="part2">
		<!-- mid content -->
		<div class="mid-content clearfix">
	<div class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'curso' ); ?>

			<?php 
			$post_pagination = of_get_option('post_pagination');
			if( $post_pagination == 1 || !isset($post_pagination)) :
			accesspress_parallax_post_nav(); 
			endif;
			?>

			

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
	<!-- mid content -->
	</section>
</section>
<?php } elseif($category->cat_ID == 21) { ?>
<section class="page-dos postcursos" style="
    background-image: url();
    background-size: cover;
    min-height: 500px;
">
	<section id="part1"style="
    margin-bottom: 0px!important;
     background-image: url(<?php echo get_post_meta(2973, 'wpcf-cursos-virtuales', true); ?>)!important;
">
	<div class="text-part1">
	<h3>Capacitaciones y eventos</h3>
	</div>
	<div class="senor"></div>
	<div class="divicionb"></div>
	</section>
	<section id="part2">
		<!-- mid content -->
		<div class="mid-content clearfix">
	<div class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'curso' ); ?>

			<?php 
			$post_pagination = of_get_option('post_pagination');
			if( $post_pagination == 1 || !isset($post_pagination)) :
			accesspress_parallax_post_nav(); 
			endif;
			?>

			

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
	<!-- mid content -->
	</section>
</section>
<?php } elseif($category->cat_ID == 23) { ?>
<section class="page-dos postcursos promocionesPost" style="
    background-image: url();
    background-size: cover;
    min-height: 500px;
">
	<section id="part1"style="
    margin-bottom: 0px!important;
     background-image: url(<?php echo get_post_meta(2973, 'wpcf-promociones', true); ?>)!important;
">
	<div class="text-part1">
	<h3>Promociones</h3>
	</div>
	<div class="senor"></div>
	<div class="divicionb"></div>
	</section>
	<section id="part2">
		<!-- mid content -->
		<div class="mid-content clearfix">
	<div class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'promo' ); ?>

			<?php 
			$post_pagination = of_get_option('post_pagination');
			if( $post_pagination == 1 || !isset($post_pagination)) :
			accesspress_parallax_post_nav(); 
			endif;
			?>

			

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
	<!-- mid content -->
	</section>
</section>
<?php } elseif($category->cat_ID == 22) { ?>
<section class="page-dos postcursos promocionesPost" style="
    background-image: url();
    background-size: cover;
    min-height: 500px;
">
	<section id="part1">
	<div class="text-part1">
	<h3>Eventos realizados</h3>
	</div>
	<div class="senor"></div>
	<div class="divicionb"></div>
	</section>
	<section id="part2">
		<!-- mid content -->
		<div class="mid-content clearfix">
	<div class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'promo' ); ?>

			<?php 
			$post_pagination = of_get_option('post_pagination');
			if( $post_pagination == 1 || !isset($post_pagination)) :
			accesspress_parallax_post_nav(); 
			endif;
			?>

			

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
	<!-- mid content -->
	</section>
</section>
<?php } elseif($category->cat_ID == 24) { ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'blog-header' ); ?>
<section class="page-dos postcursos promocionesPost postblog" style="
    background-image: url();
    background-size: cover;
    min-height: 500px;
">
	<section id="part1" style="
		   /*background-image: url(<?php echo $image[0]; ?>); */
		   background-image: url(<?php echo get_post_meta(2973, 'wpcf-blog', true); ?>)!important;
    		background-size: cover;
    		background-position: 50%;
    		min-height: 487px;
    		margin-top: -20px;
    		position: relative;
    		width: 100%;
    		margin-bottom: -35px!important;">
    		<div class="text-part1">
	<h3>Blog</h3>
	</div>
	<div class="title-blog">
	<h3><?php the_title(); ?></h3>
	</div>
	
	</section>
	
	<section id="part2">
		<!-- mid content -->
		<div class="mid-content clearfix">
	<div class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'blog' ); ?>

			<?php 
			$post_pagination = of_get_option('post_pagination');
			if( $post_pagination == 1 || !isset($post_pagination)) :
			accesspress_parallax_post_nav(); 
			endif;
			?>

			

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
	<!-- mid content -->
	</section>
</section>
<?php } else { ?>
<div class="mid-content clearfix">
	<div id="primary" class="content-area primary2">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php 
			$post_pagination = of_get_option('post_pagination');
			if( $post_pagination == 1 || !isset($post_pagination)) :
			accesspress_parallax_post_nav(); 
			endif;
			?>

			

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->



</div>
<!-- mid content -->
<?php } ?>

<?php get_footer(); ?>
	<script type="text/javascript">
var curso =jQuery('.entry-title').text();
jQuery('#cursopag input').val(curso);
	</script>
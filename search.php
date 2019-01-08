<?php
/**
 * The template for displaying search results pages.
 *
 * @package accesspress_parallax
 */

get_header(); ?>
<style type="text/css">


body{
    background: #fff;
}
article .product_meta{
	display: block!important;
}
span.categoriasp {
    font-size: 11px;
    line-height: 10px!important;
}
.posted-on {
    position: absolute;
    left: 20px;
    top: 19px;
}
</style>
<div class="mid-content">
	<section id="primary2" class="content-area primary2 searchsection">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Resultados de busqueda para: %s', 'accesspress-parallax' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php accesspress_parallax_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->


</div>
<?php get_footer(); ?>

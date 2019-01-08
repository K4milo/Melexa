<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package accesspress_parallax
 */

get_header(); ?>
<style type="text/css">


body{
    background: #fff;
}
</style>
<div class="mid-content">
	<div id="primary" class="content-area primary2">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! Pagina no encontrada.', 'accesspress-parallax' ); ?></h1>
				</header><!-- .page-header -->

				
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>

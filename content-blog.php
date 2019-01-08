<?php
/**
 * @package accesspress_parallax
 */
?>
<?php 
$post_date = of_get_option('post_date');
$post_footer = of_get_option('post_footer');
$post_date_class = ((!empty($post_date) && $post_date == ' ') || has_post_thumbnail()) ? " no-date" : "";
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--<header class="entry-header">
		<div class="titulo-post">
		<h1 class="entry-title<?php echo $post_date_class; ?> title-verde"><?php the_title(); ?></h1>
		</div>
	</header>--><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<hr>
		<?php
echo do_shortcode('[su_carousel source="category: 24" link="post" width="400" items="5" mousewheel="no" class="carruselEventos"]');
?>
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'accesspress-parallax' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if( $post_footer == 1 ) : ?>
	<footer class="entry-footer">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'accesspress-parallax' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'accesspress-parallax' ) );


			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>
	</footer><!-- .entry-footer -->
<?php endif; ?>
<?php edit_post_link( __( 'Edit', 'accesspress-parallax' ), '<span class="edit-link">', '</span>' ); ?>
</article><!-- #post-## -->

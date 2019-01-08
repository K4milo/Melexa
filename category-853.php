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

<div class="mid-content clearfix">
	<div id="primary2" class="content-area">
		<main id="main" class="site-main" role="main">


<?php if ( is_category() ) : ?>
<h2 id="category-name-header">
<?php echo $cache_categories[$cat]->cat_name ?> Categoría</h2>
<?php add_filter('category_description', 'wpautop'); ?>
<?php add_filter('category_description', 'wptexturize'); ?>
<div id="category-description">
<?php echo category_description(); ?>
</div>
<?php endif; ?>
<?php echo $category->cat_ID ?>
<ul>
    <?php wp_list_categories( array(
        'orderby'            => 'id',
        'show_count'         => true,
        'use_desc_for_title' => false,
        'hide_empty'		 => false,
        'title_li'			=> false,
        'child_of'           => 853
    ) ); ?>
</ul>


<?php

  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );
 foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {
        $category_id = $cat->term_id;       
        echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';

        $args2 = array(
                'taxonomy'     => $taxonomy,
                'child_of'     => 0,
                'parent'       => $category_id,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty
        );
        $sub_cats = get_categories( $args2 );
        if($sub_cats) {
            foreach($sub_cats as $sub_category) {
                echo  $sub_category->name ;
            }   
        }
    }       
}
?>







		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php 
			$post_pagination = of_get_option('post_pagination');
			if( $post_pagination == 1 || !isset($post_pagination)) :
			accesspress_parallax_post_nav(); 
			endif;
			?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


</div>
<?php get_footer(); ?>
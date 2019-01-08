<?php

/**

 * The Template for displaying product archives, including the main shop page which is a post type archive

 *

 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.

 *

 * HOWEVER, on occasion WooCommerce will need to update template files and you

 * (the theme developer) will need to copy the new files to your theme to

 * maintain compatibility. We try to do this as little as possible, but it does

 * happen. When this occurs the version of the template file will be bumped and

 * the readme will list any important changes.

 *

 * @see 	    https://docs.woocommerce.com/document/template-structure/

 * @author 		WooThemes

 * @package 	WooCommerce/Templates

 * @version     2.0.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly

}



get_header( 'shop' ); ?>





<?php

$parentid = get_queried_object_id();

$uno = get_ancestors( $parentid, 'category' );

$padre = $uno[0]; 

if ($parentid == 100) { ?>



<section class="page-dos postcursos" style="

    background-image: url();

    background-color: #fff;

    background-size: cover;

    min-height: 500px;

">

	<section id="part1" style="

    margin-bottom: 0px!important;

     background-image: url(<?php echo get_post_meta(2973, 'wpcf-categorias-home', true); ?>)!important;

">

	<div class="text-part1">

	<h3><?php  if (is_product_category()) { $current_category = single_cat_title("", false); echo $current_category; } ?></h3>

	</div>

	<div class="divicionb"></div>

	</section>

	<?php

		/**

		 * woocommerce_before_main_content hook.

		 *

		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)

		 * @hooked woocommerce_breadcrumb - 20

		 */

		do_action( 'woocommerce_before_main_content' );

	?>



		<?php

			/**

			 * woocommerce_archive_description hook.

			 *

			 * @hooked woocommerce_taxonomy_archive_description - 10

			 * @hooked woocommerce_product_archive_description - 10

			 */

			echo '<div class="header_categoria">';



			add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );

			function woocommerce_category_image() {

			    if ( is_product_category() ){

				    global $wp_query;

				    $cat = $wp_query->get_queried_object();

				    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );

				    $image = wp_get_attachment_url( $thumbnail_id );

				    if ( $image ) {

					    echo '<div class="col-de40"><img src="' . $image . '" alt="" /></div>';

					}

				}

			}



			add_action( 'woocommerce_archive_description', 'nombre_category', 3 );

			function nombre_category() {

			    if (is_product_category()) { $current_category = single_cat_title("", false); echo '<h3>'.$current_category.'</h3>'; }

			}



			do_action( 'woocommerce_archive_description' );

			echo '</div>';

		?>





<?php 



$parentid = get_queried_object_id();

         

$args = array(

    'parent' => $parentid

);



$terms = get_terms( 'product_cat', $args );

 

if ( $terms ) {

         

    echo '<div id="categoriasProductos" class="product-cats">';

     

        foreach ( $terms as $term ) {

              echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';           

            echo '<div class="category"><div class="imgcategoriaproducto">';                 

                     

                woocommerce_subcategory_thumbnail( $term );

                 

                echo '</div><div class="titlecategoria"><h2>';

                    

                        echo $term->name;

                    

                echo '</h2></div>';                                                

           		echo '</div>';

                echo '</a>';                                                        

 

    }

     

    echo '</div>';

 

}

?>



		<?php if ( have_posts() ) : ?>







			<?php woocommerce_product_loop_start(); ?>



				



				<?php while ( have_posts() ) : the_post(); ?>

					

					 

					 <?php wc_get_template_part( 'content', 'product' ); ?>

					



					



				<?php endwhile; // end of the loop. ?>



			<?php woocommerce_product_loop_end(); ?>



			



			<?php

				/**

				 * woocommerce_after_shop_loop hook.

				 *

				 * @hooked woocommerce_pagination - 10

				 */

				do_action( 'woocommerce_after_shop_loop' );

			?>

            

	<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>



			<?php wc_get_template( 'loop/no-products-found.php' ); ?>



	<?php endif; ?>



	<?php

		/**

		 * woocommerce_after_main_content hook.

		 *

		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)

		 */

		do_action( 'woocommerce_after_main_content' );

	?>



	<?php

		/**

		 * woocommerce_sidebar hook.

		 *

		 * @hooked woocommerce_get_sidebar - 10

		 */

		do_action( 'woocommerce_sidebar' );

	?>

</section>

<?php  } elseif ($parentid == 890) /* elsefluke */ { ?>



 <?php 

   if ( is_product_category() ){

			    global $wp_query;

			    $cat = $wp_query->get_queried_object();

			    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );

			    $imagecat = wp_get_attachment_url( $thumbnail_id );

			    

			}

    ?>



<section class="page-dos postcursos subcategoriaw flukeCat">



<?php/*   echo do_shortcode('[su_post field="post_content" post_id="2207"]'); */ ?>
<!-- IMAGE HOME DE FLUKE -->
	<section id="part1" style="

    background-image: url(<?php echo get_post_meta(2973, 'wpcf-fluke-home', true); ?>)!important;

    background-size: 100%!important;

    background-position: top!important;

    min-height: 500px!important;">

		<div class="text-part1 logfluke-line">

			<img class="logfluke" src="http://melexa.kol3.com/wp-content/uploads/2016/08/fluke.png">

			<!-- <h3><?php  if (is_product_category()) { $current_category = single_cat_title("", false); echo $current_category; } ?></h3>-->

		</div>

		<div class="divicionb"></div>

	</section>

	<section id="part2">





		<!-- mid content -->

	<div class="mid-content clearfix">

	<div class="content-area">

		<main id="main" class="site-main" role="main">

			<div class="flechas"></div>

			<?php

			/**

			 * woocommerce_before_main_content hook.

			 *

			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)

			 * @hooked woocommerce_breadcrumb - 20

			 */

				do_action( 'woocommerce_before_main_content' );

			?>

			<div class="col-4">



				<div class="title-fluke"> <h3><?php  if (is_product_category()) { $current_category = single_cat_title("", false); echo $current_category; } ?></h3></div>

				<?php

					/**

					 * woocommerce_archive_description hook.

					 *

					 * @hooked woocommerce_taxonomy_archive_description - 10

					 * @hooked woocommerce_product_archive_description - 10

					 */

					echo '<div class="header_categoria_fluke">';



					//add_action( 'woocommerce_archive_description', 'nombre_category', 3 );

					function nombre_category() {

					    if (is_product_category()) { $current_category = single_cat_title("", false); echo '<h3>'.$current_category.'</h3>'; }

					}



					do_action( 'woocommerce_archive_description' );

					echo '</div>';

				?>



			</div>

			<div class="col-8">

				



				<?php 

					$parentid = get_queried_object_id();    

					$args = array(

					    'parent' => $parentid

					);

					$terms = get_terms( 'product_cat', $args );

					if ( $terms ) {

					    echo '<div id="categoriasProductos" class="product-cats">';

					     

					        foreach ( $terms as $term ) {

					                    

					            	echo '<div class="categoryfluke">';  

					            	 echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">'; 

					            	 echo '</a>';    

					            		echo '<div class="imgcategoriaproducto">';               

					                     	woocommerce_subcategory_thumbnail( $term );

					                 	echo '</div>';

					                echo '<div class="titlecategoria">';

					                	echo '<h2>';

					                    	echo $term->name;

					                	echo '</h2>';

					                	 echo '<div class="descripcionlistcategorias">';

							                 if (category_description($term ) ) : 

											echo category_description($term ); 

										 	endif;

					              		echo '</div>'; 

					                echo '</div>';	

					              	                                        

					            echo '</div>';

					            

					                                                                     

					 

					    }

					    echo '</div>';

					}

				?>

			</div>	



			<?php if ( have_posts() ) : ?>

		

			<?php

				/**

				 * woocommerce_after_shop_loop hook.

				 *

				 * @hooked woocommerce_pagination - 10

				 */

				do_action( 'woocommerce_after_shop_loop' );

			?>

            

			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

					<?php wc_get_template( 'loop/no-products-found.php' ); ?>

			<?php endif; ?>



			<?php

				/**

				 * woocommerce_after_main_content hook.

				 *

				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)

				 */

				do_action( 'woocommerce_after_main_content' );

			?>

		</main><!-- #main -->

	</div><!-- #content-area -->

	</div>

	<!-- mid content -->

	</section>

</section>



<?php  } elseif ($padre == 890)/* elsepadre*/ { ?>



 <?php 

   if ( is_product_category() ){

			    global $wp_query;

			    $catfluke = $wp_query->get_queried_object();

			    $thumbnail_id = get_woocommerce_term_meta( 890, 'thumbnail_id', true );

			    $imagecatfluke = wp_get_attachment_url( $thumbnail_id );

			    

			}

    ?>



<section class="page-dos postcursos subcategoriaw flukeCat hijofluke" style="

    background-image: url();

    background-size: cover;

    min-height: 500px;">


<!-- Inside Producto -->
	<section id="part1" style="

    background-image: url(<?php echo get_post_meta(2973, 'wpcf-fluke-interna', true); ?>)!important;

    background-size: 100%!important;

    background-position: top!important;

    min-height: 500px!important;">

		<div class="text-part1 logfluke-line dos">

			<img class="logfluke" src="http://melexa.kol3.com/wp-content/uploads/2016/08/fluke.png">

			<!-- <h3><?php  if (is_product_category()) { $current_category = single_cat_title("", false); echo $current_category; } ?></h3>-->

		</div>

		<div class="divicionb"></div>

	</section>

	<section id="part2">





		<!-- mid content -->

	<div class="mid-content clearfix">

	<div class="content-area">

		<main id="main" class="site-main" role="main">

			<?php

			/**

			 * woocommerce_before_main_content hook.

			 *

			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)

			 * @hooked woocommerce_breadcrumb - 20

			 */

				do_action( 'woocommerce_before_main_content' );

			?>

			<div class="col-4">



				<div class="title-fluke"> <h3><?php  if (is_product_category()) { $current_category = single_cat_title("", false); echo $current_category; } ?></h3></div>

				<?php

					/**

					 * woocommerce_archive_description hook.

					 *

					 * @hooked woocommerce_taxonomy_archive_description - 10

					 * @hooked woocommerce_product_archive_description - 10

					 */

					echo '<div class="header_categoria_fluke">';



					//add_action( 'woocommerce_archive_description', 'nombre_category', 3 );

					function nombre_category() {

					    if (is_product_category()) { $current_category = single_cat_title("", false); echo '<h3>'.$current_category.'</h3>'; }

					}



					do_action( 'woocommerce_archive_description' );

					echo '</div>';

				?>



			</div>

			<div class="col-8">

			



				<?php 

					$parentid = get_queried_object_id();    

					$args = array(

					    'parent' => $parentid

					);

					$terms = get_terms( 'product_cat', $args );

					if ( $terms ) {

					    echo '<div id="categoriasProductos" class="product-cats">';

					     

					        foreach ( $terms as $term ) {

					              echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';           

					            	echo '<div class="category">';  

					            		echo '<div class="imgcategoriaproducto">';               

					                     	woocommerce_subcategory_thumbnail( $term );

					                 	echo '</div>';

					                echo '<div class="titlecategoria">';

					                	echo '<h2>';

					                    	echo $term->name;

					                	echo '</h2>';

					                	 echo '<div class="descripcionlistcategorias">';

							                 if (category_description($term ) ) : 

											echo category_description($term ); 

										 	endif;

					              		echo '</div>'; 

					                echo '</div>';	

					                                                       

					            echo '</div>';

					            echo '</a>';

					                                                                     

					 

					    }

					    echo '</div>';

					}

				?>



				<?php if ( have_posts() ) : ?>

			<div class="productosfluke">

				<?php while ( have_posts() ) : the_post(); ?>

					 <?php wc_get_template_part( 'content', 'productfluke' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div>

			<?php

				/**

				 * woocommerce_after_shop_loop hook.

				 *

				 * @hooked woocommerce_pagination - 10

				 */

				do_action( 'woocommerce_after_shop_loop' );

			?>

            

			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

					<?php wc_get_template( 'loop/no-products-found.php' ); ?>

			<?php endif; ?>



			<?php

				/**

				 * woocommerce_after_main_content hook.

				 *

				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)

				 */

				do_action( 'woocommerce_after_main_content' );

			?>

			</div>	



			

		</main><!-- #main -->

	</div><!-- #content-area -->

	</div>

	<!-- mid content -->

	</section>

</section>



<?php  } else /* elsenormal*/ { ?>



<section class="page-dos postcursos subcategoriaw" style="

    background-image: url();

    background-size: cover;

    min-height: 500px;">



	<section id="part1" style="

    background-image: url(<?php echo get_post_meta(2973, 'wpcf-categorias-interna', true); ?>) !important;

    background-size: cover;">

		<div class="text-part1">

			<h3><?php  if (is_product_category()) { $current_category = single_cat_title("", false); echo $current_category; } ?></h3>

		</div>

		<div class="divicionb"></div>

	</section>

	<section id="part2">





		<!-- mid content -->

	<div class="mid-content clearfix">

	<div class="content-area">

		<main id="main" class="site-main" role="main">

			<?php

			/**

			 * woocommerce_before_main_content hook.

			 *

			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)

			 * @hooked woocommerce_breadcrumb - 20

			 */

				do_action( 'woocommerce_before_main_content' );

			?>

			<div class="col-4 cav">





				<div class="menudecategorias">

				<?php echo do_shortcode('[widget id="nav_menu-6"]'); ?>

				</div>

			</div>

			<div class="col-8 cav">

				

				<?php

					/**

					 * woocommerce_archive_description hook.

					 *

					 * @hooked woocommerce_taxonomy_archive_description - 10

					 * @hooked woocommerce_product_archive_description - 10

					 */

					echo '<div class="header_categoria">';



					add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );

					function woocommerce_category_image() {

					    if ( is_product_category() ){

						    global $wp_query;

						    $cat = $wp_query->get_queried_object();

						    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );

						    $image = wp_get_attachment_url( $thumbnail_id );

						    if ( $image ) {

							    echo '<div class="col-de40 imagencategoriaactual"><img src="' . $image . '" alt="" /></div>';

							}

						}

					}



					//add_action( 'woocommerce_archive_description', 'nombre_category', 3 );

					function nombre_category() {

					    if (is_product_category()) { $current_category = single_cat_title("", false); echo '<h3>'.$current_category.'</h3>'; }

					}



					do_action( 'woocommerce_archive_description' );

					echo '</div>';

				?>





				<?php 

					$parentid = get_queried_object_id();    

					$args = array(

					    'parent' => $parentid,

					    'show_count' => 1

					);

					$terms = get_terms( 'product_cat', $args );

					if ( $terms ) {

					    echo '<div id="categoriasProductos" class="product-cats">';

					     

					        foreach ( $terms as $term ) {



					        	$term_id = $term->term_id; // use get_queried_object()->term_id; to get the current term id

								$taxonomy_name = $term->taxonomy; // use use get_queried_object()->taxonomy; to get the current taxonomy name

								$countchildren = count (get_term_children( $term_id, $taxonomy_name ));

								

					                        

					            	echo '<div class="category">';  

					            		echo '<div class="imgcategoriaproducto">';               

					                     	woocommerce_subcategory_thumbnail( $term );

					                 	echo '</div>';

					                echo '<div class="titlecategoria">';

					                	echo '<h2>';

					                    	echo $term->name;

					                	echo '</h2>';

					                	 echo '<div class="descripcionlistcategorias">';

							                 if (category_description($term ) ) : 

											echo category_description($term ); 

										 	endif;

					              		echo '</div>'; 

					              		if ($countchildren > 0){

					              		 echo '<div class="forboton"> ';

					              		 echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class=" btn btn-verde btn-s ' . $term->slug . '">'; 

							              echo 'Ver Más';   

							              echo '</a>';

					              		echo '</div>'; 

					              		}

					                echo '</div>';	

					                                                       

					            echo '</div>';

					            

					                                                                     

					 

					    }

					    echo '</div>';

					}

				?>

			</div>	



			<?php if ( have_posts() ) : ?>

			<?php woocommerce_product_loop_start(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					 <?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php

				/**

				 * woocommerce_after_shop_loop hook.

				 *

				 * @hooked woocommerce_pagination - 10

				 */

				do_action( 'woocommerce_after_shop_loop' );

			?>

            

			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

					<?php wc_get_template( 'loop/no-products-found.php' ); ?>

			<?php endif; ?>



			<?php

				/**

				 * woocommerce_after_main_content hook.

				 *

				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)

				 */

				do_action( 'woocommerce_after_main_content' );

			?>

		</main><!-- #main -->

	</div><!-- #content-area -->

	</div>

	<!-- mid content -->

	</section>

</section>



<?php  } /* fin-elsenormal */ ?>



<?php get_footer( 'shop' ); ?>


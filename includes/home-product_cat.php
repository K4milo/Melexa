<section class="parallax-section clearfix default_template" id="section-1502">
   <div class="mid-content">
      <div class="parallax-content">
         <div class="page-content">
            <div class="vc_row wpb_row vc_row-fluid">
               <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
                     <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element ">
                           <div class="wpb_wrapper">
                              <div id="su_carousel_5c04ec1bd2711" class="su-carousel carruselmarcas">
                                 <div class="su-carousel-slides">
                                    <?php

                                    $taxonomy     = 'product_cat';
                                    $orderby      = 'name';  
                                    $show_count   = 0;      // 1 for yes, 0 for no
                                    $pad_counts   = 0;      // 1 for yes, 0 for no
                                    $hierarchical = 1;      // 1 for yes, 0 for no  
                                    $title        = '';  
                                    $empty        = 0;
                                    $url = "";

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
                                          $url = get_term_link($cat->slug, 'product_cat');
                                          $name_cat = $cat->name;
                                          if($category_id == 100) {
                                       
                                    ?>
                                    <?php
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
                                             $thumbnail_id = get_woocommerce_term_meta( $sub_category->term_id, 'thumbnail_id', true );
                                             $image = wp_get_attachment_url( $thumbnail_id );
                                             $urlsub = get_term_link($sub_category->slug, 'product_cat');
                                             ?>
                                                <a class="boton_cat" style="background-image: url(<?php echo $image?>);" href="<?php echo $urlsub ?>" title="<?php echo  $sub_category->name ; ?>">
                                                <p class="texto"><?php echo  $sub_category->name; ?></p>
                                                </a>
                                             <?php
                                          }   
                                       } 

                                    ?>
                                    <?php
                                         }
                                       }
                                    }
                                    	wp_reset_query(); 
                                    ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>






            <div class="vc_row wpb_row vc_row-fluid">

               <div class="wpb_column vc_column_container vc_col-sm-12">

                  <div class="vc_column-inner ">

                     <div class="wpb_wrapper"></div>

                  </div>

               </div>

            </div>

         </div>

      </div>

      <div class="content-area">

      </div>

      <!-- #primary -->

   </div>

</section>
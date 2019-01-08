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

                                    $args = array(
                                    	'post_type' => 'partner',
                                    	'posts_per_page' => -1
                                    );

                                    $query = new WP_Query($args);


                                    if($query->have_posts()): 
                                    	while($query->have_posts()): $query->the_post();
                                    ?>
                                    <div xmlns="http://www.w3.org/1999/xhtml" class="su-carousel-slide swiper-slide-duplicate" style="width: 234px; height: 137px;">
                                    	<a href="<?php echo types_render_field( "redireccion", array("post_id"=>$post->ID, "output"=>"raw")); ?>" title="Siemon">
                                    		<?php the_post_thumbnail('full'); ?>
                                    	</a>
                                    </div>
                                    <?php 
                                    	endwhile; 
                                    	endif;
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
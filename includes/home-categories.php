<section class="parallax-section clearfix default_template" id="section-1483">
      
   <div class="mid-content">
      <h1><span>Mercados</span></h1>
      <div class="parallax-content">
         <div class="page-content">
            <div class="vc_row wpb_row vc_row-fluid">

               <?php

               $args = array(
                  'post_type' => 'linea-de-negocio',
                  'posts_per_page' => -1
               );

               $query = new WP_Query($args);


               if($query->have_posts()): 
                  while($query->have_posts()): $query->the_post();
               ?>
               <div class="wpb_column vc_column_container line-item vc_col-sm-3">
                  <div class="vc_column-inner ">
                     <div class="wpb_wrapper">
                        <div class="wpb_text_column wpb_content_element ">
                           <div class="wpb_wrapper">
                              <p><a href="<?php echo types_render_field( "redireccion", array("post_id"=>$post->ID, "output"=>"raw")); ?>"><?php the_post_thumbnail('full'); ?></a></p>
                           </div>
                        </div>
                     </div>
                  </div>
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
</section>
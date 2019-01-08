<section class="parallax-section clearfix default_template" id="section-1511">
	<div class="mid-content">
		<h1>
			<span>Productos destacados</span>
		</h1>
		<div class="parallax-content">
			<div class="page-content">
				<div class="vc_row wpb_row vc_row-fluid">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner ">
							<div class="wpb_wrapper">
								<div class="wpb_text_column wpb_content_element ">
									<div class="wpb_wrapper">
										<h2>Promociones y novedades</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="vc_row wpb_row vc_row-fluid destacados">
					<?php

					$args = array(
						'post_type' => 'promocion',
						'posts_per_page' => -1
					);

					$query = new WP_Query($args);


					if($query->have_posts()): 
						while($query->have_posts()): $query->the_post();
					?>
					<div class="destacado wpb_column vc_column_container vc_col-sm-3" style="float: left;">
						<div class="vc_column-inner ">
							<div class="wpb_wrapper">
								<div class="wpb_text_column wpb_content_element  vc_custom_1525309461859">
									<div class="wpb_wrapper">
										<h6 style="text-align: center;">Capacitaciones</h6>
									</div>
								</div>
								<div class="wpb_text_column wpb_content_element ">
									<div class="wpb_wrapper">
										<div class="cajaimg">
											<a href="<?php echo types_render_field( "redireccion", array("post_id"=>$post->ID, "output"=>"raw")); ?>">
												<?php the_post_thumbnail('full'); ?>
											</a>
										</div>
										<div class="cajatexto">
											<?php the_content(); ?>
										</div>
											
										<div class="cajalink">
											<a class="btn" href="<?php echo types_render_field( "redireccion", array("post_id"=>$post->ID, "output"=>"raw")); ?>">Ver más</a>
										</div>
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


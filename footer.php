<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package accesspress_parallax
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php if(is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) :?>
		<div class="top-footer footer-column-<?php echo accesspress_footer_count(); ?>">
			<div class="mid-content">
            <div class="top-footer-wrap clearfix">
				<?php if(is_active_sidebar('footer-1')): ?>
				<div class="footer-block">
					<?php dynamic_sidebar('footer-1'); ?>
				</div>
				<?php endif; ?>

				<?php if(is_active_sidebar('footer-2')): ?>
				<div class="footer-block">
					<?php dynamic_sidebar('footer-2'); ?>
				</div>
				<?php endif; ?>

				<?php if(is_active_sidebar('footer-3')): ?>
				<div class="footer-block">
					<?php dynamic_sidebar('footer-3'); ?>
				</div>
				<?php endif; ?>

				<?php if(is_active_sidebar('footer-4')): ?>
				<div class="footer-block">
					<?php dynamic_sidebar('footer-4'); ?>
				</div>
				<?php endif; ?> 
            </div>
			</div>
		</div>
		<?php endif; ?>
		
		<div class="bigfooter">
			<div class="row">
				<div id="menu1" class="cont_bigf">
					<div class="contenedor">
						<a href="http://melexa.com/"><img src="http://melexa.com/wp-content/uploads/2016/05/logo230.png"></a>
						<p>PBX: <a href="tel:+5715874400">(57 1) 587 4400</a></p>
						<p>Mejora la productividad de los clientes suministrando un completo portafolio de productos eléctricos acompañado de un servicio excepcional e innovador.</p>
						<?php
						wp_nav_menu( array( 
							'menu' 		=> 'inferior' , 
							'container'	=> false,
							'menu_id' 	=> 'menu_bigf1', 
							'menu_class'=> 'menu_bigf'
						));
						?>
					</div>
				</div>
				<div id="menu2" class="cont_bigf">
					<div class="contenedor">
						<h3>Menú</h3>
						<hr>
						<?php
						wp_nav_menu( array( 
							'menu' 		=> 'Footer 2' , 
							'container'	=> false,
							'menu_id' 	=> 'menu_bigf2', 
							'menu_class'=> 'menu_bigf'
						));
						?>
					</div>
				</div>
				<div id="menu3" class="cont_bigf">
					<div class="contenedor">
						<ul class="redes">
							<li>
								<a href="https://www.facebook.com/melexasas/" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook">
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/801181?trk=tyah&trkInfo=clickedVertical%3Acompany%2CentityType%3AentityHistoryName%2CclickedEntityId%3Acompany_801181%2Cidx%3A0"  target="_blank"  target="_blank">
									<img style="background: transparent" src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="Linkedin">
								</a>
							</li>
							<li>
								<a href="https://twitter.com/MelexaSAS" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter">
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UCOtSbTMAr0nDnAOA6rMsMWg" target="_blank">
									<img style="background: transparent" src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="Youtube">
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/melexasas/">
									<img style="background: transparent" src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagram">
								</a>
							</li>
						</ul>
						<a id="boton" href="http://intranet.melexa.com/extranet/portalClientes/index.pl">Portal Clientes</a><br>
						<a href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=1441"><img src="http://melexa.com/wp-content/uploads/2016/10/pse_footer3-horiz-01.png" alt="Botón PSE"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="mid-content clearfix">
				<div  class="copy-right">
					<span> &copy; <?php echo date('Y')."  </span>"; bloginfo('name'); ?>  <span></span>
				</div><!-- .copy-right -->
				<div class="site-info">
					
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<div id="go-top"><a href="#page"><i class="fa fa-angle-up"></i></a></div>

<?php wp_footer(); ?>
</body>
</html>

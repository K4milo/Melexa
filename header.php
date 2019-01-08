<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package accesspress_parallax
 */

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/favicon-melexa.png" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 9]>

	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>

<![endif]-->



<?php wp_head(); ?>

<link rel='stylesheet'  href='/kol3.css?ver=4.5.2' type='text/css' media='all' />

</head>



<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

	<header id="masthead" class="<?php echo of_get_option('header_layout'); ?>">

		<div class="mid-content clearfix">

		<div id="site-logo">

		<?php if ( get_header_image() ) : ?>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

			<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>">

		</a>

		<?php else:?>

			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

		<?php endif; ?>

		</div>



		<nav id="site-navigation" class="main-navigation">

		<div class="menu-toggle"><?php _e( 'Menu', 'accesspress-parallax' ); ?></div>

					

			<?php 

			$sections = of_get_option('parallax_section');

			if(of_get_option('enable_parallax') == 1 && of_get_option('enable_parallax_nav') == 1):

			?>

			<ul class="nav single-page-nav">

				<?php

				$home_text = of_get_option('home_text');

				if(of_get_option('show_slider')== "yes" && !empty($home_text)) : ?>

					<li class="current"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#main-slider"><?php echo esc_attr($home_text); ?></a></li>

				<?php endif;

				

				if(!empty($sections)):

				foreach ($sections as $single_sections): 

					if($single_sections['layout'] != "action_template" && $single_sections['layout'] != "blank_template" && $single_sections['layout'] != "googlemap_template" && !empty($single_sections['page'])) :

						if(function_exists('pll_get_post')){

							$title_id = pll_get_post($single_sections['page']);

							$title = empty($title_id) ? get_the_title($single_sections['page']) : get_the_title($title_id);

						}else{

							$title = get_the_title($single_sections['page']); 

						}	

						?>

						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#section-<?php echo $single_sections['page']; ?>"><?php echo $title; ?></a></li>

					<?php 

					endif;

				endforeach; 

				endif; ?>



			</ul>

			<ul>

				<li><li><i class="fa fa-search" aria-hidden="true"></i></li></li>

				</ul>

			<?php	

			else: 

				wp_nav_menu( array( 

				'theme_location' => 'primary' , 

				'container'      => false

				) );

			endif; ?>

		

		</nav><!-- #site-navigation -->

		<div id="sonepar">



			<div><a target="_blank" href="http://www.sonepar.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/sonep2.jpg"></a></div>

		</div>

		<div class="menMelexa"><h3>Especialistas en soluciones eléctricas integrales</h3> </div>

		<div class="ulbuscador">



			<div class="buscador">
			<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
			    <label>
			        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
			        <input type="search" class="search-field" id="search"
			            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
			            value="<?php echo get_search_query() ?>" name="s"
			            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
			    </label>
			    <input type="submit" class="search-submit"
			        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
			</form>
			


				<!--

			<form role="search" method="get" id="searchform" action="http://melexa.com/">
			<div>
			<input type="text" value="" name="s" id="s" />
			<input type="hidden" value="1" name="sentence" />
			<input type="hidden" value="page" name="post_type" />
			<input type="submit" id="searchsubmit" value="Buscar" />
			</div>
			</form>
		-->

			</div>

		</div>

		<div class="pbx">

			<span>PBX: (57 1) 587 4400</span>

			<div class="textwidget"><a href="#" class="iconRedes"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>

<a href="#" class="iconRedes"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>

<a href="#" class="iconRedes"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></div>

		</div>

		</div>

		





		<?php 

		if(of_get_option('show_social') == 1):

			do_action('accesspress_social');

		endif; ?>

	</header><!-- #masthead -->



	<?php 

	$accesspress_show_slider = of_get_option('show_slider') ;

	$content_class = "";

	if(empty($accesspress_show_slider) || $accesspress_show_slider == "no"):

		$content_class = "no-slider";

	endif;

	?>

	<div id="content" class="site-content <?php echo $content_class; ?>">

	<?php 

	if(is_home() || is_front_page()) :

		do_action('accesspress_bxslider'); 

	endif;

	?>


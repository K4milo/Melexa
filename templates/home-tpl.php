<?php



/*

  Template Name: Home Template

*/

 



get_header();



// hero banner

get_template_part('includes/home','slider'); 


/*
<section class="parallax-section clearfix default_template" style="background:#FFF">
	<h1><b>comunicado</b></h1>
	<div class="mid-content" style="padding: 20px; box-shadow: 0px 0px 11px -6px black; border-radius: 17px;">
		<a href="https://melexa.com/wp-content/uploads/2019/04/Comunicado-2019-REV-Final.pdf"><img src="<?php echo get_template_directory_uri();?>/images/noticia.jpg">
			<span style="position: absolute; border: solid 1px; padding: 7px; background: #c0c142; bottom: 20%; text-shadow: 0 0 2px #b5b63f; color: white; left: 5%;">Ver más</span>

		</a>
	</div>
</section>
*/

// Promociones

get_template_part('includes/home','promociones'); 



// Categorias

//get_template_part('includes/home','categories'); 

// Partners

get_template_part('includes/home','product_cat'); 

// Partners

get_template_part('includes/home','partners'); 

// Posts

get_template_part('includes/home','posts'); 

// Partners

get_template_part('includes/home','bottom'); 





get_footer();
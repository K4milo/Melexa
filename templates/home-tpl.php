<?php

/*
  Template Name: Home Template
*/
 

get_header();

// hero banner
get_template_part('includes/home','slider'); 

// Promociones
get_template_part('includes/home','promociones'); 

// Categorias
get_template_part('includes/home','categories'); 

// Partners
get_template_part('includes/home','partners'); 

// Partners
get_template_part('includes/home','bottom'); 


get_footer();
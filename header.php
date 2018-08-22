<?php
	// Template name: header.php
	// author: Mathenge Moses 
	// Description: the Main header to the theme MALAIKATHEME
		// displays everything in the <head> section up to <div xxx

	// source https://codex.wordpress.org/Designing_Headers
	// https://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29 
	// https://codex.wordpress.org/Designing_Headers

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" >
        <title> <?php wp_title(); ?> </title>
    
    <?php wp_head(); ?>
    </head>

    <body>
    	<main>
	    	<header>

	    		 <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">

		 		<h1>  <a href="<?php bloginfo('url');?>"> <?php bloginfo('name');?> </a> </h1>
		        
	            <div class="description">  
	                <h3> <?php bloginfo('description') ; ?> </h3> 
	            </div><!-- description -->


	            <?php wp_nav_menu(); ?>
	 		</header>
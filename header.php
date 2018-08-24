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
        <style type="text/css">


			header{
				background-color: orange;
				margin: 0;
				padding: 0;
				}

			#headerimg{
					background: url("<?php bloginfo('stylesheet_directory'); ?>/images/header.jpg");
					 background-repeat: no-repeat;
					  background-position: top; 
				min-height: 102px;	
			}
			h1{
				margin: 0;
				padding: 0;
				/*font-size: 54pt ;*/
			}
			h3{
				color: white;
				margin: 0;
				padding: 0;
				/*font-size:  ;*/
			}
			
        </style>
    
    <?php wp_head(); ?>
    </head>

    <body>
    	<main>	
	    	<header>
	    		 <div id="headerimg">
					<h1> <a href="<?php echo get_option('home'); ?>">
						 <?php bloginfo('name'); ?></a>
					</h1>

					<div class="description">
						<h3> <?php bloginfo('description'); ?> </h3>
					</div><!--description -->

				</div><!-- headerimg -->


	     		<?php wp_nav_menu(); ?> 
	 		</header>
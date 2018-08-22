<?php
// template name: index.php

get_header('header');





if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		
		the_title();
		the_content();
		the_category();
		//
	} // end while
} // end if


get_sidebar('primary');

get_sidebar('secondary');


// the loop


get_footer();
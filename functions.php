<?php

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<div class="title">',
		'after_title' => '</div>',
	));

	register_nav_menus( array(  
		'nav' => __( 'Top Navigation', $themename ),
	) );

?>
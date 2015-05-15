<?php

/*
Theme Name: Victoria Moiseenko's WordPress Demo
Author: Victoria Moiseenko 
Author URI: http://mykhabarovsk.com/
Description: This is my demo theme for the WEB170 WordPress class.
Version: 1.0
*/

//Register my menus
register_nav_menus(array(
'main-menu' => __( 'Main' ),
));
//

//register sidebar
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));
?>
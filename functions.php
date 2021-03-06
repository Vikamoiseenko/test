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

//Enable Feauture images and post thumbnails
add_theme_support('post-thumbnails');
//

//register sidebar
register_sidebar(array(
	'before_widget' => '<div>',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));

//create pege excerpts
add_post_type_support('page', 'excerpt');
//
//Get my title tag
function get_my_title_tag() {

	global $post; 
	
	if(is_front_page()) {//the front page
		bloginfo('description');
	}
	elseif (is_page() || is_single()) {//page and postings
		the_title(); //title of page posting
	}
	
	else {
		bloginfo('description'); 
	}
	if ($post->post_parent) { //if there is a parent
		echo ' | ';
		echo get_the_title($post->post_parent); 
		}
	echo ' | '; //separator with space
	bloginfo('name'); //site name
	echo ' | ';
	echo 'Seattle, WA';
	}

//thanks Mike for flexslider function. It's working, so cool)
function add_flexslider() {    
    $attachments = get_children(array('post_parent' => get_the_ID(), 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image','caption' => $attachment->post_excerpt, ));
    if ($attachments) {        
        echo '<div class="flexslider">';
        echo '<ul class="slides">';
    
        foreach ($attachments as $attachment_id => $attachment) {            
	     echo '<li>';
            echo wp_get_attachment_image($attachment_id, 'large');
            echo '<span class="flex-caption">';
            echo get_post_field('post_excerpt', $attachment->ID);
            echo '</span>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
    }
}
add_shortcode( 'flexslider', 'add_flexslider' );

?>
<?php

    add_theme_support ( 'post-thumbnails');
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'header widgets',
    		'id'   => 'header-widgets',
    		'description'   => 'These are widgets for the header.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		register_sidebar(array(
    		'name' => 'sidebar widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		register_sidebar(array(
    		'name' => 'sidebar widgets 2',
    		'id'   => 'sidebar-widgets-2',
    		'description'   => 'These are widgets for the 2nd sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		register_sidebar(array(
    		'name' => 'footer widget left',
    		'id'   => 'footer-widget-left',
    		'description'   => 'These are widgets for the left footer widget.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		register_sidebar(array(
    		'name' => 'footer widget center',
    		'id'   => 'footer-widget-center',
    		'description'   => 'These are widgets for the center footer widget.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		register_sidebar(array(
    		'name' => 'footer widget right',
    		'id'   => 'footer-widget-right',
    		'description'   => 'These are widgets for the right footer widget.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		register_sidebar(array(
    		'name' => 'footer widget full width',
    		'id'   => 'footer-widget-full-width',
    		'description'   => 'These are full width widgets for the footer.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
	
// navigation  system	
	if (function_exists('register_nav_menus')) {
		register_nav_menus(
			array(
				'main_nav' => 'Main Navigation Menu',
				'sub_nav' => 'Sub Navigation Menu',
				'footer_nav' => 'Footer Navigation Menu'
			)
		);
	}
	
/* limit of excerpts */
	function new_excerpt_length($length) {
	return 35; //lengthen or shorten this number in red
}
add_filter('excerpt_length', 'new_excerpt_length');

/* read more added to excerpt */
function new_excerpt_more($more) {
       global $post;
	return '<a class="small-text" href="'. get_permalink($post->ID) . '">&nbsp; more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>
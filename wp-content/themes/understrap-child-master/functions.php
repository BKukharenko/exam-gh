<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
	wp_enqueue_style( 'slick-styles', get_stylesheet_directory_uri() . '/libs/slick.css', array(), $the_theme->get( 'Version' ), false );
	wp_enqueue_style( 'slick-theme-styles', get_stylesheet_directory_uri() . '/libs/slick-theme.css', array(), $the_theme->get( 'Version' ), false );
	wp_enqueue_script( 'slick-scripts', get_stylesheet_directory_uri() . '/libs/slick.min.js', array(), $the_theme->get( 'Version' ), true );	wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD_Ko-c4FCuHQ5nhxc8_9b2W5NJjidjBBA', array(), '3', true);
	wp_enqueue_script('google-map-init', get_stylesheet_directory_uri() . '/js/google-maps.js', array('google-map', 'jquery'), '0.1', true);
	wp_enqueue_style( 'jquery-ui-styles', get_stylesheet_directory_uri() . '/libs/jquery-ui/jquery-ui.min.css', array(), $the_theme->get( 'Version' ), false );
	wp_enqueue_style( 'jquery-ui-structure', get_stylesheet_directory_uri() . '/libs/jquery-ui/jquery-ui.structure.min.css', array(), $the_theme->get( 'Version' ), false );
	wp_enqueue_style( 'jquery-ui-theme', get_stylesheet_directory_uri() . '/libs/jquery-ui/jquery-ui.theme.min.css', array(), $the_theme->get( 'Version' ), false );
	wp_enqueue_script( 'jquery-ui-scripts', get_stylesheet_directory_uri() . '/libs/jquery-ui/jquery-ui.min.js', array('jquery'), $the_theme->get( 'Version' ), true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

require_once( 'inc/customizer.php' );

//Include child-theme widgets.php
require_once( 'inc/widgets.php' );

require_once( 'inc/setup.php' );
require_once( 'inc/taxonomy.php' );
require_once( 'inc/custom-post-type.php' );

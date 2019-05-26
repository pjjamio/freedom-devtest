<?php

function add_theme_scripts() {

    wp_enqueue_style( 'style', get_template_directory_uri() . '/includes/css/style.css' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/includes/js/jquery.js' );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/includes/js/custom.js' );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function register_custom_nav_menus() {
	register_nav_menus( array(
		'header_menu' => 'Header Menu',
		'footer_menu' => 'Footer Menu',
	) );
}
add_action( 'after_setup_theme', 'register_custom_nav_menus' );

function register_theme_widgets_container() {
	register_sidebar( array(
        'name' => __( 'Footer Left' ),
        'id' => 'footer_left',
        'description' => __( 'Widgets in this area will be shown on left footer area.' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
	
    register_sidebar( array(
        'name' => __( 'Footer Right' ),
        'id' => 'footer_right',
        'description' => __( 'Widgets in this area will be shown on right footer area.' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'register_theme_widgets_container' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}
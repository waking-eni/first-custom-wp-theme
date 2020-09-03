<?php
 
function nowenita_scripts() {
    wp_enqueue_style( 'nowenita-style', get_stylesheet_uri() );
    wp_enqueue_style( 'nowenita-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap' );
}    
 
add_action( 'wp_enqueue_scripts', 'nowenita_scripts' );

//menu
/*function nowenita_menus() {
  register_nav_menu( 'main-menu', 'Nowenita Menu' );
}
add_action( 'after_setup_theme', 'nowenita_menus' );*/

function nowenita_menus() {
  register_nav_menus( array(
    'main-menu' => __( 'Nowenita Menu' ),
    'primary-menu' => __( 'Primary Menu')
  ));
}
add_action( 'after_setup_theme', 'nowenita_menus' );


//thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(300, 200);

//widgets
function initialize_widgets() {
	register_sidebar( [
		'name' => 'Right Sidebar',
		'id'   => 'rightsidebar'
	] );
}
 
add_action( 'widgets_init', 'initialize_widgets' );
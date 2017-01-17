<?php
/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_true' );


/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'functions/theme-options.php' );
require( trailingslashit( get_template_directory() ) . 'functions/meta-boxes.php' );

function theme_options_parent($parent ) {
	$parent = '';
	return $parent;
}
add_filter( 'ot_theme_options_parent_slug', 'theme_options_parent',20 );


function artbt_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'artbt' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


}
add_action( 'after_setup_theme', 'artbt_setup' );

function artbt_widgets_init() {
	register_sidebar( array(
		'name'          => 'Область виджетов',
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'artbt' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'artbt_widgets_init' );


function artbt_style() {
	wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css');
	wp_enqueue_style( 'artbt-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font', 'http://fonts.googleapis.com/css?family=Roboto:400,500,700');
	wp_enqueue_style( 'font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'colorScheme', get_template_directory_uri() . '/css/colorScheme-2.css');
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/owl-carousel.css');
}
add_action( 'wp_enqueue_scripts', 'artbt_style' );



function artbt_scripts() {
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script.js', array ('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'artbt_scripts' );



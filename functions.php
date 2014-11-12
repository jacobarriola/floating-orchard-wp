<?php
/**
 * Floating Orchard functions and definitions
 *
 * @package Floating Orchard
 */

//ACF Options setup
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'floatingorchard_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function floatingorchard_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Floating Orchard, use a find and replace
	 * to change 'floatingorchard' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'floatingorchard', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'floatingorchard' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'floatingorchard_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // floatingorchard_setup
add_action( 'after_setup_theme', 'floatingorchard_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function floatingorchard_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'floatingorchard' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'floatingorchard_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function floatingorchard_scripts() {

	/* Add Stylesheet */
	wp_enqueue_style( 'floatingorchard-style', get_stylesheet_uri() );

	/* remove WP version of jQuery */
    wp_deregister_script( 'jquery' );

    /* jQuery */
    wp_enqueue_script ( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', '', '', false );

	/* modernizer */
	wp_enqueue_script ( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', '', '', false );

	/* Add fastclick js file */
	wp_enqueue_script ( 'fastclick_js', get_template_directory_uri() . '/js/vendor/fastclick.js', '', '', true );

	/* Add Foundation js file */
	wp_enqueue_script ( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), '', true );

	/* Add app.js file */
	wp_enqueue_script ( 'app', get_template_directory_uri() . '/js/app.js', '', '', true );

	/* Add Navigation js */
	wp_enqueue_script( 'floatingorchard-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'floatingorchard-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'floatingorchard_scripts' );

/* Add Foundation menu functionality to wp_nav_menu */
function floatingorchard_nav_menu($menu){

	$menu = str_replace('menu-item-has-children', 'menu-item-has-children has-dropdown', $menu);
	$menu = str_replace('sub-menu', 'sub-menu dropdown', $menu);
	return $menu;

}
add_filter('wp_nav_menu','floatingorchard_nav_menu');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Anchor confirmation text on Gravity Forms instead of loading page at the top
 */
add_filter("gform_confirmation_anchor", 
create_function("","return true;"));







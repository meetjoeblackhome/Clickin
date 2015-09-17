<?php
/**
 * clickinconsulting functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package clickinconsulting
 */

if ( ! function_exists( 'clickinconsulting_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

show_admin_bar(false);

function clickinconsulting_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on clickinconsulting, use a find and replace
	 * to change 'clickinconsulting' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'clickinconsulting', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'clickinconsulting' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'clickinconsulting_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // clickinconsulting_setup
add_action( 'after_setup_theme', 'clickinconsulting_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clickinconsulting_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clickinconsulting_content_width', 640 );
}
add_action( 'after_setup_theme', 'clickinconsulting_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clickinconsulting_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'clickinconsulting' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'clickinconsulting_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function clickinconsulting_scripts() {
	wp_enqueue_style( 'clickinconsulting-style', get_stylesheet_uri() );

	wp_enqueue_script( 'clickinconsulting-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'clickinconsulting-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clickinconsulting_scripts' );

/**
 * Stylesheets
 */
function theme_add_javscripts_and_stylesheets() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/developer/vendor/bootstrap/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/developer/vendor/bootstrap/dist/css/bootstrap-theme.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/developer/vendor/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'clickin-app', get_template_directory_uri() . '/assets/stylesheets/clickin.app.min.css' );
	wp_enqueue_script( 'jquery-2-1-4', get_template_directory_uri() . '/developer/vendor/jquery/dist/jquery.min.js', array(), '2.1.4', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/developer/vendor/bootstrap/dist/js/bootstrap.min.js', array(), '3.3.5', true );
	wp_enqueue_script( 'unify', get_template_directory_uri() . '/developer/vendor/unify/app.js', array(), '', true );
	wp_enqueue_script( 'clickin-app', get_template_directory_uri() . '/assets/javascripts/clickin.app.js', array(), '', true );
}
 
add_action( 'wp_enqueue_scripts', 'theme_add_javscripts_and_stylesheets' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

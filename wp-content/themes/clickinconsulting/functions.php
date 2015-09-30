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

// Assets
function assets() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/plugins/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/vendor/plugins/font-awesome/css/font-awesome.min.css' );
	// Services Page -> Icons
	if(is_page('services')) {
		wp_enqueue_style( 'line-icons', get_template_directory_uri() . '/assets/vendor/plugins/line-icons/line-icons.css' );
	}
	// End :: Services Page -> Icons
	wp_enqueue_style( 'header6-styles', get_template_directory_uri() . '/assets/vendor/css/headers/header-v6.css' );
	wp_enqueue_style( 'footer-v1-styles', get_template_directory_uri() . '/assets/vendor/css/footers/footer-v1.css' );
	wp_enqueue_style( 'unify-styles', get_template_directory_uri() . '/assets/vendor/css/style.css' );
	wp_enqueue_style( 'clickin-styles', get_template_directory_uri() . '/assets/stylesheets/clickin.app.min.css' );
	wp_enqueue_script( 'jquery-2-1-4-scripts', get_template_directory_uri() . '/assets/vendor/plugins/jquery/jquery.min.js', array(), '2.1.4', true );
	wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/assets/vendor/plugins/bootstrap/js/bootstrap.min.js', array(), '3.3.5', true );
	wp_enqueue_script( 'unify-scripts', get_template_directory_uri() . '/assets/vendor/js/app.js', array(), '', true );
	wp_enqueue_script( 'clickin-scripts', get_template_directory_uri() . '/assets/javascripts/clickin.app.js', array(), '', true );
	// Contact Us Page
	if(is_page('contact-us')) {
		wp_enqueue_script( 'recaptcha-scripts', 'https://www.google.com/recaptcha/api.js', array(), '', true );
	}
	// End :: Contact Us Page

	// Portfolio Page
	if(is_page('portfolio')) {
		wp_enqueue_script( 'matchheight-scripts', get_template_directory_uri() . '/assets/vendor/plugins/jquery.matchHeight-min.js', array(), '', true );
	}
	// End :: Portfolio Page

	// Rev Slider
	if (is_home()) {
		wp_enqueue_style( 'revsl-styles', get_template_directory_uri() . '/assets/vendor/plugins/revolution-slider/rs-plugin/css/settings.css' );
		wp_enqueue_script( 'themepunchtoolsrevsl-scripts', get_template_directory_uri() . '/assets/vendor/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js', array(), '', true );
		wp_enqueue_script( 'themepunchrevsl-scripts', get_template_directory_uri() . '/assets/vendor/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), '', true );
		wp_enqueue_script( 'revsl-scripts', get_template_directory_uri() . '/assets/vendor/js/plugins/revolution-slider.js', array(), '', true );
	}
	// End :: Rev Slider
}
add_action( 'wp_enqueue_scripts', 'assets' );

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

<?php
/**
 * rfm functions and definitions
 *
 * @package rfm
 */

/**
 * Define theme constants
 */
define( 'RFM_THEME_DIR', get_template_directory_uri() );
define( 'RFM_PATTERNS', 'layouts/patterns/' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'rfm_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rfm_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on rfm, use a find and replace
	 * to change 'rfm' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'rfm', get_template_directory() . '/languages' );

	add_image_size( 'hero-lg', 1400, 500, true );
	add_image_size( 'hero-md', 1000, 500, true );
	add_image_size( 'hero-sm', 600, 400, true );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'rfm' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'rfm_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // rfm_setup
add_action( 'after_setup_theme', 'rfm_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function rfm_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'rfm' ),
		'id'            => 'sidebar-1',
		'class'         => 'sidebar-widget-area',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer', 'rfm' ),
		'id'            => 'footer-widgets',
		'class'         => 'footer-widget-area',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'rfm_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rfm_scripts() {
	wp_enqueue_style( 'rfm-style', get_stylesheet_uri() );

	wp_enqueue_script( 'rfm-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'rfm-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rfm_scripts' );

/**
 * Theme Filters. If this list gets large, move to a separate include file
 */
function rfm_avoid_title_widows( $title ) {
	// Find the last space.
	$last_space = strrpos( $title, ' ' );

	// Replace it with a non-breaking space.
	if ( $last_space ) {
		$title = substr( $title, 0, $last_space ) . '&nbsp;' . substr( $title, $last_space + 1 );
	}

	return $title;
}
add_filter( 'the_title', 'rfm_avoid_title_widows' );

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

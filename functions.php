<?php
/**
 * BIMG Base functions and definitions
 *
 * @package BIMG Base
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'bimg_base_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bimg_base_setup() {

		/*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on BIMG Base, use a find and replace
         * to change 'bimg-base' to the name of your theme in all the template files
         */
		load_theme_textdomain( 'bimg-base', get_template_directory() . '/languages' );

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
			'primary' => __( 'Primary Menu', 'bimg-base' ),
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
		add_theme_support( 'custom-background', apply_filters( 'bimg_base_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}
endif; // bimg_base_setup
add_action( 'after_setup_theme', 'bimg_base_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function bimg_base_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bimg-base' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'bimg_base_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bimg_base_scripts() {
	wp_enqueue_style( 'bimg-base-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bimg-base-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'bimg-base-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '4.3.0' );

	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/jquery.sticky.min.js' );
}
add_action( 'wp_enqueue_scripts', 'bimg_base_scripts' );

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
 * Load Google Fonts for theme.
 */
require get_template_directory() . '/inc/fonts.php';

/**
 * Load CMB2 metaboxes.
 */
require get_template_directory() . '/inc/cmb2.php';

/**
 * Load CMB Admin Options.
 */
require get_template_directory() . '/inc/theme-options-cmb.php';

/**
 * Bootstrap CMB2
 */
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
      require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
      require_once  __DIR__ . '/CMB2/init.php';
}

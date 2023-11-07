<?php
/**
 * quick start pack functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package quick_start_pack
 */

if ( ! function_exists( 'qsp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function qsp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on quick start pack, use a find and replace
		 * to change 'qsp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'qsp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'qsp' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'qsp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'qsp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function qsp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'qsp_content_width', 640 );
}
add_action( 'after_setup_theme', 'qsp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function qsp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'qsp' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add footer widgets here.', 'qsp' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s col">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'qsp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function qsp_scripts() {
	wp_enqueue_style( "bootstrap", get_theme_file_uri( 'assets/css/bootstrap.min.css' ),time() );
	wp_enqueue_style( "responsive", get_theme_file_uri( 'assets/css/responsive.css' ),time() );
	wp_enqueue_style( "fontawesome", get_theme_file_uri( 'assets/css/font-awesome.min.css' ),time() );
	wp_enqueue_style( "slicknav", get_theme_file_uri( 'assets/css/slicknav.min.css' ),time() );
	wp_enqueue_style( 'style', get_stylesheet_uri());

	wp_enqueue_script( "bootstrap", get_theme_file_uri( 'assets/js/bootstrap.min.js' ),array('jquery'),time() , true);
	wp_enqueue_script( "slicknav", get_theme_file_uri( 'assets/js/jquery.slicknav.min.js' ),array('jquery'),time() , true);
	wp_enqueue_script( "main", get_theme_file_uri( 'assets/js/main.js' ),array('jquery'),time() , true);
}
add_action( 'wp_enqueue_scripts', 'qsp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


require get_template_directory() . '/inc/tgm.php';



require_once get_theme_file_path( '/inc/tgm.php' );

// cs framwwork

//require get_template_directory() . '/inc/csframework/cs-framework.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




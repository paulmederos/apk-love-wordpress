<?php
/**
 * apk-love functions and definitions
 *
 * @package apk-love
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'apk_love_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function apk_love_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on apk-love, use a find and replace
	 * to change 'apk-love' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'apk-love', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'apk-love' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'apk_love_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // apk_love_setup
add_action( 'after_setup_theme', 'apk_love_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function apk_love_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'apk-love' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'Ambassador Sidebar',
'id' => 'ambassador-sidebar',
'description' => 'Sidebar on the ambassador page',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h2 class="widget-title">',
'after_title' => '</h1>',
));
}


add_action( 'widgets_init', 'apk_love_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function apk_love_scripts() {
	wp_enqueue_style( 'apk-love-style', get_stylesheet_uri() );

	wp_enqueue_script( 'apk-love-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'apk-love-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'apk-love-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'apk_love_scripts' );

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


// First, create a function that includes the path to your favicon
function add_favicon_to_admin() {
  $favicon_url = 'http://americanparkour.s3.amazonaws.com/assets/community/favicon-admin.png';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '" type="image/x-icon"/>';





}
  


// Now, just make sure that function runs when you're on the login page and admin pages  
add_action('login_head', 'add_favicon_to_admin');
add_action('admin_head', 'add_favicon_to_admin');

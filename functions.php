<?php
/**
 * Pleiades Web functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pleiades_Web
 */

if (!function_exists('pleiadesweb_setup')) :
	function pleiadesweb_setup() {
		
		load_theme_textdomain('pleiadesweb', get_template_directory() . '/languages');
		
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');

		add_theme_support('post-thumbnails');
	
		register_nav_menus( array(
			'primary' => esc_html__('Primary', 'pleiadesweb'),
			'social' => esc_html__( 'Social Menu', 'wplucy8' ),
			'sitemap' => esc_html__( 'Site Map', 'wplucy8' )
		));

		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		add_theme_support('post-formats', array(
			'aside'
			//'image',
			//'video',
			//'quote',
			//'link',
		));

		// Set up the WordPress core custom background feature.
		/*
		add_theme_support('custom-background', apply_filters('pleiadesweb_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));
		*/

	} //function pleiadesweb_setup()

endif; //if (!function_exists('pleiadesweb_setup'))

add_action( 'after_setup_theme', 'pleiadesweb_setup' );


function pleiadesweb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pleiadesweb_content_width', 640 );
}
add_action( 'after_setup_theme', 'pleiadesweb_content_width', 0 );

function pleiadesweb_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pleiadesweb' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pleiadesweb_widgets_init' );

// ENQUEING SCRIPTS AND OTHERS
function pleiadesweb_scripts() {
	wp_enqueue_style( 'pleiadesweb-style', get_stylesheet_uri() );



	// FONTS
	// Titillium Web & Roboto Slab
	wp_enqueue_style('pleiadesweb-google-fonts', 'https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,400italic,600,700,600italic|Roboto+Slab:400,300,100,700');
	// Fontawesome
	wp_enqueue_style('pleiadesweb-fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');



	// JAVASCRIPT

	// Superfish
	wp_enqueue_script( 'pleiadesweb-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20150206', true );
	wp_enqueue_script( 'pleiadesweb-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('pleiadesweb-superfish'), '20150206', true );

	// Navigation
	wp_enqueue_script( 'pleiadesweb-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	//Link focus
	wp_enqueue_script( 'pleiadesweb-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	//Scrollmagic
	wp_enqueue_script( 'pleiadesweb-scrollmagic', get_template_directory_uri() . '/js/jquery.scrollmagic.min.js', array('jquery'), '20160115', true );

	//TweenMax
	wp_enqueue_script( 'pleiadesweb-tweenmax', get_template_directory_uri() . '/js/jquery.tweenmax.min.js', array('jquery'), '20160115', true );

	// CUSTOM script
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/script.js', array(), '20150115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} //pleiadesweb_scripts()
add_action( 'wp_enqueue_scripts', 'pleiadesweb_scripts' );


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

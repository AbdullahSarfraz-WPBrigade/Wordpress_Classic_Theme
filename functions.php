<?php
/**
 * Positiva functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Positiva
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}



/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function positiva_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Positiva, use a find and replace
		* to change 'positiva' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'positiva', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'positiva' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'positiva_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'positiva_setup' );


// To add CSS File link

/* Function to register the style sheet in correct way */



// function Positiva_register_styles(){
// 	wp_enqueue_style('Positiva-css', get_template_directory_uri() . '/assets/css/style.css');
// }

/* Now hook the function into the wordpress using add_action function.... */

// add_action('wp_enqueue_scripts', 'Positiva_register_styles');




function Positiva_register_scripts(){
	wp_enqueue_style('Positiva-css', get_template_directory_uri() . '/assets/css/style.css');
	



	

	wp_enqueue_script( 'script-Positiva', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), '1.1', true);
}

add_action('wp_enqueue_scripts', 'Positiva_register_scripts');

function media_Positiva_register_scripts() {
    wp_enqueue_media();
}

add_action('admin_enqueue_scripts', 'media_Positiva_register_scripts');


// thickBox Wordpress own media upload trigger
function enqueue_thickbox_script() {
    if (!is_admin()) {
        wp_enqueue_script('thickbox');
        wp_enqueue_style('thickbox');
		wp_enqueue_script('media-upload');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_thickbox_script');


// In your theme's functions.php file

function theme_customize_register($wp_customize) {
    // Add a setting for the custom title
    $wp_customize->add_setting('custom_title', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add a control for the custom title
    $wp_customize->add_control('custom_title', array(
        'label' => __('Custom Title', 'your-theme-textdomain'),
        'section' => 'title_tagline', // You can change this section to match where you want the control to appear
        'type' => 'text',
    ));
}

add_action('customize_register', 'theme_customize_register');


add_theme_support('menus');
add_theme_support('custom-logo');
add_theme_support('custom-background');

add_theme_support('html5', array('comment-list','comment-form', 'search-form', 'gallery', 'caption'));
add_theme_support('customize-selective-refresh-widgets');



function theme_customizer_settings($wp_customize) {

	

	$wp_customize->add_section('header_section', array(
		'title' => __('Header Section', 'text-domain'),
		'priority' => 30,
	));


	$wp_customize->add_setting('inicio_text', array(
		'default' => 'INICIO',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('inicio_text', array(

		'label' => __('inicio_text', 'text-domain'),
		'section' => 'header_section',
		'type' => 'text',
	));

	$wp_customize->add_setting('companyia_text', array(
		'default' => 'INICIO',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('companyia_text', array(
		'label' => __('companyia_text', 'text-domain'),
		'section' => 'header_section',
		'type' => 'text',
	));

	$wp_customize->add_setting('ARL_text', array(
		'default' => 'INICIO',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('ARL_text', array(
		'label' => __('ARL_text', 'text-domain'),
		'section' => 'header_section',
		'type' => 'text',
	));

	$wp_customize->add_setting('seguro_text', array(
		'default' => 'INICIO',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('seguro_text', array(
		'label' => __('seguro_text', 'text-domain'),
		'section' => 'header_section',
		'type' => 'text',
	));

	$wp_customize->add_setting('Atencion_text', array(
		'default' => 'INICIO',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('Atencion_text', array(
		'label' => __('Atencion_text', 'text-domain'),
		'section' => 'header_section',
		'type' => 'text',
	));



	$wp_customize->add_section('top_icons', array(
        'title' => 'Top Icons'
    ));

    $wp_customize->add_setting('left_Side_Icon');

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'left_Side_Icon', // Control ID
        array(
            'label' => 'Left Side Icon',
            'settings' => 'left_Side_Icon',
            'section' => 'top_icons'
        )
    ));

	$wp_customize->add_setting('Right_Side_Icon');

	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,
		'Right_Side_Icon',
		array(
			'label'=> 'Right Side Icon',
			'settings'=> 'Right_Side_Icon',
			'section'=> 'top_icons'
		)
	));

	// Slider ----------------

	

}


add_action('customize_register', 'theme_customizer_settings');

add_action('wp_head', 'display_gray_topline');
add_action('wp_head', 'display_gray_topline_testing');



function my_custom_menu_page() {
	add_menu_page(
		'My Custom Menu', // page title
		'Customize Theme', // Menu title/Name
		'manage_options', // capability
		'my-custom-menu',  // menu slug
		'my_custom_menu_page_callback', // callback function
		'dashicons-admin-customizer', // icon

	);
}

add_action('admin_menu', 'my_custom_menu_page');



include_once get_template_directory() . '/theme-options.php' ;






function theme_options_setting() {

	//step # 1 : Add Setting Section

	add_settings_section (
		"section_one",    //id of settings
		"Top Notification Bar",       // title
		"",               //callback function, not needed so empty
		"theme-options"   //page
	);

	
	
	//step # 2 : Add Setting field
	
	add_settings_field(
		"Ayuda_text",  //id
		"Ayuda", //title
		"Ayuda_callback", // callback function
		"theme-options", //page
		"section_one" //section id
	);
	
	//can add more fields
	
	add_settings_field(
		"Mapa",
		"Mapa-Text",
		"Mapa_callback",
		"theme-options",
		"section_one"
	);
	
	add_settings_field(
		"AAA_button",
		"AAA-Text",
		"AAA_callback",
		"theme-options",
		"section_one"
	);

	add_settings_field(
		"miercolo_text",
		"miercolo Text",
		"miercolo_callback",
		"theme-options",
		"section_one"
	);

	add_settings_field(
		"Proceso_text",
		"Proceso Text",
		"Proceso_callback",
		"theme-options",
		"section_one"
	);

	add_settings_field(
		"Iniciar_text",
		"Iniciar Text",
		"Iniciar_callback",
		"theme-options",
		"section_one"
	);


	add_settings_field(
		"GARANTIZA_text",
		"GARANTIZA Text",
		"GARANTIZA_callback",
		"theme-options",
		"section_one"
	);

	add_settings_field(
		"EL_text",
		"EL Text",
		"EL_callback",
		"theme-options",
		"section_one"
	);

	add_settings_field(
		"BIENESTAR_text",
		"BIENESTAR Text",
		"BIENESTAR_callback",
		"theme-options",
		"section_one"
	);

	add_settings_field(
		"DE_text",
		"DE TUS Text",
		"DE_callback",
		"theme-options",
		"section_one"
	);

	add_settings_field(
		"EMPLEADOS_text",
		"EMPLEADOS Text",
		"EMPLEADOS_callback",
		"theme-options",
		"section_one"
	);

	add_settings_field(
		"CON_text",
		"CON Text",
		"CON_callback",
		"theme-options",
		"section_one"
	);

	add_settings_field(
		"POSITIVA_text",
		"POSITIVA Text",
		"POSITIVA_callback",
		"theme-options",
		"section_one"
	);





// Rest of your code...

// Modify your loop
for ($i = 1; $i <= 4; $i++) {
    add_settings_field(
        'upload_secondary_image' . $i,
        'Slider Background Image ' . $i,
        'secondary_image_callback',
        'theme-options',
        'section_one',
        array('slide_number' => $i)
    );

    register_setting('theme-options', 'upload_secondary_image' . $i, 'esc_url_raw');
}




	//step # 3 rgistering now
	
	register_setting(
		"section_one", // option group name OR means section setting id
		"Ayuda_text" // option_name OR filed id
	);
	 
	register_setting("section_one","Mapa");
	register_setting("section_one","AAA_button");
	register_setting("section_one","miercolo_text");
	register_setting("section_one","Proceso_text");
	register_setting("section_one","Iniciar_text");
	register_setting("section_one","GARANTIZA_text");
	register_setting("section_one","EL_text");
	register_setting("section_one","BIENESTAR_text");
	register_setting("section_one","DE_text");
	register_setting("section_one","EMPLEADOS_text");
	register_setting("section_one","CON_text");
	register_setting("section_one","POSITIVA_text");
}

	
add_action("admin_init","theme_options_setting");
	

function header_slider_option_function() {

}







/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function positiva_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'positiva_content_width', 640 );
}
add_action( 'after_setup_theme', 'positiva_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function positiva_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'positiva' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'positiva' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'positiva_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function positiva_scripts() {
	wp_enqueue_style( 'positiva-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'positiva-style', 'rtl', 'replace' );

	wp_enqueue_script( 'positiva-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'positiva_scripts' );

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

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

?>
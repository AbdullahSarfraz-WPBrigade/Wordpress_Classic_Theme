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

// Custom Class for options Customizability


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

	// First Gravity Form Settings for adding the class before this function ----------------

	$wp_customize->add_section('your_custom_form', array(
        'title' => __('Your Custom Form', 'your_theme_textdomain'),
		'priority' => 40,
    ));
	// Add setting
    $wp_customize->add_setting('departmento_select_option', array(
		'default' => array('Departmento','2Departmento','3rdDep','lastDep'),
		'sanitize_callback' => 'mytheme_sanitize_select_options',
	));

	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'departmento_select_option',
		array(
			'label' => 'Departmento:',
			'section' => 'your_custom_form',
			'type' => 'select',
			'choices' => array(),
			'customize_control_update' => 'mytheme_departmento_control_update',
		)
		));

	$wp_customize->add_setting('Ciudad', array(
		'default' => array('Ciudad','2ndOfcourse','3rd'),
		'sanitize_callback'=> 'mytheme_sanitize_select_options',
	));

	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'Ciudad',
		array(
			'label' => 'Ciudad:',
			'section' => 'your_custom_form',
			'type' => 'select',
			'choices' => array(),
			'customize_control_update' => 'mytheme_departmento_control_update',
		)
	));

	$wp_customize->add_setting('seleccion', array(
		'default' => array('Seleccion', '2nd Selection'),
		'sanitize_callback' => 'mytheme_sanitize_select_options',
	));

	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'seleccion',
		array(
			'label' => 'Selecciones Red:',
			'section' => 'your_custom_form',
			'type' => 'select',
			'choices' => array(),
			'customize_control_update' => 'mytheme_departmento_control_update',
		)
		));

	$wp_customize->add_setting('punto', array(
		'default' => array('putto', 'lastBut', 'NotLeast'),
		'sanitize_callback' => 'mytheme_sanitize_select_options',
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'punto',
		array(
			'label' => 'Selecciones un Punto:',
			'section' => 'your_custom_form',
			'type' => 'select',
			'choices' => array(),
			'customize_control_update' => 'mytheme_departmento_control_update',
		)
		));

	// Fetch Options from Database:.......................	

	function mytheme_get_select_options( $option_name ) {
		$options = get_option( $option_name );
		return $options ? $options : array(); // Handle empty options
	}	

	//Update Controls and Database:-----------------------

	function mytheme_departamento_control_update( $control ) {
		$new_choices = mytheme_get_select_options( 'departmento_select_option' );
		$control->choices = $new_choices;
	
		// Update the setting and notify for live updates
		$wp_customize->get_setting( 'departmento_select_option' )->transport = 'postMessage';
		$wp_customize->get_setting( 'departmento_select_option' )->notify();
	
		// Save updated options back to the database
		update_option( 'departmento_select_option', $new_choices );
	}

	function mytheme_Ciudad_control_update( $control ) {
		$new_choices = mytheme_get_select_options( 'Ciudad' );
		$control->choices = $new_choices;
	
		$wp_customize->get_setting( 'Ciudad' )->transport = 'postMessage';
		$wp_customize->get_setting( 'Ciudad' )->notify();
	
		update_option( 'Ciudad', $new_choices );
	}

	function mytheme_seleccion_control_update( $control ) {
		$new_choices = mytheme_get_select_options( 'seleccion' );
		$control->choices = $new_choices;
	
		$wp_customize->get_setting( 'seleccion' )->transport = 'postMessage';
		$wp_customize->get_setting( 'seleccion' )->notify();
	
		update_option( 'seleccion', $new_choices );
	}
	
	function mytheme_punto_control_update( $control ) {
		$new_choices = mytheme_get_select_options( 'punto' );
		$control->choices = $new_choices;
	
		$wp_customize->get_setting( 'punto' )->transport = 'postMessage';
		$wp_customize->get_setting( 'punto' )->notify();
	
		update_option( 'punto', $new_choices );
	}
	





}


add_action('customize_register', 'theme_customizer_settings');

add_action('wp_head', 'display_gray_topline');
add_action('wp_head', 'display_under_head');



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

//Custom post type for Slider

function slider_custom_post_type_header() {
    register_post_type( 'sliders', array(  // 'sldier' here is for the slug and array is definig the properties
            'labels' => array(
                'name' => __( 'Sliders' ),
                'singular_name' => __( 'sliders' ),
				'all_items' => __('All Sliders'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'sliders'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies' => array('category' ),
        )
    );
 }
add_action( 'init', 'slider_custom_post_type_header' );




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

	add_settings_field(
		"slider_count",
		"No. of Slides",
		"Slider_callback",
		"theme-options",
		"section_one"
	);

	// Retrieving the number data from Database for to use in the loop 
	$storedNumber = get_option('stored_number', 1);

	for ($i = 1; $i <= $storedNumber; $i++) {
		add_settings_field(
			'upload_secondary_image' . $i,
			'Slider Background Image ' . $i,
			'secondary_image_callback',
			'theme-options',
			'section_one',
			array('slide_number' => $i)
		);

		register_setting('section_one', 'upload_secondary_image' . $i, 'esc_url_raw');
	}

	add_settings_field(
		"page_link_start",
		"Special Page Links Settings",
		"page_link_start_callback",
		"theme-options",
		"section_one"
	);

	add_settings_field(
		"page_link_count",
		"No. of Special Page Links",
		"page_link_callback",
		"theme-options",
		"section_one"
	);

	$LinkedNumber = get_option('linked_number', 1);

	for ($iy = 1; $iy <= $LinkedNumber; $iy++) {
		add_settings_field(
			'upload_first_icon' . $iy,
			'Page Link ' . $iy,
			'first_page_link_icon_callback',
			'theme-options',
			'section_one',
			array('link_number' => $iy)
		);

		register_setting('section_one', 'upload_first_icon' . $iy, 'esc_url_raw');

		add_settings_field(
			"top_p_text" . $iy,
			"",
			"top_p_text_callback",
			"theme-options",
			"section_one",
			array('link_number' => $iy)
		);
		register_setting("section_one","top_p_text" . $iy);


		add_settings_field(
			"bottom_h_text" . $iy,
			"",
			"bottom_h_text_callback",
			"theme-options",
			"section_one",
			array('link_number' => $iy)
		);
		register_setting("section_one","bottom_h_text" . $iy);
	}

	add_settings_field(
		"post_link_start",
		"Latest three Posts Settings",
		"post_link_start_callback",
		"theme-options",
		"section_one"
	);

	

	

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
	register_setting('section_one', 'stored_number', 'intval');
	
	
}

	
add_action("admin_init","theme_options_setting");
	

function header_slider_option_function() {

}

function custom_length_excerpt($length) {
	return 22;
}

add_filter('excerpt_length','custom_length_excerpt');

function custom_more_excerpt($more) {
	return ' <a class="under-orange read-more" href="' . get_permalink() . '">+ Ver otros servicios</a>';
}

add_filter('excerpt_more','custom_more_excerpt');

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
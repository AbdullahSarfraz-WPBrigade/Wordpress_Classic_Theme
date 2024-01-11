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
	// wp_enqueue_style('Positiva-css');
	// wp_enqueue_style('responive-css', get_template_directory_uri() . '/assets/css/responive.css');
	
	wp_enqueue_script( 'script-Positiva', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), '1.1', true);
}

add_action('wp_enqueue_scripts', 'Positiva_register_scripts');


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






function my_custom_menu_page_callback() {
?>
<div class="wrap">
	<h2>Edit Theme</h2>
	<p>Edit your Menu page without code</p>
</div>

<?php
}

function theme_customizer_settings($wp_customize) {

	

	$wp_customize->add_section('header_section', array(
		'title' => __('Header Section', 'text-domain'),
		'priority' => 30,
	));

	$wp_customize->add_setting('ayuda_button', array(
		'default' => 'Ayuda',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('ayuda_button', array(
	'label' => __('ayuda_button', 'text-domain'),
	'section' => 'header_section',
	'type' => 'text',    
	));

	$wp_customize->add_setting('map_button', array(

	'default' => 'Mapa del sitio',
	'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('map_button', array(

	'label' => __('map_button', ' text-domain'),
	'section' => 'header_section',
	'type' => 'text',
	));

	$wp_customize->add_setting('AAA_button', array(

	'default' => 'AAA',
	'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('AAA_button', array(

	'label' => __('AAA_button', 'text-domain'),
	'section' => 'header_section',
	'type' => 'text',
	));

	$wp_customize->add_setting('miercolo_text', array(

	'default' => 'miércoles ,10 de julio de 2015',
	'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('miercolo_text', array(

	'label' => 'miercolo_text',
	'section' => 'header_section',
	'type' => 'text',
	));

	$wp_customize->add_setting('Proceso_text', array(

	'default' => 'Proceso ante accidente laboral',
	'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('Proceso_text', array(

	'label' => __('Proceso_text', 'text-domain'),
	'section' => 'header_section',
	'type' => 'text',
	));


	$wp_customize->add_setting('Iniciar_text', array(

	'default' => 'Iniciar sesión',
	'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('Iniciar_text', array(

	'label' => __('Iniciar_text', 'text-domain'),
	'section' => 'header_section',
	'type' => 'text',
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





}

add_action('customize_register', 'theme_customizer_settings');

function my_custom_menu_page() {
	add_menu_page(
		'My Custom Menu', // page title
		'Theme Option', // Menu title
		'manage_options', // capability
		'my-custom-menu',  // menu slug
		'my_custom_menu_page_callback', // callback function
		'dashicons-admin-generic', // icon

	);
}

add_action('admin_menu', 'my_custom_menu_page');

function display_gray_topline() {
	$ayuda_text = get_theme_mod('ayuda_button', '');
	$map_text = get_theme_mod('map_button', '');
	$aaa_text = get_theme_mod('AAA_button','');
	$miercolo_text = get_theme_mod('miercolo_text', '');
	$proceso_text = get_theme_mod('Proceso_text', '');
	$iniciar_text = get_theme_mod('Iniciar_text', '');

	$inicio_text = get_theme_mod('inicio_text', '');
	$companyia_text = get_theme_mod('companyia_text', '');
	$ARL_text = get_theme_mod('ARL_text', '');
	$seguro_text = get_theme_mod('seguro_text', '');
	$Atencion_text = get_theme_mod('Atencion_text', '');

	if(!empty($ayuda_text)) {
	?>

	<div class="gray-topline">

		<div class="gray-lineOne">

			<?php
				wp_nav_menu(array(
					'theme_location' => 'header-menu',
					'container' => 'ul',
					'menu_class' => '',
				));
			?>
			<ul>

				<a href="#" class="orangetext">
					<li><?php echo"$ayuda_text"; ?></li>
				</a>
				
				<a href="#">
					<li><?php echo"$map_text"; ?> </li>
				</a>
				
				<a href="#">
					<li><?php echo"$aaa_text"; ?> </li>
				</a>
				
				
			</ul>

		</div>

		<div class="gray-lineTwo">

			<a href="#"> <?php echo"$miercolo_text"; ?> </a>

		</div>

		<div class="gray-lineThree">

			<div class="pre-profile">

				<div>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ICONO.png" alt="Icono">
				<a href="#"><?php echo"$proceso_text"; ?></a>

				</div>
				
				<div class="Forma3">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Forma3copia2.png" alt="">

					<div class="Forma4">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Forma4.png" alt="">
					</div>

				</div>

			</div>

			<div class="pre-profile">

				<div>
					<a href="#"><?php echo"$iniciar_text"; ?></a>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Ellipse2copy.png" alt="profile-pic">
				</div>

				<div class="Forma3">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Forma3copia2.png" alt="">

					<div class="Forma4">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Forma4.png" alt="">
					</div>

				</div>

			</div>    

		</div>

	</div>

	<div class="empty-space">
    
    </div>

	<div class="logo-top">

            <div class="Container">
    
                <div class="pick-top-logos">
    
				
                    <div class="postiva-logo">

			
						<?php
							// Getting logo settings as i sprintf top_ with all(Log_one,Log_two...) in setting_id
							//you may search (refrence No 1) in customizer.php
							$logo_one = get_theme_mod('top_Logo_one','');
							$logo_two = get_theme_mod('top_Logo_two','');
							$logo_three = get_theme_mod('top_Logo_three','');
						?>

						<?php
							
							
							if (empty($logo_one)) {
								// Display a default image if the setting is empty
								$default_logo_url = get_template_directory_uri() . '/assets/images/LOGOPOSITIVA.png';
								echo '<img src="' . esc_url($default_logo_url) . '" alt="Default Logo">';
							} else {
								// Display the user-configured image
								echo '<img src="' . esc_url($logo_one) . '" alt="Logo-Positivia">';
							}
						?>
						
                    </div>

                    <div class="burger-Icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feather_menu.png" onclick="ClickOnBurger()">
                    </div>

                    <div class="cross-burger" onclick="ClickOnBurger()">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Shape.png" >
                    </div>
        
                    <div class="Two-logos">
        
					<div class="Minh-logo">

					<?php

						if(empty($logo_two)) {
							$default_logo_url_two = get_template_directory_uri() . '/assets/images/Minhacienda.png';
							echo '<img src="' . esc_url($default_logo_url_two) . '" alt="Minhacienda">';
						} else {

							echo '<img src="' . esc_url($logo_two) . '" alt="Minhacienda"';
						}
					?>

					</div>
						
						
					<div class="bar-logo">
						<?php
								if(empty($logo_three)) {

									$default_logo_url_three = get_template_directory_uri() . '/assets/images/logo-bar-r2.png';
									echo '<img src="' . esc_url($default_logo_url_three) . '" alt="vectorial-1"';
								} else {
									echo '<img src="' . esc_url($logo_three) . '" alt="vectorial-1"';
								}
							?>
					</div>	
						
                        
        
                    </div>
    
                </div>    
    
            </div>
    
        </div>

		<div class="Top-Menu" id="Top-Menu">
    
            <div class="Container">
    
                <nav>
                    <div class="flex-links">

                        <div class="mobile-t-logos">
    
                                <div class="Two-logos-mobile">
            
                                    <div class="Minh-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Minhacienda.png" alt="Minhacienda"></div>
                                    <div class="bar-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bar-r2.png" alt="vectorial-1"></div>
                                               
                                </div>
 
                        </div>
    
                        <div class="Top-links">

                            <div class="Left-border"><a href="#"><?php echo"$inicio_text"; ?></a></div>


                            <div class="FirstDiv-DD-Mobile">

                                <div class="mobile-nav-click">

                                    <div class="Left-border LA-Company" ><a href=""><?php echo"$companyia_text"; ?></a>
                                
                                        <div class="drop-down">
                        
                                            <div class="DD-Content">
                            
                                                <div class="DD-One">
                                                    <p><a href="#">Quienes Somos</a></p>
                                                    <hr>
                                                    <p><a href="#">Misión y Visión</a></p>
                                                    <hr>
                                                    <p><a href="#">Objetivos y Funciones</a></p>
                                                    <hr>
                                                    <p><a href="#">Organigrama</a>
                                                    <hr>
                                                    <p><a href="#">Propuesta de Valor</a></p>
                                                    <hr>
                                                    <p><a href="#">Valores</a></p>
                                                </div>
                            
                                                <div class="DD-Two">
                                                    <p><a href="#">Fortalezas</a></p>
                                                    <hr>
                                                    <p><a href="#">Nuestra Marca</a></p>
                                                    <hr>
                                                    <p><a href="#">Directorio de Entidades y Agremiaciones</a></p>
                                                    <hr>
                                                    <p><a href="#">Certificaciones de Calidad</a>
                                                    <hr>
                                                    <p><a href="#">Directorio de funcionarios</a></p>
                                                    <hr>
                                                </div>
                            
                                            </div>
                                        </div>  
    
                                    </div>
    
                                    <div class="path1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Path.png" alt="Clickable-Button" onclick="RotationOnClick (this)">
                                    </div>
                                </div>

                                <div class="Mobile-DD-One">
                                    <p><a href="#">Quienes</a></p>
                                    <hr>
                                    <p><a href="#">Misión</a></p>
                                    <hr>
                                    <p><a href="#">Objetivos</a></p>
                                    <hr>
                                    <p><a href="#">Organigrama</a>
                                    <hr>
                                    <p><a href="#">Propuesta</a></p>
                                    <hr>
                                    <p><a href="#">Valores</a></p>
                                </div>

                            </div>


                            <div class="SecondDiv-DD-Mobile">

                                <div class="mobile-nav-click">

                                    <div class="Left-border"><a href="#"><?php echo"$ARL_text"; ?></a></div>
    
                                    <div class="path2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Path.png" alt="Clickable-Button" onclick="RotationOnClickOne(this)">
                                    </div>
                                    
                                </div>

                                <div class="Mobile-DD-two">
                                    <p><a href="#">Quienes</a></p>
                                    <hr>
                                    <p><a href="#">Misión</a></p>
                                    <hr>
                                    <p><a href="#">Objetivos</a></p>
                                    <hr>
                                    <p><a href="#">Organigrama</a>
                                    <hr>
                                    <p><a href="#">Propuesta</a></p>
                                    <hr>
                                    <p><a href="#">Valores</a></p>
                                </div>

                            </div>

                            <div class="ThirdDiv-DD-Mobile">

                                <div class="mobile-nav-click">

                                    <div class="Left-border"><a href="#"><?php echo"$seguro_text"; ?></a></div>
    
                                    <div class="path3">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Path.png" alt="Clickable-Button" onclick="RotationOnClickTwo(this)">
                                    </div>
                                    
                                </div>

                                <div class="Mobile-DD-three">
                                    <p><a href="#">Quienes</a></p>
                                    <hr>
                                    <p><a href="#">Misión</a></p>
                                    <hr>
                                    <p><a href="#">Objetivos</a></p>
                                    <hr>
                                    <p><a href="#">Organigrama</a>
                                    <hr>
                                    <p><a href="#">Propuesta</a></p>
                                    <hr>
                                    <p><a href="#">Valores</a></p>
                                </div>

                            </div>                            

                            
                            <div class="FourthDiv-DD-Mobile">

                                <div class="mobile-nav-click">

                                    <div class="Left-border"><a href="#"><?php echo"$Atencion_text"; ?></a></div>
    
                                    <div class="path4">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Path.png" alt="Clickable-Button" onclick="RotationOnClickThree(this)">
                                    </div>
                                    
                                </div>

                                <div class="Mobile-DD-four">
                                    <p><a href="#">Quienes</a></p>
                                    <hr>
                                    <p><a href="#">Misión</a></p>
                                    <hr>
                                    <p><a href="#">Objetivos</a></p>
                                    <hr>
                                    <p><a href="#">Organigrama</a>
                                    <hr>
                                    <p><a href="#">Propuesta</a></p>
                                    <hr>
                                    <p><a href="#">Valores</a></p>
                                </div>

                            </div>

                            
          
            
                        </div>
            
                        <div class="search-btn">
            
                            <div class="btn-pad search-put"><input type="text" placeholder="Búsqueda"></div>
        
                            <div class="btn-pad"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/iconosearch.png" alt="Icono-Search"></div>
            
                        </div>

                    </div>

                    
                </nav>
                
            </div>
        </div>

		<div class="Main-hero">

			<div class="owl-carousel owl-theme owl-carousel1">

				<div class="item">

					<div class="Hero">

						<div class="Container">

						<pre class="Hero-AllText">                      <span class="H-TOne">GARANTIZA</span> <span class="H-TTwo">EL</span> <span class="H-TOne">BIENESTAR</span>
								<span class="H-TThree">DE TUS</span>
								<span class="H-TFour">EMPLEADOS</span>
								<span class="H-TCON">CON</span> <span class="H-TPos">POSITIVA</span>

						</pre>
					
						</div>

					</div>

				</div>

				<div class="item">

					<div class="Hero">

						<div class="Container">

						<pre class="Hero-AllText">                      <span class="H-TOne">GARANTIZA</span> <span class="H-TTwo">EL</span> <span class="H-TOne">BIENESTAR</span>
								<span class="H-TThree">DE TUS</span>
								<span class="H-TFour">EMPLEADOS</span>
								<span class="H-TCON">CON</span> <span class="H-TPos">POSITIVA</span>

						</pre>

					
						</div>     

					</div>

				</div>

				<div class="item">

					<div class="Hero">

						<div class="Container">

						<pre class="Hero-AllText">                      <span class="H-TOne">GARANTIZA</span> <span class="H-TTwo">EL</span> <span class="H-TOne">BIENESTAR</span>
								<span class="H-TThree">DE TUS</span>
								<span class="H-TFour">EMPLEADOS</span>
								<span class="H-TCON">CON</span> <span class="H-TPos">POSITIVA</span>

						</pre>             
					
						</div>

					</div>

				</div>

				<div class="item">

					<div class="Hero">

						<div class="Container">

						<pre class="Hero-AllText">                      <span class="H-TOne">GARANTIZA</span> <span class="H-TTwo">EL</span> <span class="H-TOne">BIENESTAR</span>
								<span class="H-TThree">DE TUS</span>
								<span class="H-TFour">EMPLEADOS</span>
								<span class="H-TCON">CON</span> <span class="H-TPos">POSITIVA</span>

						</pre>
					
						</div>

					</div>

				</div>

			</div>

			<!-- <div class="Hero-Cards">

						<div class="Container">

								<div class="Hero-Cards-flex owl-carousel owl-theme owl-carousel5" >

									<div class="item">
										<div class="HC-One ">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame.png" alt="group-img">
											<p>RIESGOS LABORALES</p>
											<h4>ARL</h4>
										</div>
									</div>    
										
										
										<div class="item">
												<div class="HC-Two ">
													<p>
														Vida Individual <br>
														&ensp; Vida Grupo
													</p>
										
													<p>
														Accidentes <br>
														Personales
													</p>
										
													<input type="submit" value="VER MÁS">
												</div>
										</div>
											
										
										
											<div class="item">
												<div class="HC-Three ">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame-1.png" alt="group-img">
													<p>SEGUROS</p>
													<h4>PERSONALES</h4>
												</div>
											</div>
											
										
											<div class="item">
												<div class="HC-Four">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame-4.png" alt="group-img">
													<p>OTROS</p>
													<h4>SEGUROS</h4>
												</div>
											</div>
											

								</div>

						</div>

			</div> -->

		</div>
<?php    
}
}

add_action('wp_head', 'display_gray_topline');
?>

<?php




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
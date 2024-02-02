<?php 
/*
Plugin Name: My Second Form
Description: Handles form submissions and data storage for my second form.
Version: 1.0
Author: Abdullah Sarfraz
Author URI: http://positivawebsite.local/
*/

function my_save_custom_form3() {
    global $wpdb;

    $Departamento = sanitize_text_field( $_POST['Departamento']);
    $Ciudad = sanitize_text_field( $_POST['Ciudad']);
    $SeleccionesRed = sanitize_text_field( $_POST['SeleccionesRed']);
    $Selecciones = sanitize_text_field( $_POST['Selecciones']);

    $wpdb->insert(
        'second_form',
        array(
            'fDepartamento' => $Departamento,
            'fCiudad' => $Ciudad,
            'SeleccionesRed' => $SeleccionesRed,
            'Selecciones' => $Selecciones,
        ),
        array( '%s', '%s', '%s', '%s' )
    );

    wp_redirect( site_url('/#') ); 
	die;
}

add_action( 'admin_post_nopriv_save_my_custom_form3', 'my_save_custom_form3' );
add_action( 'admin_post_save_my_custom_form3', 'my_save_custom_form3' );

?>
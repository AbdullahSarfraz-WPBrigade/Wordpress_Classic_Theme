<?php 
/*
Plugin Name: My Form Functions
Description: Handles form submissions and data storage.
Version: 1.0
Author: Abdullah Sarfraz
Author URI: http://positivawebsite.local/
*/
function my_save_custom_form2() {
	global $wpdb;

	$departamento = sanitize_text_field( $_POST['Departamento'] );
	$ciudad = sanitize_text_field( $_POST['Ciudad'] );
	$selecciones_red = sanitize_text_field( $_POST['SeleccionesRed'] );
	$selecciones_punto = sanitize_text_field( $_POST['Selecciones'] );

	$wpdb->insert(
	'user_locations',
	array(
		'Departamento' => $departamento,
		'Ciudad' => $ciudad,
		'Selecciones_Red' => $selecciones_red,
		'Selecciones_Punto' => $selecciones_punto,
	),
	array( '%s', '%s', '%s', '%s' )
	);


	wp_redirect( site_url('/#') ); // <-- here goes address of site that user should be redirected after submitting that form
	die;
}

add_action( 'admin_post_nopriv_save_my_custom_form2', 'my_save_custom_form2' );
add_action( 'admin_post_save_my_custom_form2', 'my_save_custom_form2' );
?>
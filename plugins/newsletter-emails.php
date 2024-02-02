<?php
/*
Plugin Name: News Letter Emails
Description: This will collect the Email IDs of the Subscribers
Version: 1.0
Author: Abdullah Sarfraz
Author URI: http://positivawebsite.local/
*/

function newsletter_form_submission() {
    global $wpdb;
  
    $email = sanitize_email( $_POST['email'] );
  
    // If you need to store the email in the database:
    $wpdb->insert(
      'emailslist',
      array(
        'email' => $email,
      ),
      array( '%s' )
    );
  
    // Send a confirmation email or redirect to a confirmation page
    wp_redirect( site_url('/#') ); // Example redirect
    die;
  }
  
  add_action( 'admin_post_nopriv_newsletter_form', 'newsletter_form_submission' );
  add_action( 'admin_post_newsletter_form', 'newsletter_form_submission' );
  
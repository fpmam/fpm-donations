<?php
/**
 * Plugin Name: FPM Donations
 * Description: A simple plugin to handle donation functionality.
 * Version: 1.0
 * Author: FPM
 * License: GPL2
 */

/* Include the donations template using a shortcode */

function fpm_include_donations_template() {
    ob_start();  // Starts an output buffer
    include plugin_dir_path(__FILE__) . 'templates/donations.php';
    return ob_get_clean();  // Return the content and clean the buffer
}
add_shortcode('fpm_donations', 'fpm_include_donations_template');

/* Enqueue the JS and CSS files */

function fpm_enqueue_donation_scripts() {
    if ( is_page('donate-tests') ) {
        wp_enqueue_style( 'myplugin-variables', plugin_dir_url( __FILE__ ) . 'fpm-variables.css', array(), '1.0.0' );
        wp_enqueue_style('fpm-donations-css', plugin_dir_url(__FILE__) . 'fpm-donations.css');
        wp_enqueue_style('fpm-donation-styles', plugin_dir_url(__FILE__) . 'fpm-donation-styles.css'); 
        wp_enqueue_script('fpm-donations-js', plugin_dir_url(__FILE__) . 'fpm-donations.js', array('jquery'), '', true);
    }
}
add_action('wp_enqueue_scripts', 'fpm_enqueue_donation_scripts');

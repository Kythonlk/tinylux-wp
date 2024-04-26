<?php
/**
 * Babylux Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Babylux
 * @since 1.0.0
 */

define( 'CHILD_THEME_BABYLUX_VERSION', '1.0.0' );

function child_enqueue_styles() {

	wp_enqueue_style( 'babylux-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_BABYLUX_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



function add_tailwindcss() {
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com');
}
add_action('wp_enqueue_scripts', 'add_tailwindcss');



add_filter('woocommerce_currencies', 'add_aed_currency');
add_filter('woocommerce_currency_symbol', 'add_aed_currency_symbol', 10, 2);

function add_aed_currency($currencies) {
    $currencies['AED'] = __('UAE Dirham (AED)', 'babylux');
    return $currencies;
}

function add_aed_currency_symbol($currency_symbol, $currency) {
    switch($currency) {
        case 'AED':
            $currency_symbol = 'AED';
            break;
    }
    return $currency_symbol;
}


function handle_contact_form_submission() {
    if (isset($_POST['action']) && $_POST['action'] === 'submit_contact_form') {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = 'kythonlk@gmail.com'; 
        $subject = 'New Contact Form Submission';
        $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail($to, $subject, $body, $headers);
    }
}

add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission');
add_action('admin_post_submit_contact_form', 'handle_contact_form_submission');

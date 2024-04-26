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


/* function handle_contact_form_submission() { */
/*     if (isset($_POST['action']) && $_POST['action'] === 'submit_contact_form') { */
/*         $name = sanitize_text_field($_POST['name']); */
/*         $email = sanitize_email($_POST['email']); */
/*         $message = sanitize_textarea_field($_POST['message']); */
/**/
/*         $to = 'kythonlk@gmail.com';  */
/*         $subject = 'New Contact Form Submission'; */
/*         $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message"; */
/*         $headers = array('Content-Type: text/html; charset=UTF-8'); */
/**/
/*         wp_mail($to, $subject, $body, $headers); */
/*     } */
/* } */
/**/
/* add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission'); */
/* add_action('admin_post_submit_contact_form', 'handle_contact_form_submission'); */


add_action('rest_api_init', 'register_contact_form_endpoint');
function register_contact_form_endpoint()
{
    register_rest_route('babylux/v1', '/contact-form', array(
        'methods' => 'POST',
        'callback' => 'handle_contact_form_submission',
        'permission_callback' => '__return_true', 
    ));
}

function handle_contact_form_submission(WP_REST_Request $request)
{
    $params = $request->get_params();

    // Sanitize and validate form fields
    $name = sanitize_text_field($params['name']);
    $email = sanitize_email($params['email']);
    $message = sanitize_textarea_field($params['message']);

    // Perform additional validation if needed

    // Send the email
    $to = 'kythonlk@gmail.com';
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . $email);

    if (wp_mail($to, $subject, $body, $headers)) {
        return new WP_REST_Response(array('success' => true, 'message' => 'Thank you for your message. We will get back to you shortly.'), 200);
    } else {
        return new WP_REST_Response(array('success' => false, 'message' => 'There was an error sending the email. Please try again later.'), 500);
    }
}

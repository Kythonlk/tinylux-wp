<?php
/**
 * Babylux Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Babylux
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_BABYLUX_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
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
    $currencies['AED'] = __('UAE Dirham (AED)', 'your-text-domain');
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

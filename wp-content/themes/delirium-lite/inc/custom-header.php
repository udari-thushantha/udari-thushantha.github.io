<?php
/**
 *
 * @package Delirium Lite
 */

/**
 * Setup the WordPress core custom header feature.
 */
function delirium_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'delirium_custom_header_args', array(
		'width'         => 900,
		'height'        => 450,
		'uploads'       => true,
		'default-text-color'     => 'a3978e',
		'wp-head-callback'       => 'delirium_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'delirium_custom_header_setup' );

if ( ! function_exists( 'delirium_header_style' ) ) :
        function delirium_header_style() {
                wp_enqueue_style( 'delirium-style', get_stylesheet_uri() );
                $header_text_color = get_header_textcolor();
                $position = "absolute";
                $clip ="rect(1px, 1px, 1px, 1px)";
                if ( ! display_header_text() ) {
                        $custom_css = '.site-title, .site-description {
                                position: '.$position.';
                                clip: '.$clip.'; 
                        }';
                } else{

                        $custom_css = 'h1.site-title, h2.site-description  {
                                color: #' . $header_text_color . ';                     
                        }';
                }
                wp_add_inline_style( 'delirium-style', $custom_css );
        }
        add_action( 'wp_enqueue_scripts', 'delirium_header_style' );

endif;
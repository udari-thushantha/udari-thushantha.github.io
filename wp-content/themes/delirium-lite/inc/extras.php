<?php
/**
 * Extra functions for this theme.
 *
 * @package Delirium Lite
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */
function delirium_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'delirium_page_menu_args' );
/**
* Defines new blog excerpt length and link text.
*/
if (!is_admin()) {
function delirium_new_excerpt_length($length) {
	return 70;
}
add_filter('excerpt_length', 'delirium_new_excerpt_length');

function delirium_new_excerpt_more($more) {
	global $post;
	return '<div class="belowpost"><a class="more-link" href="'.esc_url(get_permalink($post->ID)) . '">'. esc_html__('Read More', 'delirium-lite') .'</a></div>';
}
add_filter('excerpt_more', 'delirium_new_excerpt_more');

add_filter( 'wp_trim_excerpt', 'delirium_excerpt_metabox_more' );
function delirium_excerpt_metabox_more( $excerpt ) {
	$output = $excerpt;
	
	if ( has_excerpt() ) {
		$output = sprintf( '%1$s <div class="belowpost"><a class="more-link" href="'.esc_url(get_permalink()) . '">'. esc_html__('Read More', 'delirium-lite') .'</a></div>',
			$excerpt,
			get_permalink()
		);
	}
	
	return $output;
}
}
/**
* Adds excerpt support for pages.
*/
add_post_type_support( 'page', 'excerpt');
/**
* Manages display of archive titles.
*/
function delirium_get_the_archive_title( $title ) {
   if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_year() ) {
        $title = get_the_date( _x( 'Y', 'yearly archives date format','delirium-lite' ) );
    } elseif ( is_month() ) {
        $title = get_the_date( _x( 'F Y', 'monthly archives date format','delirium-lite' ) );
    } elseif ( is_day() ) {
        $title = get_the_date( _x( 'F j, Y', 'daily archives date format','delirium-lite' ) );
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    } else {
        $title = esc_html__( 'Archives', 'delirium-lite' );
    }
    return $title;
};
add_filter( 'get_the_archive_title', 'delirium_get_the_archive_title', 10, 1 );

// display custom admin notice
function delirium_admin_notice__success() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php esc_html_e( 'Thanks for installing Delirium Lite! Want more features?','delirium-lite'); ?> <a href="https://www.vivathemes.com/wordpress-theme/delirium/" target="blank"><?php esc_html_e( 'Check out the Pro Version  &#8594;','delirium-lite'); ?></a></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'delirium_admin_notice__success' );

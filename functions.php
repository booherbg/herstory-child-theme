<?php

/* Set up the child theme CSS file so that it gets loaded after the parent CSS */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/theme.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

/* Custom hooks for enqueing the proper CSS files with each HerStory template 
    If you add a new template page, just add a corresponding css enqueue call here */
function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'page-templates/home-template.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/home.css' );
    }
    if ( is_page_template( 'page-templates/about-template.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/about.css' );
    }
    if ( is_page_template( 'page-templates/free-products-template.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/free-products.css' );
    }
    if ( is_page_template( 'page-templates/how-to-donate-template.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/how-to-donate.css' );
    }
    if ( is_page_template( 'page-templates/volunteer-template.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/css/volunteer.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );

/**
 * Replaces logo CSS class. Needed to get rid of wordpress boilerplate.
 *
 * @param string $html Markup.
 *
 * @return mixed
 */
function understrap_change_logo_class( $html ) {
	return $html;
}
?>
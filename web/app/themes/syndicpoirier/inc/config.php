<?php

//======================================================================
// ENQUEUE
//======================================================================

//-----------------------------------------------------
// JQUERY
//-----------------------------------------------------

function fr3_register_assets() {
    
    // Déclarer jQuery
    wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( // On déclare une version plus moderne
        'jquery', 
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
        false, 
        '3.3.1', 
        true 
    );
    
    // ...
}
add_action( 'wp_enqueue_scripts', 'fr3_register_assets' );

//-----------------------------------------------------
// CODY HOUSE ASSETS
//-----------------------------------------------------

function codyFr3_register_styles() {

    $theme_version = wp_get_theme()->get( 'Version' );
  
    wp_enqueue_style( 'codyFr3', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version );
  }
  
  add_action( 'wp_enqueue_scripts', 'codyFr3_register_styles' );
  
  function codyFr3_register_scripts() {
  
    $theme_version = wp_get_theme()->get( 'Version' );
  
    wp_enqueue_script( 'codyFr3', get_template_directory_uri() . '/assets/js/scripts.js', array(), $theme_version, true );
  }
  
  add_action( 'wp_enqueue_scripts', 'codyFr3_register_scripts' );
  
  // no-js support
  function codyFr3_js_support() {
    ?>
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <?php
  }
  
  add_action( 'wp_print_scripts', 'codyFr3_js_support');

  // Fully Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
function remove_block_css() {
wp_dequeue_style( 'wp-block-library' ); // WordPress core
wp_dequeue_style( 'wp-block-library-theme' ); // WordPress core
wp_dequeue_style( 'wc-block-style' ); // WooCommerce
wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
}

/* désactive les emojis de WordPress */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/* Activer la prise en charge du fil d'ariane YOAST */
add_theme_support( 'yoast-seo-breadcrumbs' );
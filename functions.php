<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

/*  ・chld_thm_cfgのエラーが出る

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'twenty-twenty-one-custom-color-overrides','twenty-twenty-one-style','twenty-twenty-one-style','twenty-twenty-one-print-style','tt1-dark-mode' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );
*/

// END ENQUEUE PARENT ACTION


add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('my_style', get_stylesheet_directory_uri() . '/style.css');
  }, 11);

//アイキャッチ画像を有効化
add_theme_support('post-thumbnails');
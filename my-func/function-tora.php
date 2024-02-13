<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.


/***** CSSファイルの読み込み *****/

/* menu.cssの読み込み */
function page_menu()  {
  if ( is_page('menu') ) {
    wp_enqueue_style( 'menu', get_template_directory_uri() . '/tora-style.css/menu.css', array(), '1.0.0' );
    }
  }
add_action( 'wp_enqueue_scripts', 'page_menu' );

/* access.cssの読み込み */
function page_access()  {
  if ( is_page('access') ) {
    wp_enqueue_style( 'access', get_template_directory_uri() . '/tora-style.css/access.css', array(), '1.0.0' );
  }
}
add_action( 'wp_enqueue_scripts', 'page_access' );

/* menu-list.cssの読み込み */
function page_menu_list()  {
  if (is_page('menu-list') ) {
    wp_enqueue_style( 'menu-list', get_template_directory_uri() . '/tora-style.css/menu-list.css', array(), '1.0.0' );
  }
}
add_action( 'wp_enqueue_scripts', 'page_menu_list' );

/* reset.cssの読み込み */
function reset_css()  {
  if ( is_page('reset') ) {
    wp_enqueue_style( 'reset', get_template_directory_uri(), array(), '1.0.0' );
    }
  }
add_action( 'wp_enqueue_scripts', 'reset_css' );
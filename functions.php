<?php

/* 변수 등록 */
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT.'/images');

if(! function_exists('minimal_script')){
  function minimal_script() {
    wp_enqueue_style( 'common-css', THEMEROOT.'/css/common.css' );
    wp_enqueue_style( 'bootstrap', THEMEROOT.'/css/bootstrap-grid.min.css' );
    wp_enqueue_style( 'default', THEMEROOT.'/css/default.css' );
    wp_enqueue_style( 'responsive', THEMEROOT.'/css/responsive.css' );
}
add_action( 'wp_enqueue_scripts', 'minimal_script' );
}

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 add_theme_support( 'post-thumbnails' );
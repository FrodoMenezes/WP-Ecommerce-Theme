<?php

/**
 * Sprintec Theme and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sprintec Theme
 */


 // Função para habilitar a folha de estilos (CSS) + função de "hooks"
function sprintec_theme_scripts(){
 //bootstrap files
 wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '4.4.1', true );
 wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.4.1', 'all' );
 // Theme's main stylesheet                                               // REMOVA ESTAS FUNÇÕES ANTES DE PUBLICAR
 wp_enqueue_style( 'sprintec_theme_style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
}
add_action( 'wp_enqueue_scripts', 'sprintec_theme_scripts' );

// Funcões para incluir menu
function sprintec_theme_config(){
  register_nav_menus(
    array(
        'sprintec_theme_main_menu' => 'Sprintec Theme Main Menu',
        'sprintec_theme_footer_menu' => 'Sprintec Theme Footer Menu'
      )
    );

// Funções de suporte ao woocommerce
    add_theme_support( 'woocommerce', array(
      'thumbnail_image_width' => 255,
      'single_image_width'    => 255,
      'product_grid'          => array(
        'default_rows'      => 10,
        'min_rows'          => 5,
        'max_rows'          => 10,
        'default_columns'   => 1,
        'min_columns'       => 1,
        'max_columns'       => 1,
      )
  ) );
      add_theme_support( 'wc-product-gallery-zoom' );
      add_theme_support( 'wc-product-gallery-lightbox' );
      add_theme_support( 'wc-product-gallery-slider' );

      if (! isset( $content_width ) ) {
        $content_width = 600;
      }
}
add_action( 'after_setup_theme', 'sprintec_theme_config', 0 );

// funções que foram alteradas no arquivo do plugin woocommerce
add_action( 'woocommerce_before_main_content', 'sprintec_theme_open_container_row', 5 );
function sprintec_theme_open_container_row(){
	echo '<div class="container shop-content"><div class="row">';
}

add_action( 'woocommerce_after_main_content', 'sprintec_theme_close_container_row', 5 );
function sprintec_theme_close_container_row(){
	echo '</div></div>';
}

add_action( 'woocommerce_before_main_content', 'sprintec_theme_add_sidebar_tags', 6 );
function sprintec_theme_add_sidebar_tags(){
	echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
}

add_action( 'woocommerce_before_main_content', 'sprintec_theme_close_sidebar_tags', 8  );
function sprintec_theme_close_sidebar_tags(){
	echo '</div>';
}

add_action( 'woocommerce_before_main_content', 'sprintec_theme_add_shop_tags', 9 );
function sprintec_theme_add_shop_tags(){
	echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
}

add_action( 'woocommerce_after_main_content', 'sprintec_theme_close_shop_tags', 4 );
function sprintec_theme_close_shop_tags(){
	echo '</div>';
}

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );
add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

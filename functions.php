<?php

function labb1_theme_support(){
  // Adds dynamic title tag support, post-thumbnails & widgets
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('widgets');

  // Registrera widgetområde
  register_sidebar([

    'name' => 'Testwidgetarea',
    'description' => 'Demo widget',
    'id' => 'testwidget'
  ]);
  register_sidebar([

    'name' => 'Foote Widget',
    'description' => 'Footer Widget',
    'id' => 'widget2'
  ]);
}

add_action('after_setup_theme', 'labb1_theme_support');

// Registrera stylesheets
function labb1_register_styles(){

  $version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style('labb1-fontawesome', get_template_directory_uri(). "./assets/css/font-awesome.css", array(), $version, 'all');
  wp_enqueue_style('labb1-bootstrap', get_template_directory_uri(). "./assets/css/bootstrap.css", array(), $version, 'all');
  wp_enqueue_style('labb1-style', get_template_directory_uri(). "./assets/css/style.css", array(), $version, 'all');

}

add_action( 'wp_enqueue_scripts', 'labb1_register_styles');

// Registrera Js Jquery filer
function labb1_register_scripts(){

  wp_enqueue_script('labb1-jquery', get_template_directory_uri()."/assets/js/jquery.js", array(), '5.0', false );
  wp_enqueue_script('labb1-js', get_template_directory_uri()."/assets/js/script.js", array(), '3.5', true );

}

add_action( 'wp_enqueue_scripts', 'labb1_register_scripts');

// Registrera menyer
function labb1_menus(){

  $locations = array(
  'primary' => "Desktop Primary Top",
  'side-menu' => "Side Menu Items",
  'sidebar-menu' => "Sidebar Menu Items"
  );

  register_nav_menus($locations); 
  }

add_action('init', 'labb1_menus');

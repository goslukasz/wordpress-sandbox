<?php
define('SCRIPT_VERSION', 3);

function load_stylesheets()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap');

  wp_register_style('style', get_template_directory_uri() . '/style.css', [], SCRIPT_VERSION);
  wp_enqueue_style('style');
}

function load_js()
{
  wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', SCRIPT_VERSION);
  wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');
add_theme_support('post-thumbnails');

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

register_nav_menus(
  [
    'top-menu' => __('Supper Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme')
  ]
);

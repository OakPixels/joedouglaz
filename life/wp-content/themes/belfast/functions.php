<?php

function load_stylesheets()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
    array(), false, 'all');
  wp_enqueue_style('mycssname');

  wp_register_style('mycss', get_template_directory_uri() . '/style.css',
    array(), false, 'all');
  wp_enqueue_style('mycss');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_jquery()
{
  wp_deregister_script('jquery');

  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery3.4.1.js',
   '', 1, true);

   add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'load_jquery');


function loadjs()
{
  wp_register_script('myjs', get_template_directory_uri() . '/js/scripts.js',
   '', 1, true);
  wp_enqueue_script('myjs');
}
add_action('wp_enqueue_scripts', 'loadjs');


add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
  )
);

add_image_size('smallest', 200, 200, true);
add_image_size('small', 400, 400, true);
add_image_size('medium', 600, 600, true);
add_image_size('large', 800, 800, true);
add_image_size('largest', 1000, 1000, true);

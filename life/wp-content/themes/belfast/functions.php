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

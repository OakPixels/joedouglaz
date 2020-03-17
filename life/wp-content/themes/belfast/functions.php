<?php

function load_stylesheets()
{
  wp_register_style('mycssname', get_template_directory_uri() . '/css/bootstrap.min.css',
    array(), false, 'all');
  wp_enqueue_style('mycssname')
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

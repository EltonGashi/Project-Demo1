<?php

// Enqueuing
function dynamic_menu_enqueue()
{

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/dist/output.css', array(), '1.0.0', 'all');
    wp_enqueue_style('menustyle', get_template_directory_uri() . '/css/menu.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'dynamic_menu_enqueue');


function menu_setup()
{
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
}
add_action('init', 'menu_setup');
<?php

// Enqueuing
function dynamic_menu_enqueue()
{

        wp_enqueue_style('customstyle', get_template_directory_uri() . '/dist/output.css', array(), '1.0.0', 'all');

        wp_enqueue_script( 'customjs', get_template_directory_uri() . '/services-card-users/load-more.js', array(), '1.0.0', true);

        wp_enqueue_style('menustyle', get_template_directory_uri() . '/css/menu.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'dynamic_menu_enqueue');


function menu_setup()
{
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
}
add_action('init', 'menu_setup');

function font_awesome_cdn() 
{
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css%27');
    wp_enqueue_style('fontawesome');
}

add_action('wp_print_styles', 'font_awesome_cdn');

    
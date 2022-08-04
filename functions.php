<?php

// Enqueuing
    function dynamic_menu_enqueue() {

        wp_enqueue_style('customstyle', get_template_directory_uri() . '/dist/output.css', array(), '1.0.0', 'all');
        	
        wp_enqueue_script( 'customjs', get_template_directory_uri() . '/services-card-users/load-more.js', array(), '1.0.0', true);
    }

    add_action( 'wp_enqueue_scripts', 'dynamic_menu_enqueue');
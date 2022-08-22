<?php

// Enqueuing Template css,js
function dynamic_menu_enqueue()
{
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/components/home/assets/home.js', array(), '1.0.0', true);
    wp_enqueue_script( 'endGamejs', get_template_directory_uri() . '/assets/js/end-game.js', array(), '1.0.0', true);
    
    wp_enqueue_style('menustyle', get_template_directory_uri() . '/assets/css/menu.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'dynamic_menu_enqueue');


//Theme Support
add_theme_support('post-thumbnails');


//Custom Menus
function menu_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
    
}
add_action('init', 'menu_setup');

function font_awesome_cdn()
{
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css');
    wp_enqueue_style('fontawesome');
}

add_action('wp_print_styles', 'font_awesome_cdn');



//Tailwind CSS
add_action( 'wp_enqueue_scripts', 'enqueue_function', 10 );
function enqueue_function() {
	$version = ( wp_get_environment_type() === 'development' ) ? time() : define( 'BIIIRD_THEME_VERSION', '1.0.2' );
	wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/assets/css/main.css', $version, true );
}

//Load More Function

add_action('wp_footer', 'my_action_javascript');

function my_action_javascript() { ?>

    <script type="text/javascript" >
        jQuery(document).ready(function($){

            var page= 2;

            var ajaxurl ="<?php echo admin_url('admin-ajax.php'); ?>";


            jQuery('.loadmore').click(function(){

                var data ={
                    'action': 'my_action',
                    'page': page,
                };

                jQuery.post(ajaxurl , data , function(response) {
                    
                    console.log(page++);

                });
            });
        });
        </script> <?php

}

add_action('wp_ajax_my_action', 'my_action');

function my_action(){
    global $wpdb;

    $whatever = intval( $_POST['whatever'] );

    $whatever += 10;

    echo $whatever;

    wp_die();
}
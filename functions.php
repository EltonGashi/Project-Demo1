<?php

// Enqueuing Template css,js,jquery
function dynamic_menu_enqueue()
{
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/components/home/assets/home.js', array(), '1.0.0', true);
    wp_enqueue_script( 'endGamejs', get_template_directory_uri() . '/assets/js/end-game.js', array(), '1.0.0', true);
    wp_enqueue_script( 'customScript', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
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

            var post_count = jQuery('.users').data('count');

            var ajaxurl ="<?php echo admin_url('admin-ajax.php'); ?>";


            jQuery('.loadmore').click(function(){

                var data ={
                    'action': 'my_action',
                    'page': page
                };

                jQuery.post(ajaxurl , data , function(response) {

                    jQuery('.users').append(response);

                    if(post_count == page){
                        jQuery('.loadmore').text("No more Data");
                    }
                    
                    page++;

                });
            });
        });
        </script> <?php

}

add_action('wp_ajax_nopriv_my_action', 'my_action');


function my_action(){

    $args =array(
        'post_type' => 'post',
        'paged' => $_POST['page'],

    );
    $the_query = new WP_Query( $args); ?>
        <?php if( $the_query->have_posts() ): ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 

            <?php get_template_part('/components/home/card_users/user' , 'cards');?>

        <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php endif; 

    wp_die();
}
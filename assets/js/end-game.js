
/*MODAL HEADER*/

window.addEventListener('DOMContentLoaded', () =>{
    /*Login MODAL*/
    const overlayLogin = document.querySelector('#overlay-login');
    const loginBtn = document.querySelector('#login-btn');
    const closeLogin = document.querySelector('#close-lglogin');
    

    const loginModal = () => {
        overlayLogin.classList.toggle('hidden');
        overlayLogin.classList.toggle('flex');
    };
    loginBtn.addEventListener('click', loginModal);

    closeLogin.addEventListener('click', loginModal);

    /*Register MODAL*/

    const overlayRegister = document.querySelector('#overlay-register');
    const registerBtn = document.querySelector('#register-btn');
    const closeRegister = document.querySelector('#close-lgregister');

    const registerModal = () => {
        overlayRegister.classList.toggle('hidden');
        overlayRegister.classList.toggle('flex');
    };
    registerBtn.addEventListener('click', registerModal);

    closeRegister.addEventListener('click', registerModal);
});


const burgerMenu = document.getElementById("burger");
const navbarMenu = document.getElementById("menu");

// Show and Hide Navbar Menu
burgerMenu.addEventListener("click", () => {
    burgerMenu.classList.toggle("is-active");
    navbarMenu.classList.toggle("is-active");

    if (navbarMenu.classList.contains("is-active")) {
        navbarMenu.style.maxHeight = navbarMenu.scrollHeight + "px";

    } else {
        navbarMenu.removeAttribute("style");
    }
});


function my_action_javascript() { 

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
                    console.log(page);
                    console.log(post_count);
                    if(post_count == page){
                        jQuery('.loadmore').text("No more Data");
                    }
                    
                    page++;

                });
            });
        });
        </script> <?php

}

add_action('wp_ajax_my_action', 'my_action');

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
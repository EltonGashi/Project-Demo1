<?php

// Enqueuing Template css,js,jquery
function dynamic_menu_enqueue()
{
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/components/home/assets/home.js', array(), '1.0.0', true);
    wp_enqueue_script( 'endGamejs', get_template_directory_uri() . '/assets/js/end-game.js', array(), '1.0.0', true);
    wp_enqueue_script( 'loadMore', get_template_directory_uri() . '/assets/js/loadmore.js', array(), '1.0.0', true);
    wp_enqueue_script( 'findTalentsJs', get_template_directory_uri() . '/components/find-talents/assets/find-talents.js', array(), '1.0.0', true);
    wp_enqueue_script( 'customScript', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script( 'endGamejs', get_template_directory_uri() . '/assets/js/responsive-header.js', array(), '1.0.0', true);
    
    wp_enqueue_style('menustyle', get_template_directory_uri() . '/assets/css/menu.css', array(), '1.0.0', 'all');
    wp_enqueue_style('comment style ', get_template_directory_uri() . '/assets/css/comment-style.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'dynamic_menu_enqueue');

    

//Theme Support
add_theme_support('post-thumbnails');


//Custom Menus
function menu_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
    register_nav_menu('social media','Social Media Menu');
    
}
add_action('init', 'menu_setup');

function font_awesome_cdn(){
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css');
    wp_enqueue_style('fontawesome');
}

add_action('wp_print_styles', 'font_awesome_cdn');
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



//Tailwind CSS
add_action( 'wp_enqueue_scripts', 'enqueue_function', 10 );
function enqueue_function() {
	$version = ( wp_get_environment_type() === 'development' ) ? time() : define( 'BIIIRD_THEME_VERSION', '1.0.2' );
	wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/assets/css/main.css', $version, true );
}

//Load More Function


function my_action_javascript() { ?>

    <script type="text/javascript" >
        jQuery(document).ready(function($){
            
            var page  = 2;
            var page1 = 2;
            var page2 = 2;
            var page3 = 2;
            var page4 = 2;
            var page5 = 2; 
            var page6 = 2;
            var page7 = 2;


            var ajaxurl ="<?php echo admin_url('admin-ajax.php'); ?>";
            
            var btns = document.querySelectorAll(".findMore");

            btns.forEach(btn => {
                btn.addEventListener('click', () => {
                var sibling = btn.previousElementSibling; 

                var count = sibling.dataset.count;

                var category = sibling.dataset.label;
                
                if(category=='Java Developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page1,
                    };
                }else if(category=='It Technichian'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page2,
                    };

                }else if(category=='Software Developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page3,
                    };

                }else if(category=='PHP developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page4,
                    };

                }else if(category=='Front End Developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page5,
                    };
                }else if(category=='Python Developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page6,
                    };
                }
                else if(category=='Graphic Designer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page6,
                    };
                }else{
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page,
                    };
                }
                    

                jQuery.post(ajaxurl , data , function(response) {
                    jQuery(sibling).append(response);

                    if(category =='Java Developer'){
                        page1++;
                        console.log(page1);
                        if(count == page1){
                            $(btn).text("No more data");
                        };
                        
                    }else if(category == 'It Technichian'){
                        page2++;
                        if(count == page2){
                            $(btn).text("No more data");
                            $(btn).addClass("disabled");
                        };

                    }else if(category == 'Software Developer'){
                        page3++;
                        if(count == page3){
                            $(btn).text("No more data");
                        };

                    }else if(category == 'PHP developer'){
                        page4++;
                        if(count == page4){
                            $(btn).text("No more data");
                        };

                    }else if(category == 'Front End Developer'){
                        page5++;
                        if(count == page5){
                            $(btn).text("No more data");
                        };

                    }else if(category == 'Python Developer'){
                        page6++;
                        if(count == page6){
                            $(btn).text("No more data");
                        };

                    }else if(category == 'Graphic Designer'){
                        page7++;
                        if(count == page7){
                            $(btn).text("No more data");
                        };
                    }else {
                        if(count == page){
                            $(btn).text("No more data");
                        };
                        page++;
                    }

                }); 

                });
            });

        });

    </script><?php
}
add_action('wp_footer', 'my_action_javascript');


function my_action(){

        $cat = $_POST['cat'];

        if($cat == 'Java Developer'){
            
        $args1 =array(
            'post_type' => 'post',
            'category_name' =>$_POST['cat'],
            'paged' => $_POST['page'],
        ); 
        $the_query1 = new WP_Query( $args1); 
        ?>
        <?php if( $the_query1->have_posts() ): ?>

        <?php while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?> 

            <?php get_template_part('/components/find-talents/developers/java','developer');?>


        <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php endif;
        }else if($cat == 'It Technichian'){
            $args2 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 
            
            $the_query2 = new WP_Query( $args2); ?>
            
            <?php if( $the_query2->have_posts() ): ?>
    
            <?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/it/it','technician');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Software Developer'){
            $args3 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query3 = new WP_Query( $args3); ?>
            
            <?php if( $the_query3->have_posts() ): ?>
    
            <?php while ( $the_query3->have_posts() ) : $the_query3->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/developers/software-developer');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'PHP developer'){
            $args4 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query4 = new WP_Query( $args4); ?>
            
            <?php if( $the_query4->have_posts() ): ?>
    
            <?php while ( $the_query4->have_posts() ) : $the_query4->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/developers/php-developer');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Front End Developer'){
            $args5 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query5 = new WP_Query( $args5); ?>
            
            <?php if( $the_query5->have_posts() ): ?>
    
            <?php while ( $the_query5->have_posts() ) : $the_query5->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/developers/front-end-developer');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Python Developer'){
            $args6 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query6 = new WP_Query( $args6); ?>
            
            <?php if( $the_query6->have_posts() ): ?>
    
            <?php while ( $the_query6->have_posts() ) : $the_query6->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/developers/python-developer');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Graphic Designer'){
            $args7 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query7 = new WP_Query( $args7 ); ?>
            
            <?php if( $the_query7->have_posts() ): ?>
    
            <?php while ( $the_query7->have_posts() ) : $the_query7->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/designers/graphic','designers');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else{
            $args =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page']+1,
            ); 
            
            $the_query = new WP_Query( $args); ?>
            
            <?php if( $the_query->have_posts() ): ?>
    
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
    
                <?php get_template_part('/components/home/card_users/user' , 'cards');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;

        }
        wp_die();
}

add_action('wp_ajax_nopriv_my_action', 'my_action');
add_action('wp_ajax_my_action', 'my_action'); 


add_role(
    'freelancer', //  Emri i Rolit
    __( 'Freelancer'  ), 
    array(
        'read'  => true,
        'delete_posts'  => true,
        'delete_published_posts' => true,
        'edit_posts'   => false,
        'publish_posts' => true ,
        'edit_published_posts'   => true,
        'upload_files'  => true,
        'moderate_comments'=> true, // 
    )
);

// function post_published_limit( $ID, $post ) {
//     $max_posts = 1; // change this or set it as an option that you can retrieve.
//     $author = $post->post_author; // Post author ID.
//     $count = count_user_posts( $author, 'post'); // get author post count

//     if ( $count > $max_posts ) {
//         // count too high, let's set it to draft.
//         $post->post_status = 'draft';
//         wp_update_post( $post);
//     }
// }
add_action( 'publish_post', 'post_published_limit', 10, 2 );

function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>

        <div class="comment-author vcard"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
            printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
        </div><?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
        } ?>

        <div class="comment-meta commentmetadata">
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                printf( 
                    __('On %1$s at %2$s'), 
                    get_comment_date(),  
                    get_comment_time() 
                ); ?>
            </a><?php 
            edit_comment_link( __( 'Edit' ), '  ', '' ); ?>
        </div>
        <?php comment_text(); ?>
        <div class="reply">
            <?php comment_reply_link( array_merge($args, array(
    'reply_text' => __('Reply <span>&darr;</span>', 'textdomain'),
    'depth'      => $depth,
    'max_depth'  => $args['max_depth']
    )
)); ?>
        </div><?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer Left',
        'id'   => 'footer-left-widget',
        'description'   => 'Left Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));
    register_sidebar(array(
        'name' => 'Footer Left Center',
        'id'   => 'footer-left-center-widget',
        'description'   => 'Left Center Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Footer Right Center',
        'id'   => 'footer-center-widget',
        'description'   => 'Centre Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Footer Right',
        'id'   => 'footer-right-widget',
        'description'   => 'Right Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));


}
<?php
/*
    Template Name: Find Talents
*/

get_header();?>

<?php 

$args_cat = array(
    'include' => 11,
);

$categories = get_categories($args_cat);
foreach($categories as $category):

    $args = array(
        'type'=>'post',
        'posts_per_page' => 4,
        // 'offset' =>1,
        /*'category' ='1'*/
        'category__in' => $category->term_id ,
        // 'category__not_in' => array(1),
    );

    $lastBlog = new WP_Query($args);

    if( $lastBlog->have_posts()):

        while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
            
            <?php get_template_part('/components/home/card_users/user' , 'cards');?>
            
        <?php endwhile;

        wp_reset_postdata();

    endif;
endforeach;
?>

<?php get_footer();?>
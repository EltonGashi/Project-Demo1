<?php
/*
    Template Name: Find Jobs
*/

get_header();?>


<div>UNCER CONSTRUction</div>
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
            
            
        <?php endwhile;

        wp_reset_postdata();

    endif;
endforeach;
?>

<?php get_footer();?>
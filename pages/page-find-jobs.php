<?php
/*
    Template Name: Find Jobs
*/

get_header();?>


<div class="container bg-bg p-20 ">
    <div class="coming-soon bg-black flex flex-col justify-center mx-auto rounded-xl relative">
        <img class="h-full w-full object-scale-down" src="<?php echo get_template_directory_uri(); ?>/assets/img/HeaderImages/Repeat Grid 8.png" />
        <h1 class="text-7xl text-white absolute justify-center">Coming Soon</h1>
    </div>
    
    
</div>
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
<?php get_header();?>

    <!-- ////////////// CONTAINER-START ////////////// -->
<div class="container bg-bg p-20">

        <?php if(have_posts()):
        
            while( have_posts() ): the_post(); ?>
                
                
                <div class="text-3xl flex justify-center"><?php the_title(); ?>  </div>
                
                <div class="user-post">

                 <?php if(has_post_thumbnail() ):?>
                    <div class="flex justify-center w-full h-full my-16">  <?php the_post_thumbnail('large'); ?> </div> 
                <?php endif; ?>
                <small class=""><?php the_category(' '); ?>|| <?php the_tags(); ?> || <?php edit_post_link(); ?></small>

                <div class="my-16"><?php the_content(); ?> </div>

                <hr>

                <?php if(comments_open() ){
                    ?> <div class=""> <?php
                     comments_template(); ?> </div> <?php
                     } else {
                        echo '<h5 class ="text-center my-16"> Sorry , Comments are Closed!</h5>';
                     } ?>
                </div>
            <?php endwhile;

        endif;
        ?>

<div class="my-16"><?php the_category(); ?></div>

<section id="users">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">

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
        </div>

    </section>

</div>


<?php get_footer();?>
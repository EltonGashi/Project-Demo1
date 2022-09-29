<?php
/*
    Template Name: Find Jobs
*/

get_header();?>
<div class="container bg-bg p-20">
    
    <section id="Front End Development" class="py-10">

        <h1 class="text-3xl py-5">Front End Development</h1>
        
            <?php

                $args1 = array(
                    'post_type' => 'company',
                    'post_status' => 'publish',
                    'category_name' => 'Front End Development',
                    'posts_per_page' => 4,
                );

                $the_query1 = new WP_Query($args1);?>
                <div class="users grid 2xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query1->found_posts/2); ?>" data-label="Front End Development"><?php
                if( $the_query1->have_posts()):

                    while( $the_query1->have_posts() ): $the_query1->the_post(); ?>

                        <?php get_template_part('/components/find-jobs/jobs-card/companies','card');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;

            ?>
        </div>
        <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>

    </section>

    <section id="Back End Development" class="py-10">

        <h1 class="text-3xl py-5">Back End Development</h1>
        
            <?php

                $args1 = array(
                    'post_type' => 'company',
                    'post_status' => 'publish',
                    'category_name' => 'Back End Development',
                    'posts_per_page' => 4,
                );

                $the_query1 = new WP_Query($args1);?>
                <div class="users grid 2xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query1->found_posts/2); ?>" data-label="Back End Development"><?php
                if( $the_query1->have_posts()):

                    while( $the_query1->have_posts() ): $the_query1->the_post(); ?>

                        <?php get_template_part('/components/find-jobs/jobs-card/companies','card');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;

            ?>
        </div>
        <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>

    </section>

    <section id="Full Stack Development" class="py-10">

        <h1 class="text-3xl py-5">Full Stack Development</h1>
        
            <?php

                $args1 = array(
                    'post_type' => 'company',
                    'post_status' => 'publish',
                    'category_name' => 'Full Stack Development',
                    'posts_per_page' => 4,
                );

                $the_query1 = new WP_Query($args1);?>
                <div class="users grid 2xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query1->found_posts/2); ?>" data-label="Full Stack Development"><?php
                if( $the_query1->have_posts()):

                    while( $the_query1->have_posts() ): $the_query1->the_post(); ?>

                        <?php get_template_part('/components/find-jobs/jobs-card/companies','card');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;

            ?>
        </div>
        <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>

    </section>

</div>

<?php get_footer();?>
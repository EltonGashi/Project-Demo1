<?php
/*
    Template Name: Find Talents
*/

get_header();?>
<div class="container bg-bg p-20">
    
    <section id="Java Developer" class="py-10">

        <h1 class="text-3xl py-5">Java Developer</h1>
        
            <?php

                $args1 = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'Java Developer',
                    'posts_per_page' => 4,
                );

                $the_query1 = new WP_Query($args1);?>
                <div class="users grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query1->found_posts/2); ?>" data-label="Java Developer"><?php
                if( $the_query1->have_posts()):

                    while( $the_query1->have_posts() ): $the_query1->the_post(); ?>

                        <?php get_template_part('/components/find-talents/developers/java','developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;

            ?>
        </div>
        <div class="findMore flex items-center justify-center pt-12">
            <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Load More</button>
        </div>
    </section>

    
    <section id="It Technichian" class="py-10">
        <h1 class="text-3xl py-5">It Technichian</h1>
        
            <?php

                $args2 = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'It Technichian',
                    'posts_per_page' => 4,
                );

                $the_query2 = new WP_Query($args2); ?>
                <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query2->found_posts/2); ?>" data-label="It Technichian"><?php

                if( $the_query2->have_posts()):

                    while( $the_query2->have_posts() ): $the_query2->the_post(); ?>

                        <?php get_template_part('./components/find-talents/it/it','technician');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            ?>

        </div>
        <div class="findMore flex items-center justify-center pt-12">
            <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Load More</button>
        </div>
    </section>

    
    <section id="Software Developer" class="py-10">
        <h1 class="text-3xl py-5">Software Developer</h1>
        
            <?php

                $args3 = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'Software Developer',
                    'posts_per_page' => 4,
                );

                $the_query3 = new WP_Query($args3);?>
                <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query3->found_posts/2); ?>" data-label="Software Developer"><?php

                if( $the_query3->have_posts()):

                    while( $the_query3->have_posts() ): $the_query3->the_post(); ?>
                        
                        <?php get_template_part('./components/find-talents/developers/software-developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            ?>
        </div>
        <div class="findMore flex items-center justify-center pt-12">
            <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Load More</button>
        </div>
    </section>

    
    <section id="PHP Developer" class="py-10">
    <h1 class="text-3xl py-5">PHP Developer</h1>
        
            <?php

                $args4 = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'PHP developer',
                    'posts_per_page' => 4,
                );
                
                $the_query4 = new WP_Query($args4);?>
                <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query4->found_posts/2); ?>" data-label="PHP developer"><?php

                if( $the_query4->have_posts()):

                    while( $the_query4->have_posts() ): $the_query4->the_post(); ?>
                    
                        
                        <?php get_template_part('./components/find-talents/developers/php-developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            ?>
        </div>
        <div class="findMore flex items-center justify-center pt-12">
                <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Load More</button>
            </div>
    </section>

    
    <section id="fFront End Developer" class="py-10">
    <h1 class="text-3xl py-5">Front End Developer</h1>
        
            <?php

                $args5 = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'Front End Developer',
                    'posts_per_page' => 4,
                );
                $the_query5 = new WP_Query($args5);?>
                <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query5->found_posts/2); ?>" data-label="Front End Developer">
                <?php

                if( $the_query5->have_posts()):

                    while( $the_query5->have_posts() ): $the_query5->the_post(); ?>
                    
                        
                        <?php get_template_part('./components/find-talents/developers/front-end-developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            ?>
        </div>
        <div class="findMore flex items-center justify-center pt-12">
                <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Load More</button>
        </div>
    </section>

    
    <section id="Python Developer" class="py-10">
    <h1 class="text-3xl py-5">Python Developer</h1>
        
            <?php

                $args6 = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'Python Developer',
                    'posts_per_page' => 4,
                );

                $the_query6 = new WP_Query($args6); ?>
                <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query6->found_posts/2); ?>" data-label="Python Developer">
                <?php
                if( $the_query6->have_posts()):

                    while( $the_query6->have_posts() ): $the_query6->the_post(); ?>
                        
                        <?php get_template_part('./components/find-talents/developers/python-developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            ?>
        </div>
        <div class="findMore flex items-center justify-center pt-12">
                <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Load More</button>
            </div>
    </section>

    
    <section id="Graphic Designer" class="py-10">
    <h1 class="text-3xl py-5" >Graphic Designers</h1>
        
            <?php

                $args7 = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'Graphic Designer',
                    'posts_per_page' => 4,
                );

                $the_query7 = new WP_Query($args7);
                ?>
                <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query7->found_posts/2); ?>" data-label="Graphic Designer"><?php

                if( $the_query7->have_posts()):

                    while( $the_query7->have_posts() ): $the_query7->the_post(); ?>
                        
                        <?php get_template_part('./components/find-talents/designers/graphic','designers');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            ?>
        </div>
        <div class="findMore flex items-center justify-center pt-12">
                <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Load More</button>
            </div>
    </section>
</div>

<?php get_footer();?>
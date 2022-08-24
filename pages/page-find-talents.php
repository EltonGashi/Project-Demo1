<?php
/*
    Template Name: Find Talents
*/

get_header();?>
<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">Java Developer</h1>
    <section id="java-developer">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '15',
            );

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'Java Developer',
                    'posts_per_page' => 4,
                );
                global $post;
                
                
                
                $lastBlog = new WP_Query($args);
                if( $lastBlog->have_posts()):


                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        
                        <?php get_template_part('/components/find-talents/developers/java','developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
        </div>
        <div class="findMore flex items-center justify-center pt-5">
            <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Find more creators</button>
        </div>
    </section>
</div>

<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">It Technichian</h1>
    <section id="java-developer ">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '16',
            );

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'it-technichian',
                    'posts_per_page' => 4,
                );

                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts()):

                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

                        <?php get_template_part('./components/find-talents/it/it','technician');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
            </div>
            <div class="findMore flex items-center justify-center pt-5">
                <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Find more creators</button>
            </div>
        
    </section>
</div>

<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">Software Developer</h1>
    <section id="java-developer">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '10',
            );

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'software-developer',
                    'posts_per_page' => 4,
                );

                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts()):

                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        
                        <?php get_template_part('./components/find-talents/developers/software-developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
        </div>
        <div class="findMore flex items-center justify-center pt-5">
            <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Find more creators</button>
        </div>
    </section>
</div>

<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">PHP Developer</h1>
    <section id="java-developer">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '16',
            );

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'PHP developer',
                    'posts_per_page' => 4,
                );
                
                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts()):

                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                    
                        
                        <?php get_template_part('./components/find-talents/developers/php-developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
        </div>
        <div class="findMore flex items-center justify-center pt-5">
                <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Find more creators</button>
            </div>
    </section>
</div>

<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">Front End Developer</h1>
    <section id="java-developer">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '18',
            );

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'Front End Developer',
                    'posts_per_page' => 4,
                );

                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts()):

                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                    
                        
                        <?php get_template_part('./components/find-talents/developers/front-end-developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
        </div>
        <div class="findMore flex items-center justify-center pt-5">
                <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Find more creators</button>
            </div>
    </section>
</div>

<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">Python Developer</h1>
    <section id="java-developer">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '18',
            );

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'python-developer',
                    'posts_per_page' => 4,
                );

                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts()):

                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        
                        <?php get_template_part('./components/find-talents/developers/python-developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
        </div>
        <div class="findMore flex items-center justify-center pt-5">
                <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Find more creators</button>
            </div>
    </section>
</div>

<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">Graphic Designers</h1>
    <section id="java-developer">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '17',
            );

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'graphic-designer',
                    'posts_per_page' => 4,
                );

                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts()):

                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        
                        <?php get_template_part('./components/find-talents/designers/graphic','designers');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
        </div>
        <div class="findMore flex items-center justify-center pt-5">
                <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Find more creators</button>
            </div>
    </section>
</div>

<?php get_footer();?>
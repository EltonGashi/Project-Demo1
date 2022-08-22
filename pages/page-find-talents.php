<?php
/*
    Template Name: Find Talents

*/

get_header();?>
<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">Java Developers</h1>
    <section id="java-developer">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '1 11 10',
            );

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'Java Developer',
                    'posts_per_page' => 4,
                );

                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts()):

                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        
                        <?php get_template_part('/components/FindTalents/Developers/java','developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
        </div>
    </section>
</div>

<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">Web Developers</h1>
    <section id="java-developer">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '1 11 10',
            );

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'Web Developer',
                    'posts_per_page' => 4,
                );

                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts()):

                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        
                        <?php get_template_part('./components/FindTalents/Developers/web','developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
        </div>
    </section>
</div>

<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">Software Developer</h1>
    <section id="java-developer">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '1 11 10',
            );

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'Software Developers',
                    'posts_per_page' => 4,
                );

                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts()):

                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        
                        <?php get_template_part('./components/FindTalents/Developers/software-developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
        </div>
    </section>
</div>

<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">PHP Developer</h1>
    <section id="java-developer">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '1 11 10',
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
                        
                        <?php get_template_part('./components/FindTalents/Developers/php-developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
        </div>
    </section>
</div>

<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">Front End Developer</h1>
    <section id="java-developer">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '1 11 10',
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
                        
                        <?php get_template_part('./components/FindTalents/Developers/front-end-developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
        </div>
    </section>
</div>

<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">Back End Developer</h1>
    <section id="java-developer">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '1 11 10',
            );

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'Back End Developer',
                    'posts_per_page' => 4,
                );

                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts()):

                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        
                        <?php get_template_part('./components/FindTalents/Developers/back-end-developer');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
        </div>
    </section>
</div>

<div class="container bg-bg p-20">
    <h1 class="text-3xl py-5">Graphic Designers</h1>
    <section id="java-developer">
        <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php
            $args_cat = array(
                'include' => '1 11 10',
            );

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'Graphic Design',
                    'posts_per_page' => 4,
                );

                $lastBlog = new WP_Query($args);

                if( $lastBlog->have_posts()):

                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        
                        <?php get_template_part('./components/FindTalents/Developers/graphic','designers');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;
            endforeach;
            ?>
        </div>
    </section>
</div>

<?php get_footer();?>
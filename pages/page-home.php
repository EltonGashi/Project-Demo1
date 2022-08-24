<?php
/*
 * Template Name: Home
 * Template Post Type: post, page, product
 */   
 get_header(); 
  ?>

    <!-- ////////////// CONTAINER-START ////////////// -->
<div class="container bg-bg p-20">
    <h1 class="text-4xl py-5">Services from Users</h1>
    <section id="users" class="py-10">
        
        
            <?php 

            $args1 =array(
                'post_type' => 'post',
                'posts_per_page' => -1,

            );
            $the_query1 = new WP_Query( $args1); 

            $args =array(
                'post_type' => 'post',
                'paged' => get_query_var('paged',1),
                'posts_per_page' => 8,
                // 'offset' =>1,
                /*'category' ='1'*/
                //'paged'=> 1,
                //'post_status' => 'publish',
                //'category__in' => $category->term_id ,
                // 'category__not_in' => array(1),

            );
            $the_query = new WP_Query( $args); ?>
            <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query1->found_posts/2); ?>">
            <?php if( $the_query->have_posts() ): ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php get_template_part('/components/home/card_users/user' , 'cards');?>
                    
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php endif; ?>

            </div>
        
        <div class="findMore flex items-center justify-center pt-5">
            <button class="loadmore border  border-customGreen p-2 px-4 rounded-xl">Find more creators</button>
        </div>

        
    </section>
        

        <?php
        $title= get_field('title');
        $subtitle= get_field('sub_title');
        ?>



    <section id="services" class="py-20">
        <div id="headings" class="block text-center py-8 xl:text-5xl lg:text-4xl md:text-3xl sm:text-3xl">
            <div class="txt-1">
                <h1 class=""><?php echo $title; ?></h1>
            </div> 
            <div id="txt-2" class="inline-flex">
                <h1 class="text-customGreen "><?php echo $subtitle; ?></h1>
            </div>
        </div>
            
        <div id ="services" class="grid xl:grid-cols-4  gap-24 py-8 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 sm:gap-8">
            <?php if( have_rows('content_section_one') ): ?>

                <?php while( have_rows('content_section_one') ): the_row();?>

                    <?php if(get_row_layout() == 'image_with_text'): ?>

                        <?php get_template_part('/components/home/many_solutions/section' , 'imagewithtext');?>

                    <?php endif;?>

                <?php endwhile;?>

            <?php endif;?>
        </div>
    </section>

</div>


    <section id="NeedSomethingDone" class="bg-bg">
        <?php get_template_part('/components/home/NeedSomethingDone/dynamic' , 'cards');?>
    </section>

<div class="container bg-bg p-20">

    <section id="categories " class="py-20">
        <?php get_template_part('/components/home/categories/section' , 'categories');?>
    </section>
</div>
<!-- /////////// END OF CONTAINER ///////// -->

<?php get_footer(); ?>


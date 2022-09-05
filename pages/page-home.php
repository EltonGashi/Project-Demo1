<?php
/*
 * Template Name: Home
 * Template Post Type: post, page, product
 */   
 get_header(); 
  ?>

    <!-- ////////////// CONTAINER-START ////////////// -->
<div class="container w-full bg-bg p-20">
    <h1 class="text-4xl py-5">Services from Users</h1>
    <section id="users" class="py-10">
            <?php 

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
            $the_query = new WP_Query( $args); 

            ?>
            <div class="users  grid 2xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query->found_posts/2); ?>">
            <?php if( $the_query->have_posts() ): ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php get_template_part('/components/home/card_users/user' , 'cards');?>
                    
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php endif; ?>

            </div>
            <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>
        
    </section>
        

        <?php
        $title= get_field('title');
        $subtitle= get_field('sub_title');
        ?>



    <section id="services" class="py-20">
        <div id="headings" class="block text-center py-8 ">
            <div class="md:text-2xl text-6xl">
                <h1 class=""><?php echo $title; ?></h1>
            </div> 
            <div id="txt-2" class="md:text-2xl text-6xl">
                <h1 class="text-customGreen "><?php echo $subtitle; ?></h1>
            </div>
        </div>
            
        <div id ="services" class="grid 2xl:grid-cols-4  xl:grid-cols-4  gap-8 py-8 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 sm:gap-8">
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


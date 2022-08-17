<?php 
/*
    Template Name:  Home
*/
get_header(); ?>

    <!-- ////////////// CONTAINER-START ////////////// -->
<div class="container bg-bg p-20">
        <section id="users">
            <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">
            <?php if(have_posts()):
        
                while( have_posts() ): the_post(); ?>
            
                    <?php get_template_part('/components/home/card_users/user' , 'cards');?>
            
                <?php endwhile;

            endif;
            ?>

        </section>
        


                





    <?php
    $title= get_field('title');
    $subtitle= get_field('sub_title');
    ?>



        <section id="services" class="">
            <div id="headings" class="block text-center py-8 xl:text-5xl lg:text-4xl md:text-3xl sm:text-3xl">
                <div class="txt-1">
                    <h1 class=""><?php echo $title; ?></h1>
                </div> 
                <div id="txt-2" class="inline-flex">
                    <!-- <h1 class="px-5 "></h1> -->
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
        <section id="NeedSomethingDone">
        <?php get_template_part('/components/home/NeedSomethingDone/dynamic' , 'cards');?>
        </section>
        
<div class="container bg-bg p-20">
        <section id="categories">
        <?php get_template_part('/components/home/categories/section' , 'categories');?>
        </section>

</div>
<!-- /////////// END OF CONTAINER ///////// -->

<?php get_footer(); ?>


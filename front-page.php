<?php get_header();?>

<section class="bg-bg p-20">
    <div id="headings" class="block text-center py-8 xl:text-5xl lg:text-4xl md:text-3xl sm:text-3xl">
        <div class="txt-1">
            <h1 class=""><?php the_title(); ?></h1>
        </div> 
        <div id="txt-2" class="inline-flex">
            <h1 class="px-5 ">Many</h1>
            <h1 class="text-txtGreen ">Solutions</h1>
        </div>
    </div>
    <div id ="services" class="grid xl:grid-cols-4  gap-24 py-8 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 sm:gap-8">
        <?php if( have_rows('content') ): ?>

                <?php while( have_rows('content') ): the_row();?>

                        <?php if(get_row_layout() == 'image_with_text'): ?>

                             <?php get_template_part('many_solutions/section' , 'imagewithtext');?>

                        <?php endif;?>

                <?php endwhile;?>


        <?php endif;?>

    </div>
</section>
<?php get_footer();?>
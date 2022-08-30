    <!-- <div class="container text-center w-full">
        <div class="background-img w-full"> 
            <img class="w-full" src="<?php echo get_template_directory_uri(); ?>./components/home/NeedSomethingDone/img/group-26.png" alt="">
        </div>
        <div class="xl:top-40 lg:top-28 md:top-20 sm:top-12  w-full">
            <h1 class="relative font-courgette xl:text-4xl lg:text-2xl md:text-xl text-white drop-shadow-2lg">Need something done ?</h1>
        </div>
    </div> -->
    
    <div class="container h-full">
        <div class="image-background flex">
            <img class="w-full" src="<?php echo get_template_directory_uri(); ?>./components/home/NeedSomethingDone/img/group-26.png" alt="">
        </div>
        <div class=" xl:-mt-56 lg:-mt-36 md:-mt-28 sm:-mt-20 xl:mb-56 lg:mb-36 md:mb-28 sm:mb-16  w-full">
            <h1 class="w-full text-center font-courgette xl:text-4xl lg:text-2xl md:text-xl text-white drop-shadow-2lg">Need something done ?</h1>
        </div>
    </div>
    <div class="container p-20 w-full">
        <?php if(have_rows('cards')):?>
            <div class="grid w-full grid-cols-1 md:grid-cols-2  xl:grid-cols-4 gap-16 md:gap-8">
                <?php while(have_rows('cards')):the_row();
                    $image=get_sub_field('icons');
                    $picture=$image['sizes']['thumbnail'];
                ?>
                <div class="card border-solid w-10/12">
                <div class="flex justify-around w-full">
                <img class="object-scale-down" src="<?php echo $picture;?>">
                    <h5 class="mt-3 text-2xl font-semibold tracking-tight xl:text-xl lg:text-xl md:text-lg "><?php the_sub_field('title');?></h5>
                </div>    
                    <p class="text-center mt-4"><?php the_sub_field('content');?></p>
                </div> 
                <?php endwhile;?>
            </div>
        <?php endif;?>
    </div>
</div>
<section class="bg-bg">
    <div class="container relative text-center w-full">
        <div class="background-img w-full">
            <img class="w-full" src="<?php echo get_template_directory_uri(); ?>./components/home/NeedSomethingDone/img/Group 26.png" alt="">
        </div>
        <br>
        <div class="absolute top-44 xl:top-52 w-full">
            <h1 class="font-courgette text-4xl text-white drop-shadow-2lg">Need something done ?</h1>
        </div>
    </div>
    <div class="container p-20 w-full">
        <?php if(have_rows('cards')):?>
            <div class="grid w-full grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-16">
                <?php while(have_rows('cards')):the_row();
                    $image=get_sub_field('icons');
                    $icon=$image['sizes']['thumbnail'];
                ?>
                <div class="card border-solid w-10/12">
                <div class="flex justify-between w-10/12">
                <img src="<?php echo $icon;?>">
                    <h5 class="mt-3 text-2xl font-semibold tracking-tight xl:text-xl lg:text-base"><?php the_sub_field('title');?></h5>
                </div>    
                    <p class="mt-4"><?php the_sub_field('content');?></p>
                </div> 
                <?php endwhile;?>
            </div>
        <?php endif;?>
    </div>
</section>

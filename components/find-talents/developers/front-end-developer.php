<div class="user-card bg-white rounded-3xl">
    <div class="user-thumbnail">
        <?php the_post_thumbnail('large'); ?>
    </div>
        <?php  if(have_rows('profile')):?>
            <?php while( have_rows('profile')): the_row(); 
                $image = get_sub_field('image');
                ?>

            <?php endwhile;?>
        <?php endif;?>
    <div class="user p-2 ">
        <div class="user-info flex mb-2 items-center">
            <div class="img pr-5 ">
                <img src="<?php echo $image['url'];?>" class="w-10 h-10 rounded-full" />
            </div>
            <div class="user-name text-basic font-semibold">
                <?php the_title(); ?>
            </div>
        </div>

        <div class="user-content text-basic mb-5">
            <?php echo wp_trim_words( get_the_content(), 10 ); ?>
        </div>

                <!--- Rating --->

                <?php  if(have_rows('rating')):?>

                    <?php while( have_rows('rating')): the_row(); ?>

                     
        <div class="rating flex items-center mb-5 text-sm font-semibold">
            <p class="text-sm font-semibold"><?php the_sub_field('number'); ?></p>
        </div>
                    
                    <?php endwhile;?>
                    <?php endif;?>

        <button type="button" class="ml-48 text-white bg-green-700 hover:bg-green-800  rounded-full text-xs px-4 py-2 text-center justify-self-end">
            <?php $link = get_permalink();  ?>
            <p class="w-full"><?php print '<a href="'.$link.'">More Info ...</a>' ?></p>  
        </button>
                
    </div>
</div>



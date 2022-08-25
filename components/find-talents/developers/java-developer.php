<div class="user-card bg-white rounded-3xl">
            <div class="user-thumbnail">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <div class="user p-2 ">
                <div class="user-info flex mb-2  items-center">
                    <div class="img pr-5 ">
                        <img class="w-10 h-10" src="<?php echo get_template_directory_uri(); ?>./assets/img/UserImages/ellipse1.png">
                    </div>
                    <div class="user-name text-basic">
                        <?php the_title(); ?>
                    </div>
                </div>

                <div class="user-content text-basic mb-5">
                    <?php echo wp_trim_words( get_the_content(), 5 ); ?>
                </div>

                <div class="rating flex items-center mb-5">
                    <div class="star pr-2">
                        <img class="w-5 h-5" src="<?php echo get_template_directory_uri(); ?>./assets/img/UserImages/Star.png">
                    </div>
                    <div class="rating flex items-center">
                        <p class="text-sm font-semibold">5.0</p>
                    </div>
                </div>
                
                <button type="button" class="ml-48 text-white bg-green-700 hover:bg-green-800  rounded-full text-xs px-4 py-2 text-center justify-self-end">
                    <?php $link = get_permalink();  ?>
                    <p><?php print '<a href="'.$link.'">More Info ...</a>' ?></p>  
                </button>
                
            </div>
        </div>



<div class="user-card bg-white rounded-3xl">
            <div class="user-thumbnail">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <div class="user p-2 ">
                <div class="user-info flex mb-2">
                    <div class="img pr-5">
                        <img class="w-10 h-10" src="<?php echo get_template_directory_uri(); ?>./assets/img/UserImages/ellipse1.png">
                    </div>
                    <div class="user-name text-basic">
                        <?php the_title(); ?>
                    </div>
                </div>

                <div class="user-content text-basic mb-5">
                    <?php the_content();?>
                </div>

                <div class="rating flex items-center mb-5">
                    <div class="star pr-2">
                        <img class="w-5 h-5" src="<?php echo get_template_directory_uri(); ?>./assets/img/UserImages/Star.png">
                    </div>
                    <div class="rating flex items-center">
                        <p class="text-sm font-semibold">5.0</p>
                        <p class="text-xs text-slate-500">(49)</p>
                    </div>
                </div>
                
                <div class="hr w-full border border-black mb-5"></div>

                <div class="flex items-center justify-between mt-4">
                    <img class="w-5 h-5 mt-4" src="<?php echo get_template_directory_uri(); ?>./assets/img/UserImages/Heart.png">
                    <button type="button" class="text-white bg-green-700 hover:bg-green-800  rounded-full text-xs px-4 py-2 text-center flex items-center ">
                    Like and start talk
                    <img src="<?php echo get_template_directory_uri(); ?>./assets/img/UserImages/like.png">
                    </button>
                </div>
                

            </div>
        </div>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->


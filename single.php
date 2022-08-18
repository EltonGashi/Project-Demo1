<?php get_header();?>

    <!-- ////////////// CONTAINER-START ////////////// -->
<div class="container bg-bg p-20">

        <?php if(have_posts()):
        
            while( have_posts() ): the_post(); ?>
                
                <div class="user-post">

                 <?php the_title(); ?>  

                <?php if(has_post_thumbnail() ):?>
                    <?php the_post_thumbnail('thumbnail'); ?>
                <?php endif; ?>
                <small><?php the_category(' '); ?>|| <?php the_tags(); ?> || <?php edit_post_link(); ?></small>

                <?php the_content(); ?>

                <?php if(comments_open() ){
                    ?> <div class="class"><?php
                     comments_template(); ?></div><?php
                     } else {
                        echo '<h5 class ="text-center"> Comments are Closed!</h5>';
                     } ?>
                </div>
            <?php endwhile;

        endif;
        ?>

        <div class="d"><?php the_category();?>

        </div>



</div>
<?php get_footer();?>
<?php get_header();?>

    <!-- ////////////// CONTAINER-START ////////////// -->
<div class="container bg-bg p-20">
    
    <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">



            
    <?php if(have_posts()):
    
        while( have_posts() ): the_post(); ?>
            
            <?php get_template_part('components/home/card_users/user' ,'cards');?>
            
        <?php endwhile;

    endif;
    ?>
</div>
<?php get_footer();?>
<?php 
/*
    Template Name: Contact Us
*/
get_header();?>

<?php get_header();?>

    <?php if(have_posts()):
    
        while( have_posts()): the_post(); ?>
            <div class="container bg-bg p-20">
                    
                    
                
                <section class="contact font-sans flex lg:flex-col lg:items-center  h-full gap-12">
                    <div class="forms text-center 2xl:w-2/4 xl:w-2/4 lg:w-11/12 sm:w-full h-full">
                        <h1 class="text-4xl mb-12 font-semibold"><?php the_title();?></h1>
                        <?php the_content();?>     
                    </div>  
                    <div class="why-us text-center h-full 2xl:w-2/4 xl:w-2/4 lg:w-11/12 sm:w-full">
                    <h1 class="text-4xl font-semibold mb-12 lg:mb-6">Why Us ?</h1>
                        <p class="text-xl lg:text-lg">Our company has been working in the market for decades. Our company is very dedicated for helping clients .  </p>
                        <div class="img flex justify-center mt-8">
                        <img class=" w-2/3 h-2/4 object-scale-down rounded-3xl" src="<?php echo get_template_directory_uri(); ?>/assets/img/ContactImages/contact-us2.png" />
                        </div>
                    </div>
                    
                </section>
            </div>
        <?php endwhile;

    endif;
    ?>

<?php get_footer();?>
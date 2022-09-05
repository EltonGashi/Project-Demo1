<?php 
/*
    Template Name: Contact Us
*/
get_header();?>

<?php get_header();?>

    <?php if(have_posts()):
    
        while( have_posts()): the_post(); ?>
            <div class="container bg-bg p-20">
                    
                    
                
                <section class="contact font-sans flex  h-screen">
                    <div class="forms text-center w-2/4">
                        <h1 class="text-5xl mb-12   "><?php the_title();?></h1>
                        <?php the_content();?>     
                    </div>  
                    <div class="why-us text-center w-2/4">
                    <h1 class="text-5xl mb-12">Why Us ?</h1>
                        <p class="text-xl">Our company has been working in the market for decades. Our company is very dedicated for helping clients .  </p>
                        <div class="img ">
                        <img class=" w-full h-2/4 object-scale-down rounded-3xl" src="<?php echo get_template_directory_uri(); ?>/assets/img/ContactImages/contact-us.png" />
                        </div>
                    </div>
                    
                </section>
            </div>
        <?php endwhile;

    endif;
    ?>

<?php get_footer();?>
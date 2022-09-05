<?php 
/*
    Template Name: Contact Us
*/
get_header();?>

<?php get_header();?>

    <?php if(have_posts()):
    
        while( have_posts()): the_post(); ?>
            <div class="container bg-bg p-20">
                <div class="map flex w-full items-center justify-center">
                    <iframe class="p-5 w-full mb-32" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.1340602021473!2d21.153690515685188!3d42.65851442419338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549f265f06fd05%3A0x63d7962d6ccc4547!2sStarLabs!5e0!3m2!1sen!2s!4v1662374696422!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
                <hr>
                    
                
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
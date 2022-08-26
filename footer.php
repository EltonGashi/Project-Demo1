<?php get_header(); ?>

<!-- ////////////// CONTAINER-END ////////////// -->

<!-- ////////////// CONTAINER-END ////////////// -->

<footer class=" bg-black ">
    <div class="container p-20 text-white xl:text-left grid gap-24 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1  sm:gap-8 text-left  ">

            <div class="footer-icon ">
                <img class="w-42 h-10  object-fit" src="<?php echo get_template_directory_uri(); ?>./assets/img/HeaderImages/Repeat Grid 8.png">
            </div>

            <div class="footer-address ">
                <ul>
                    <li>
                    <a href="#" class="hover:underline">123 MArket ST.#22B</a>
                    </li>
                    <li>
                    <a href="#" class="hover:underline">Charlttesville, California</a>
                    </li>
                    <li>
                    <a href="#" class="hover:underline">454635</a>
                    </li>
                </ul>
            </div>

            <div class="footer-navbar ">
                <?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
            </div>
        

           <!----- duhet me provu prap ket pjes
            <?php  if(have_rows('links')):?>
                <?php while( have_rows('links')): the_row();
                
                $link = get_sub_field('links');
                
                ?>
                 <div class="footer-socials font-basic ">
                <a href="<?php echo $link['url']; ?>"></a>
                </div>
                <?php endwhile;?>
                <?php endif;?>
                ----->

            <div class="footer-socials font-basic ">
                <div class="facebook"><a href="https://www.facebook.com">Facebook</a></div>
                <div class="twitter"><a href="https://www.twitter.com">Twitter</a></div>
                <div class="linkedin"><a href="https://www.linkedin.com">LinkedIn</a></div>
                <div class="instagram"><a href="https://www.instagram.com">Instagram</a></div>
            </div>
            
    </div>

</footer>
 

<?php wp_footer(); ?>
</body>

</html>
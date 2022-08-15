<?php get_header(); ?>

<!-- ////////////// CONTAINER-END ////////////// -->
</div>
<!-- ////////////// CONTAINER-END ////////////// -->

<footer class="bg-black ">
    <div class="container p-20 text-white grid gap-24 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1  sm:gap-4 text-left sm:justify-items-center">

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
        
            <div class="footer-socials ">
            <?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
            </div>
    </div>

</footer>
 

<?php wp_footer(); ?>
</body>

</html>
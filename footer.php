<?php get_header(); ?>

<!-- ////////////// CONTAINER ////////////// -->
</div>
<!-- ////////////// CONTAINER ////////////// -->

<footer class=" flex  justify-evenly items-center  inset-x-0  bg-black h-48 text-white font-sans">

    <div class="footer-icon ">
        <img class="w-42 h-10  object-fit" src="<?php echo get_template_directory_uri(); ?>./components/HeaderImages/Repeat Grid 8.png">
    </div>

   <div class="footer-address">
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

   <div class="footer-navbar">
        <?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
   </div>
   
    <div class="footer-socials">
        <ul>
            <li>
            <a href="#" class="hover:underline">Facebook</a>
            </li>
            <li>
            <a href="#" class="hover:underline">Twitter</a>
            </li>
            <li>
            <a href="#" class="hover:underline">Linkedin</a>
            </li>
            <li>
            <a href="#" class="hover:underline">Instagram</a>
            </li>
        </ul>
    </div>

</footer>
 

<?php wp_footer(); ?>
</body>

</html>
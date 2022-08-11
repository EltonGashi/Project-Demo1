<?php get_header();?>

<footer class="bg-black absolute  justify-between l-0 r-0 h-52">
    <div class="footer-icon bg-white">

    </div>

    <div class="footer-adress">
        <p class="text-white">123 Market ST.#22B Charlttesville, California 454635</p>
    </div>
    <div class="footer-menu text-white">
        <?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
    </div>

    <div class="footer-socials">

    </div>
    
</footer>   


<?php wp_footer(); ?>
</body>


</html>
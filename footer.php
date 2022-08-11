
<?php get_header();?>

<footer class=" flex justify-evenly items-center absolute inset-x-0  bg-black h-48 text-white font-sans">
<img class="w-10 h-10" src="<?php echo get_template_directory_uri(); ?>./components/services-card-users/img/ellipse1.png">
   
   <div>
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


   <div>
    <ul>
        <li>
        <a href="#" class="hover:underline">Home</a>
        </li>
        <li>
        <a href="#" class="hover:underline">Find Jobs</a>
        </li>
        <li>
        <a href="#" class="hover:underline">Find talents</a>
        </li>
        <li>
        <a href="#" class="hover:underline">About Us</a>
        </li>
    </ul>
   </div>
   

    <div>
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















<script>
const burgerMenu = document.getElementById("burger");
const navbarMenu = document.getElementById("menu");


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
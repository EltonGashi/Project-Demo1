<?php get_header(); ?>

<!-- ////////////// CONTAINER-END ////////////// -->

<!-- ////////////// CONTAINER-END ////////////// -->

  <!-- <footer class=" bg-black">
        <div class="footer container p-20  w-full grid items-center grid-cols-4 gap-4 xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
            <div class="footer-icon four-columns w-full">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                    }
                ?>            
            </div>
                <div class="four columns text-white w-full">
                    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-center-widget') ) ?>
                </div>
                <div class="four columns w-full">
                    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center-widget') ) ?>
                </div>
                <div class="four columns w-full">
                    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget') ) ?>
                </div>
        </div>
    </footer> -->

    <footer class=" bg-black">
        <div class="footer container p-20  w-full flex justify-between">
            <div class="footer-icon w-3/12 flex items-center justify-center">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                    }
                ?>            
            </div>
            <div id="mainfooter" class="text-white xl:text-left flex justify-evenly text-left w-9/12 ">
                <div class="four columns flex items-center justify-center hover:underline  w-3/12">
                    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-center-widget') ) ?>
                </div>
                <div class="four columns  w-3/12 flex justify-center">
                    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center-widget') ) ?>
                </div>
                <div class="four columns  w-3/12 flex justify-center">
                    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget') ) ?>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>

</html>
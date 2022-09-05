<?php if( have_rows('register_as_company') ): ?>
        <?php while( have_rows('register_as_company') ): the_row(); 
            // Get sub field values.
            $image = get_sub_field('timer_svg');
        ?>
        <h1 class="register-title text-center w-full text-3xl tracking-wider mb-20 font-bold  lg:text-2xl"><?php the_sub_field('section_title');?></h1>
        <div class="registerCompany flex w-full justify-evenly md:flex-col md:items-center"> 
        <div class="timer-svg md:mb-20 2xl:w-5/12 xl:w-4/12 md:w-8/12 sm:w-auto flex ml-16">
            <img class="h-64 md:w-9/12 sm:w-auto" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
        </div>
        <div class="coming-soon-alert flex flex-col justify-center md:items-center  2xl:w-3/12 xl:w-4/12 lg:w-5/12  md:w-full">
            <h2 class="title-coming-soon text-3xl tracking-widest mb-5 sm:text-xl sm:font-bold sm:tracking-wider"><?php the_sub_field('coming_soon_title');?></h2>
            <p class="paragraph-coming-soon tracking-widest md:text-sm sm:tracking-wider"><?php the_sub_field('coming_soon');?></p>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
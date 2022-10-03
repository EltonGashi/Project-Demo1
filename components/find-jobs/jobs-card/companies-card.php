<div class="company-card bg-white rounded-3xl shadow-3xl">
<?php if( have_rows('jobs') ): ?>
    <?php while ( have_rows('jobs') ) : the_row(); 
        $image = get_sub_field('company_logo');
        ?>
        <div class="company  p-6 pb-2">
            <div class="header-card w-full flex justify-between">
                <div class="contract border-solid border-lime-800 rounded-lg border-2 w-28 p-1 px-4 xl:px-2 text-center text-white bg-lime-800"><?php the_sub_field('contract_hour'); ?></div>
                <div class="price border-solid border-zinc-300 rounded-lg border-2 p-1 px-4 xl:px-2 text-center bg-zinc-300 font-bold"><?php the_sub_field('price_per_hour'); ?></div>
            </div>
            <div class="company-hiring w-full pt-16 flex flex-col items-center ">
                <h1 class="company-name flex w-3/12 justify-around text-xl"><img class="w-3/12 h-2/6"src="<?php echo $image['url'];?>" class="" />&nbsp;<?php the_sub_field('company_name'); ?></h1>
                <h1 class="job-positions-name font-bold text-2xl pt-3 "><?php the_sub_field('job_positions_name'); ?></h1>
            </div>

            <div class="skill-required flex justify-evenly pt-10">
                <?php
                if( have_rows('skills_required') ):?>
                    <?php while ( have_rows('skills_required') ) : the_row();
                        $sub_value = get_sub_field('name_of_the_skill');
                        ?>
                        <div class="skill border-solid border-sky-700 rounded-xl border-2 w-20 text-center"><?php echo $sub_value;?></div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="job-info w-full p-8">
                <p class="information text-center "><?php echo wp_trim_words( get_the_content(), 7); ?></p>
            </div>
    <?php endwhile; ?>
<?php endif; ?>
<div class="hr-border w-full flex justify-center">
<hr class="hr-company-card w-4/12">
</div>
<button type="button" class="flex w-full text-md justify-center p-1 pt-1 ">
            <?php $link = get_permalink();  ?>
            <p class="rounded-full px-4 py-2 text-center"><?php print '<a href="'.$link.'">View Job</a>' ?></p>  
        </button>
    </div>
</div>
<?php get_header();?>

    <!-- ////////////// CONTAINER-START ////////////// -->
<div class="container bg-bg p-20">

<div class="company">
<?php if( have_rows('jobs') ): ?>
    <?php while ( have_rows('jobs') ) : the_row(); 
        $image = get_sub_field('company_logo');
        ?>
        <div class="company w-6/12  pt-6 pb-2">
                <div class="company-info w-6/12 flex justify-between">
                    <h1 class="job-positions-name font-bold text-2xl"><?php the_sub_field('job_positions_name'); ?></h1>
                    <h1 class="company-name flex items-center text-lg font-bold"><i class="fa-regular fa-building"></i>&nbsp;<?php the_sub_field('company_name'); ?></h1>
                </div>
                <div class="header-card w-3/12 flex justify-between pt-6">
                <div class="contract border-solid border-lime-800 rounded-lg border-2 w-28 px-4 xl:px-2 text-center text-white bg-lime-800"><?php the_sub_field('contract_hour'); ?></div>
                <div class="price border-solid border-zinc-300 rounded-lg border-2 px-4 xl:px-2 text-center bg-zinc-300 font-bold"><?php the_sub_field('price_per_hour'); ?></div>
            </div>
            <div class="job-info w-full pt-8">
                <p class="information text-center "><?php the_content();?></p>
            </div>
            <div class="about-employee pt-6">
                <h1 class="responsible pb-4">You will be responsible for:</h1>
                <?php
                if( have_rows('employees_info') ):?>
                    <?php while ( have_rows('employees_info') ) : the_row();
                        $employee = get_sub_field('about_the_employee');
                        ?>
                        <p class="employee-info leading-6"><?php echo $employee;?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="skill-required pt-10">
                <h2 class="skill-title font-bold text-black">Skills required</h2>
                <hr>
                <div class="skills gap-3 pt-4">
                <?php
                if( have_rows('skills_required') ):?>
                    <?php while ( have_rows('skills_required') ) : the_row();
                        $sub_value = get_sub_field('name_of_the_skill');
                        ?>
                        <li class="skill"><?php echo $sub_value;?></li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
            <div class="company-hiring w-full pt-8 flex flex-col">
                <h1 class="about-company">About the company</h1>
                <hr>
                
            </div>
        </div>
        <?php endwhile; ?>
<?php endif; ?>
    
</div>


<div class="my-16 font-extrabold text-2xl"><?php $cat = the_category(); ?></div>

<section id="company">
        <div class="company grid 2xl:grid-cols-4 xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-8">
    
        <?php
            $categories2 = get_the_category();
            $category_id = $categories2[0]->cat_ID;
       ?>

            <?php 
            
            $args_cat = array(
                'include' => $category_id,
                
            );

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type'=>'company',
                    
                    'posts_per_page' => 4,
                    // 'offset' =>1,
                    /*'category' ='1'*/
                    'category__in' => $category->term_id ,
                    'orderby' =>'rand',
                    // 'category__not_in' => array(1),
                );
    
                $lastBlog = new WP_Query($args);
    
                if( $lastBlog->have_posts()):
    
                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        
                        <?php get_template_part('/components/find-jobs/jobs-card/companies','card');?>
                        
                    <?php endwhile;
    
                    wp_reset_postdata();
    
                endif;
            endforeach;
            ?>
        </div>

    </section>

</div>
<?php get_footer();?>
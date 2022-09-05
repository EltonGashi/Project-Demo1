
<?php
/*
 * Template Name: About Us
 */
get_header(); ?>


<section>
    <div class="container p-20 bg-bg">
        <?php get_template_part('/components/About-us/registerCompany/build','profile');?>
    </div>
</section>

<section>
    <div class="container p-20 bg-bg about-us">
        <?php get_template_part('/components/About-us/registerCompany/register','company');?>
    </div>
</section>

<?php get_footer(); ?>
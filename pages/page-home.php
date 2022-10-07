<?php
/*
 * Template Name: Home
 * Template Post Type: post, page, product
 */   
 get_header(); 
  ?>

    <!-- ////////////// CONTAINER-START ////////////// -->
<div class="container w-full bg-bg p-20">
    <h1 class="text-4xl py-5">Services from Users </h1>
    <section id="users" class="py-10">
            <?php 
            
            // $wpdb->show_errors();
            // $posts = $wpdb->get_results("SELECT *, AVG(rate.rateIndex) AS rate FROM $wpdb->posts 
            // LEFT JOIN 
            // ratingSystem.rate
            // ON wp_posts.ID = rate.cardID
            // WHERE wp_posts.post_type = 'post'
            // AND wp_posts.post_status = 'publish' 
            // GROUP BY wp_posts.ID 
            // ORDER BY rate DESC
            // ");   
            $args =array(
                'post_type' => 'post',
                'paged' => get_query_var('paged',1),
                'posts_per_page' => 8,
                
                // 'orderby' => $authors,
                // 'offset' =>1,
                /*'category' ='1'*/
                //'paged'=> 1,
                //'post_status' => 'publish',
                // 'category__in' => $post ,
                // 'category__not_in' => array(1),

            );
            

            ?>

            <?php
global $wpdb;
// Write our custom query. In this query, we're only selecting the post_id field of each row that matches our set of
// conditions. Note the %s placeholders – these are dynamic and indicate that we'll be injecting strings in their place.
$SQL = "SELECT *, AVG(rate.rateIndex) AS rate FROM $wpdb->posts 
LEFT JOIN 
ratingSystem.rate
ON wp_posts.ID = rate.cardID
WHERE wp_posts.post_type = 'post'
AND wp_posts.post_status = 'publish' 
GROUP BY wp_posts.ID 
ORDER BY rate DESC
";

// Use $wpdb's prepare() method to replace the placeholders with our actual data. Doing it this way protects against
// injection hacks as the prepare() method santizes the data accordingly. The output is a prepared, sanitized SQL
// statement ready to be executed.
$SQL = $wpdb->prepare( $SQL);


// Query the database with our prepared SQL statement, fetching the first column of the matched rows. In our case, we
// only queried the post_id field of each row so we know that the post_id fields will be the first column. The result
// here is an array of post_ids (provided we have a match)
$post_ids = $wpdb->get_col( $SQL );
$post_rate = $wpdb->get_row( $SQL);



if ( $post_ids ) {

	// When calling WP_Query, we no longer need to worry about specifying a post type because we know exactly which post
	// IDs we're after. We've also already ensured the correct order of our post IDs through the ORDER BY xxx ASC
	// portion of our SQL query. So, we just tell WP_Query to return the WP_Post objects in the order of the post IDs we
	// pass to it.
	$query = new WP_Query( [
		'post__in' => $post_ids,
		'post_type' => 'post',
		'posts_per_page' => 8,
        'orderby' => 'post__in',
        'meta_query' => array(
            'key' => 'rate',
            'value' => $rate
            
        ),
	] );?>
    <div class="users  grid 2xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($query->found_posts/2); ?>">
    <?php  
    // var_dump($query);
	// The rest is exactly as you normally would handle a WP_Query object. 
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
            get_template_part('/components/home/card_users/user' , 'cards');
            
		}

		wp_reset_postdata();
	}

} else {
	// …
}
            ?>

            </div>
            <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>
    </section>
        

        <?php
        $title= get_field('title');
        $subtitle= get_field('sub_title');
        ?>



    <section id="services" class="py-20">
        <div id="headings" class="block text-center py-8 ">
            <div class="md:text-2xl text-6xl">
                <h1 class=""><?php echo $title; ?></h1>
            </div> 
            <div id="txt-2" class="md:text-2xl text-6xl">
                <h1 class="text-customGreen "><?php echo $subtitle; ?></h1>
            </div>
        </div>
            
        <div id ="services" class="grid 2xl:grid-cols-4  xl:grid-cols-4  gap-8 py-8 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 sm:gap-8 ">
            <?php if( have_rows('content_section_one') ): ?>

                <?php while( have_rows('content_section_one') ): the_row();?>

                    <?php if(get_row_layout() == 'image_with_text'): ?>

                        <?php get_template_part('/components/home/many_solutions/section' , 'imagewithtext');?>

                    <?php endif;?>

                <?php endwhile;?>

            <?php endif;?>
        </div>
    </section>

</div>


    <section id="NeedSomethingDone" class="bg-bg">
        <?php get_template_part('/components/home/NeedSomethingDone/dynamic' , 'cards');?>
    </section>

<div class="container bg-bg p-20">

    <section id="categories " class="py-20">
        <?php get_template_part('/components/home/categories/section' , 'categories');?>
    </section>
</div>
<!-- /////////// END OF CONTAINER ///////// -->

<?php get_footer(); ?>


<?php

// Enqueuing Template css,js,jquery
function dynamic_menu_enqueue()
{
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/components/home/assets/home.js', array(), '1.0.0', true);
    wp_enqueue_script( 'endGamejs', get_template_directory_uri() . '/assets/js/end-game.js', array(), '1.0.0', true);
    wp_enqueue_script( 'customScript', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script( 'endGamejs', get_template_directory_uri() . '/assets/js/responsive-header.js', array(), '1.0.0', true);
    wp_enqueue_script( 'aboutjs', get_template_directory_uri() . '/components/About-us/assets/about.js', array(), '1.0.0', true);
    wp_enqueue_style('menustyle', get_template_directory_uri() . '/assets/css/menu.css', array(), '1.0.0', 'all');
    wp_enqueue_style('comment style ', get_template_directory_uri() . '/assets/css/comment-style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom style ', get_template_directory_uri() . '/components/contact-us/assets/custom.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'dynamic_menu_enqueue');

    

//Theme Support
add_theme_support('post-thumbnails');


//Custom Menus
function menu_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
    register_nav_menu('social media','Social Media Menu');
    
}
add_action('init', 'menu_setup');

function font_awesome_cdn(){
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css');
    wp_enqueue_style('fontawesome');
}

add_action('wp_print_styles', 'font_awesome_cdn');
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'link-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



//Tailwind CSS
add_action( 'wp_enqueue_scripts', 'enqueue_function', 10 );
function enqueue_function() {
	$version = ( wp_get_environment_type() === 'development' ) ? time() : define( 'BIIIRD_THEME_VERSION', '1.0.2' );
	wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/assets/css/main.css', $version, true );
}

//Load More Function


function my_action_javascript() { ?>

    <script type="text/javascript" >
        jQuery(document).ready(function($){
            
            var page  = 2;
            var page1 = 2;
            var page2 = 2;
            var page3 = 2;
            var page4 = 2;
            var page5 = 2; 
            var page6 = 2;
            var page7 = 2;


            var ajaxurl ="<?php echo admin_url('admin-ajax.php'); ?>";
            
            var btns = document.querySelectorAll(".findMore");

            btns.forEach(btn => {
                btn.addEventListener('click', () => {
                var sibling = btn.previousElementSibling; 

                var count = sibling.dataset.count;

                var category = sibling.dataset.label;
                
                if(category=='Java Developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page1,
                    };
                }else if(category=='It Technichian'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page2,
                    };

                }else if(category=='Software Developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page3,
                    };

                }else if(category=='PHP developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page4,
                    };

                }else if(category=='Front End Developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page5,
                    };
                }else if(category=='Python Developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page6,
                    };
                }
                else if(category=='Graphic Designer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page7,
                    };
                }else{
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page,
                    };
                }
                
                

                jQuery.post(ajaxurl , data , function(response) {
                    jQuery(sibling).append(response);

                    if(category =='Java Developer'){
                        page1++;
                        if(count == page1){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };
                        
                    }else if(category == 'It Technichian'){
                        page2++;
                        if(count == page2){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };

                    }else if(category == 'Software Developer'){
                        page3++;
                        if(count == page3){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };

                    }else if(category == 'PHP developer'){
                        page4++;
                        if(count == page4){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };

                    }else if(category == 'Front End Developer'){
                        page5++;
                        if(count == page5){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };

                    }else if(category == 'Python Developer'){
                        page6++;
                        if(count == page6){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };

                    }else if(category == 'Graphic Designer'){
                        page7++;
                        if(count == page7){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };
                    }else {
                        if(count == page){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };
                        page++;
                    }
                    
                }); 
                selectall();
                });
            });

        });

    </script><?php
}
add_action('wp_footer', 'my_action_javascript');


function my_action(){

        $cat = $_POST['cat'];

        if($cat == 'Java Developer'){
            $args1 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 
            $the_query1 = new WP_Query( $args1); 
            ?>
            <?php if( $the_query1->have_posts() ): ?>

            <?php while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?> 

                <?php get_template_part('/components/find-talents/developers/java','developer');?>


            <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php endif;
        }else if($cat == 'It Technichian'){
            $args2 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 
            
            $the_query2 = new WP_Query( $args2); ?>
            
            <?php if( $the_query2->have_posts() ): ?>
    
            <?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/it/it','technician');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Software Developer'){
            $args3 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query3 = new WP_Query( $args3); ?>
            
            <?php if( $the_query3->have_posts() ): ?>
    
            <?php while ( $the_query3->have_posts() ) : $the_query3->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/developers/software-developer');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'PHP developer'){
            $args4 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query4 = new WP_Query( $args4); ?>
            
            <?php if( $the_query4->have_posts() ): ?>
    
            <?php while ( $the_query4->have_posts() ) : $the_query4->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/developers/php-developer');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Front End Developer'){
            $args5 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query5 = new WP_Query( $args5); ?>
            
            <?php if( $the_query5->have_posts() ): ?>
    
            <?php while ( $the_query5->have_posts() ) : $the_query5->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/developers/front-end-developer');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Python Developer'){
            $args6 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query6 = new WP_Query( $args6); ?>
            
            <?php if( $the_query6->have_posts() ): ?>
    
            <?php while ( $the_query6->have_posts() ) : $the_query6->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/developers/python-developer');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Graphic Designer'){
            $args7 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query7 = new WP_Query( $args7 ); ?>
            
            <?php if( $the_query7->have_posts() ): ?>
    
            <?php while ( $the_query7->have_posts() ) : $the_query7->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/designers/graphic','designers');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else{
            $args =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page']+1,
            ); 
            
            $the_query = new WP_Query( $args); ?>
            
            <?php if( $the_query->have_posts() ): ?>
    
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
    
                <?php get_template_part('/components/home/card_users/user' , 'cards');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;

        }
        wp_die();
}

add_action('wp_ajax_nopriv_my_action', 'my_action');
add_action('wp_ajax_my_action', 'my_action'); 


add_role(
    'freelancer', //  Emri i Rolit
    __( 'Freelancer'  ), 
    array(
        'read'  => true,
        'delete_posts'  => true,
        'delete_published_posts' => true,
        'edit_posts'   => false,
        'publish_posts' => true ,
        'edit_published_posts'   => true,
        'upload_files'  => true,
        'moderate_comments'=> true, // 
    )
);
add_role(
    'Company', //  Emri i Rolit
    __( 'Company'  ), 
    array(
        'read'  => true,
        'delete_posts'  => true,
        'delete_published_posts' => true,
        'edit_posts'   => false,
        'publish_posts' => true ,
        'edit_published_posts'   => true,
        'upload_files'  => true,
        'moderate_comments'=> true, // 
    )
);


function post_published_limit( $ID, $post ) {
    $max_posts = 1; // change this or set it as an option that you can retrieve.
    $author = $post->post_author; // Post author ID.
    $count = count_user_posts( $author, 'post'); // get author post count

    if ( $count > $max_posts ) {
        // count too high, let's set it to draft.
        $post->post_status = 'draft';
        wp_update_post( $post);
    }
}
add_action( 'publish_post', 'post_published_limit', 10, 2 );

function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>

        <div class="comment-author vcard"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
            printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
        </div><?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
        } ?>

        <div class="comment-meta commentmetadata">
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                printf( 
                    __('On %1$s at %2$s'), 
                    get_comment_date(),  
                    get_comment_time() 
                ); ?>
            </a><?php 
            edit_comment_link( __( 'Edit' ), '  ', '' ); ?>
        </div>
        <?php comment_text(); ?>
        <div class="reply">
            <?php comment_reply_link( array_merge($args, array(
    'reply_text' => __('Reply <span>&darr;</span>', 'textdomain'),
    'depth'      => $depth,
    'max_depth'  => $args['max_depth']
    )
)); ?>
        </div><?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer Left Center',
        'id'   => 'footer-left-center-widget',
        'description'   => 'Left Center Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Footer Right Center',
        'id'   => 'footer-center-widget',
        'description'   => 'Centre Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Footer Right',
        'id'   => 'footer-right-widget',
        'description'   => 'Right Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));


}

function connect_another_db() {
    global $conn;
    $conn = new mysqli('localhost', 'root', '', 'ratingSystem');
}
add_action('init', 'connect_another_db');
// POST COMPANY TAXONOMY
function company_custom_taxonomy(){
    $labels = array(
        'name'=> 'Company',
        'singular_name'=>'Company',
        'add_new' => 'Add Company',
        'all_items' => 'All Company',
        'add_new_item' => 'Add New Company',
        'edit_item' => 'Edit Company',
        'new_item'=>'New Company',
        'view_item' => 'View Company',
        'search_item'=>'Search Company',
        'not_found'=>'No Company found',
        'not_found_in_trash'=>'No Company found in trash',
        'parent_item_colon'=>'Parent Company:',
        'menu_name'=>'Company',
    );
    $arguments = array(
        'labels' => $labels,
        'public'=> true,
        'has_archive'=> true,
        'publicly_queryable' => true,
        'query_var'=> true,
        'rewrite' => true,
        'capability_type' =>'post',
        'hierarchical' => false,
        'menu_icon'=> 'dashicons-building',
        'support'=>array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies'=>array('category','post_tag'),
        'menu_position'=>5,
        'exclude_from_search' =>false,
    );
    register_post_type('company',$arguments);
    add_post_type_support( 'company', 'thumbnail' ); 
}

add_action('init','company_custom_taxonomy');



// USER COMPANY TAXONOMY
function company_taxonomy() {

	// create the audience taxonomy.
	register_taxonomy(
		'user_category',
		'user',
		array(
			'public'            => false,
			'labels'            => array(
				'name'                          => __( 'Company '),
				'singular_name'                 => __( 'Company'),
				'menu_name'                     => __( 'Company'),
				'search_items'                  => __( 'Search Company'),
				'popular_items'                 => __( 'Popular Company'),
				'all_items'                     => __( 'All Company'),
				'edit_item'                     => __( 'Edit Company'),
				'update_item'                   => __( 'Update Company'),
				'add_new_item'                  => __( 'Add New Company'),
				'new_item_name'                 => __( 'New Company'),
				'add_or_remove_items'           => __( 'Add or remove Company'),
				'choose_from_most_used'         => __( 'Choose from the most used Company'),
			),
			'show_ui'           => true,
			'show_in_menu'      => true,
			'show_admin_column' => false,
			'hierarchical'      => true,
			'show_in_rest'      => true,
			'rewrite'           => array(
				'slug'       => __( 'team-category'),
				'with_front' => false, 
			),
		)
	);
	
}

add_action( 'init', 'company_taxonomy' );

/* Add an admin page for our user taxonomy as there is not a default one provided. */
function company_taxonomy_admin_page() {
	
	// get the taxonomy object for the user category.
	$tax = get_taxonomy( 'user_category' );
	
	// add a new admin page under users to display our taxonomy.
	add_users_page(
		esc_attr( $tax->labels->menu_name ),
		esc_attr( $tax->labels->menu_name ),
		$tax->cap->manage_terms,
		'edit-tags.php?taxonomy=' . $tax->name
	);

}

add_action( 'admin_menu', 'company_taxonomy_admin_page' );

/* Update parent file name to fix the selected menu issue */
function company_user_file( $parent_file ) {
	
	global $submenu_file;

	// if we have a taxonomy GET parameter in the url.
	if ( ! empty( $_GET['taxonomy'] ) ) {

		// if the taxonomy get parameter is our user category taxonomy and we are on the user category edit page.
		if ( 'user_category' === $_GET['taxonomy'] && 'edit-tags.php?taxonomy=user_category' === $submenu_file ) {

			// set the admin parent page to the user.php page.
			$parent_file = 'users.php';

		}

	}

	// return the maybe modified parent file.
	return $parent_file;

}

add_filter( 'parent_file', 'company_user_file' );

/**
 * Edits the columns for the user category management page.
 *
 * @param array  $columns The current array of registered columns.
 * @return array $columns The modified array of registered columns.
 */
function company_manage_user( $columns ) {

	// remove the posts count column - better to call it users.
	unset( $columns['posts'] );

	// add in a users column.
	$columns['users'] = __( 'Users', 'hd-user-category' );

	// return the modified columns.
	return $columns;
	
}

add_filter( 'manage_edit-user_category_columns', 'company_manage_user', 10, 1 );

/**
 * Adds the correct term count based on the users with that term.
 * 
 * @param string $display WP just passes an empty string here.
 * @param string $column  The name of the custom column.
 * @param int    $term_id The ID of the term being displayed in the table.
 */
function company_output_user( $display, $column, $term_id ) {
	
	// if this is the users column we created.
	if ( 'users' === $column ) {

		// get the current term object.
		$term = get_term( $term_id, 'user_category' );

		// output the term count.
		echo esc_html( $term->count );

	}
}

add_filter( 'manage_user_category_custom_column', 'company_output_user', 10, 3 );

/**
 * Adds the form for users to choose their user category.
 * Added on the new and edit users screens.
 *
 * @param mixed WP_User/string The current user object or the current page string.
 */
function company_user_form( $user ) {

	// get the taxonomy object for user category.
	$tax = get_taxonomy( 'user_category' );

	// check the current logged in user can assign user category terms.
	if ( ! current_user_can( $tax->cap->assign_terms ) ) {
		return;
	}

	// get all user category terms - the categories!
	$user_categories = get_terms(
		'user_category',
		array(
			'hide_empty' => false // show terms that have no user assigned.
		)
	);

	?>
	
	<table class="form-table">
		
		<tr>
			
			<th><label for="user_category"><?php esc_html_e( 'Companies', 'hd-user-category' ); ?></label></th>
			
			<td>

			<fieldset>
			
				<?php

				// if we have user categories available.
				if ( ! empty( $user_categories ) && ! is_wp_error( $user_categories ) ) {
					
					// loop through each user category.
					foreach ( $user_categories as $user_category ) {

						// set a checked var to uncheck this term.
						$checked = false;

						// if the user var is telling us we are on the add new user page.
						if ( ! empty( $user->ID ) ) {

							// set the checked var based on whether the user is already assigned to this term.
							$checked = is_object_in_term( $user->ID, 'user_category', $user_category->term_id );

						}

						?>

						<label for="user_categories-<?php echo esc_attr( $user_category->slug ); ?>">
						
							<input type="checkbox" name="user_category[]" id="user_category-<?php echo esc_attr( $user_category->slug ); ?>" value="<?php echo esc_attr( $user_category->term_id ); ?>"<?php checked( true, $checked ); ?>>
						
							<?php echo esc_html( $user_category->name ); ?>
						
						</label>

						<br />

						<?php

					}

				}

				?>
			
			</fieldset>

			</td>

		</tr>

	</table>

  <?php
}

add_action( 'show_user_profile', 'company_user_form', 10, 1 );
add_action( 'edit_user_profile', 'company_user_form', 10, 1 );
add_action( 'user_new_form', 'company_user_form', 10, 1  );

/**
 * Saves the user category selected.
 *
 * @param integer $user_id The current user ID of the user being edited or added.
 */
function save_company_user_data( $user_id ) {

	// get the taxonomy object for user category.
	$tax = get_taxonomy( 'user_category' );

	// check the current logged in user can assign user category terms.
	if ( ! current_user_can( 'edit_user', $user_id ) && current_user_can( $tax->cap->assign_terms ) ) {
		return false;
	}

	// remove all the relationships to start.
	wp_delete_object_term_relationships( $user_id, 'user_category' );

	// if we have posted categories.
	if ( ! empty( $_POST['user_category'] ) ) {

		// set the user categories selected.
		wp_set_object_terms(
			$user_id,
			array_map( 'absint', $_POST['user_category'] ),
			'user_category',
			false
		);

		// clean the object term cache for this user.
		//clean_object_term_cache( $user_id, 'user_category' );

	}

}

add_action( 'personal_options_update', 'save_company_user_data', 10, 1 );
add_action( 'edit_user_profile_update', 'save_company_user_data', 10, 1 );
add_action( 'user_register', 'save_company_user_data', 10, 1 );

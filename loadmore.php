<?php
/**
 * Register a new route or endpoint with the rest api.
 */
function hd_register_posts_rest_endpoint() {

	// register a new rest route or endpoint for getting slot posts.
	register_rest_route(
		'hd/v1',
		'/posts/',
		array(
			'methods'             => 'GET',
			'callback'            => 'hd_posts_endpoint_output',
			'permission_callback' => '__return_true',
		)
	);

}

add_action( 'rest_api_init', 'hd_register_posts_rest_endpoint' );

/**
 * Callback function used for the registered rest route for getting latest post content.
 *
 * @param  \WP_REST_Request $request The paramters passed to the endpoint url.
 * @return mixed                     THe HTML outputs for the requested slots posts.
 */
function hd_posts_endpoint_output( \WP_REST_Request $request ) {

	// set the return output to default to an empty string.
	$output = '';

	// create some args for querying posts.
	$query_args = array(
		'post_type' => 'post',
	);

	// do we have a post type specified.
	if ( ! empty( $request['post_type'] ) ) {

		// add the offset value to the query args.
		$query_args['post_type'] = sanitize_text_field( $request['post_type'] );

	}

	// do we have a set posts per page value.
	if ( ! empty( $request['per_page'] ) ) {

		// add the offset value to the query args.
		$query_args['posts_per_page'] = absint( $request['per_page'] );

	}

	// do we have a set page number of posts to return.
	if ( ! empty( $request['page'] ) ) {

		// add the offset value to the query args.
		$query_args['paged'] = absint( $request['page'] );

	}

	// allow query args to be filtered.
	$query_args = apply_filters( 'hd_posts_endpoint_query_args', $query_args, $request );

	// query for posts based on the query args.
	$posts_query = new WP_Query( $query_args );

	// if we have posts.
	if ( $posts_query->have_posts() ) {

		// start output buffering.
		ob_start();

		// loop through each post.
		while ( $posts_query->have_posts() ) : $posts_query->the_post();

			// get the content template part.
			get_template_part( 'components/home/card_users/user-cards', get_post_type() );

		endwhile;

		// reset the query.
		wp_reset_postdata();

		// store the contents of the output buffer.
		$output = ob_get_clean();

	}

	// return our output.
	return $output;

}

/**
 * Enqueue the load more js functionality.
 */
function hd_theme_enqueue_loadmore_posts_script() {

	// if this is not the posts home.
	if ( !is_home() ) {
		return;
	}

	// enqueue the ajax loadmore script.
	wp_enqueue_script(
		'hd-loadmore-js',
		get_template_directory_uri() . '/assets/js/loadmore.min.js',
		array( 'jquery' ),
		false,
		true
	);

}

add_action( 'wp_enqueue_scripts', 'hd_theme_enqueue_loadmore_posts_script' );
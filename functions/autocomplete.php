<?php

// http://localhost/wp-json/cryptoland/search

function rest_api_search( WP_REST_Request $request ) {
    $query = $request->get_param( 'q' );

    if (empty( $query )) {
        return;
    }

    $the_query = new WP_Query([
        'post_status' => 'publish',
        'posts_per_page' => 5,
        'fields' => 'ids', // Zonder zal dit veel meer teruggeven.
        's' => $query,
    ]);

    $results = $the_query->posts;
    $filtered_post = [];

    foreach( $results as $key => $post_id) {
        $filtered_post = [
            'id' => $post_id,
            'permalink' => get_permalink($post_id),
            'label' => get_the_title($post_id),
        ];

        $posts[] = $filtered_post;                                         
    }

    if (!empty($posts)) return $posts; 
}   

function register_routes() {
    register_rest_route('cryptoland', '/search', [
        'methods' => 'GET',
        'callback' => 'rest_api_search',
    ]);
}

add_action('rest_api_init', 'register_routes');
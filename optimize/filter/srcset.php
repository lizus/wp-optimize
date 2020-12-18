<?php

add_filter( 'wp_calculate_image_srcset', function ($sources){
  return [];
} );

add_filter('intermediate_image_sizes_advanced', function ($sizes){
  unset( $sizes['thumbnail']);
  unset( $sizes['medium']);
  //unset( $sizes['large']);
  //unset( $sizes['medium_large']);
  return $sizes;
});

//add_filter( 'big_image_size_threshold', '__return_false' );

add_action('init', function (){
	remove_image_size('post-thumbnail'); // disable set_post_thumbnail_size()
});

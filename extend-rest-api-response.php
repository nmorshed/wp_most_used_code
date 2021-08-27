<?php
// Add the featured image to the post
function add_featured_image_to_post() {
  //_my_featured_image
  register_rest_field( 'post',
    '_my_featured_image',
    array(
        'get_callback'  => '_get_featured_image_of_a_post',
        'update_callback'   => null,
        'schema'            => null,
     )
  );
}


function _get_featured_image_of_a_post( $object ) {
    //get the post Id
    $post_id = $object['id'];
    
    return get_the_post_thumbnail_url( $post_id,'full' );  
}
add_action( 'rest_api_init', 'add_featured_image_to_post' );
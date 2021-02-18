<?php
/*
 * Let's create a custom post types BOOKS for example
 * 
 * It's included with
 *
 * 1. The Simplest code to create a CPT
 * 2. The Simplest CPT with support
 * 3. The Simplest CPT with TAXONOMY support
 * 4. CPT with modification of all labels
 */



// The Simplest code to create a CPT
function plugin_name_simple_cpt() {
    $args = array(
        'public' => true,
        'label'  => 'Books'
    );
    register_post_type( 'book', $args );
}
add_action( 'init', 'plugin_name_simple_cpt' );



// The Simplest CPT with support
function plugin_name_with_support() {
    $args = array(
        'public'   => true,
        'label'    => 'Books',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'book', $args );
}
add_action( 'init', 'plugin_name_with_support' );



//The Simplest CPT with TAXONOMY support
function plugin_name_with_taxonomy_support() {
    $args = array(
        'public'   => true,
        'label'    => 'Books',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies' =>array('category','post_tag')
    );
    register_post_type( 'book', $args );
}
add_action( 'init', 'plugin_name_with_taxonomy_support' );



// CPT with modification of all labels
function plugin_name_cpt_full_labels() {
    $labels = array(
        'name'               => __( 'Books', 'post type general name', 'mytheme' ),
        'singular_name'      => __( 'Book', 'post type singular name', 'mytheme' ),
        'menu_name'          => __( 'Books', 'admin menu', 'mytheme' ),
        'name_admin_bar'     => __( 'Book', 'add new on admin bar', 'mytheme' ),
        'add_new'            => __( 'Add New', 'book', 'mytheme' ),
        'add_new_item'       => __( 'Add New Book', 'mytheme' ),
        'new_item'           => __( 'New Book', 'mytheme' ),
        'edit_item'          => __( 'Edit Book', 'mytheme' ),
        'view_item'          => __( 'View Book', 'mytheme' ),
        'all_items'          => __( 'All Books', 'mytheme' ),
        'search_items'       => __( 'Search Books', 'mytheme' ),
        'parent_item_colon'  => __( 'Parent Books:', 'mytheme' ),
        'not_found'          => __( 'No books found.', 'mytheme' ),
        'not_found_in_trash' => __( 'No books found in Trash.', 'mytheme' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'mytheme' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'book' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'book', $args );
}
add_action( 'init', 'plugin_name_cpt_full_labels' );
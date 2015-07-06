<?php

function learningWordPress_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.5', true );
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

// Navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));

// Get top ancestor
function get_top_ancestor_id() {

    global $post;

    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));

        return $ancestors[0];
    }

    return $post->ID;
}

// Check for children?
function has_children() {
    global $post;

    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}

// Add feature image support
function add_feature_image_support(){
    add_theme_support('post-thumbnails');

    // TO DO: move the values in constants
    add_image_size('small-thumbnail', 180, 120, true); //width, height, soft/hard crop
    add_image_size('banner-image', 920, 210, true);
}

add_action('after_setup_theme', 'add_feature_image_support');
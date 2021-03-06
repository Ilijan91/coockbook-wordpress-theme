<?php

function coockbook_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'coockbook_theme_support');

function coockbook_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('coockbook-css', get_template_directory_uri() . '/assets/css/style.css', array('coockbook-bootstrap'), $version, 'all');
    wp_enqueue_style('coockbook-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '4.5.0', 'all');
}

add_action("wp_enqueue_scripts", "coockbook_register_styles");

function coockbook_menus()
{
    $locations = [
        'primary' => 'Header menu',
        'footer' => 'Footer menu'
    ];

    register_nav_menus($locations);
}

add_action('init', "coockbook_menus");


function coockbook_register_scripts()
{
    wp_enqueue_script('coockbook-jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), '3.5.1', true);
    wp_enqueue_script('coockbook-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '4.5.0', true);
    wp_enqueue_script('coockbook-jqBootstrapValidation', get_template_directory_uri() . '/assets/js/jqBootstrapValidation.js', array(), '1.3.6', true);
}
add_action("wp_enqueue_scripts", "coockbook_register_scripts");

function coockbook_register_sidebar()
{
    register_sidebar(
        array(
            'before_title' => '<div class="card mb-4"><h5 class="card-header text-warning">',
            'after_title' => '</h5>',
            'before_widget' => '<div class="card-body"><div class="input-group">',
            'after_widget' => '</div></div></div>',
            'name' => 'Sidebar',
            'id' => 'sidebar-search',
            'description' => 'Sidebar Widget Area'
        )
    );
    register_sidebar(
        array(
            'before_title' => ' <h3 class="text-warning mb-3">',
            'after_title' => '</h3>',
            'before_widget' => '<p>',
            'after_widget' => '</p>',
            'name' => 'Main page widget',
            'id' => 'main-text-widget',
            'description' => 'Widget on main page for text'
        )
    );
    register_sidebar(
        array(
            'before_title' => '<h2 class="text-warning">',
            'after_title' => '</h2>',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'images widget',
            'id' => 'images-widget',
            'description' => 'Widgets for images of Team'
        )
    );
}

add_action('widgets_init', 'coockbook_register_sidebar');


function coockbook_comment_form_text($fields)
{
    $fields['label_submit'] = 'Submit';
    $fields['class_submit'] = 'btn btn-success';
    $fields['title_reply'] = '<h5 class="card-header text-warning">Got something to share? Let&#39;s hear it.</h5>';
    return $fields;
}
add_filter('comment_form_defaults', 'coockbook_comment_form_text');

function coockbook_comment_form_fields($fields)
{
    $fields['url'] = '';
    return $fields;
}
add_filter('comment_form_default_fields', 'coockbook_comment_form_fields');


function coockbook_custom_post_recipes()
{

    $labels = array(
        'name' => 'Recipe',
        'singular_name' => 'Recipe',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Recipes',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
        ),

        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('recipes', $args);
}
add_action('init', 'coockbook_custom_post_recipes');




function coockbook_taxonomy()
{
    $labels = array(
        'name' => 'Types',
        'singular_name' => 'Type',
        'search_items' => 'Search Types',
        'all_items' => 'All Types',
        'parent_item' => 'Parent Type',
        'parent_item_colon' => 'Parent Type:',
        'edit_item' => 'Edit Type',
        'update_item' => 'Update Type',
        'add_new_item' => 'Add New Type',
        'new_item_name' => 'New Type Name',
        'menu_name' => 'Type'
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => true
    );

    register_taxonomy('type', array('recipes'), $args);
}

add_action('init', 'coockbook_taxonomy');

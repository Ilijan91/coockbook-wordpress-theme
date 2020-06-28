<?php

function coockbook_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

}
add_action( 'after_setup_theme', 'coockbook_theme_support');

function coockbook_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style( 'coockbook-css', get_template_directory_uri() . '/assets/css/style.css', array('coockbook-bootstrap'), $version, 'all');
    wp_enqueue_style( 'coockbook-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '4.5.0', 'all');
   
}

add_action("wp_enqueue_scripts","coockbook_register_styles");

function coockbook_menus(){
    $locations = [
        'primary' => 'Header menu',
        'footer' => 'Footer menu' 
    ];

    register_nav_menus($locations);
}

add_action( 'init', "coockbook_menus");


function coockbook_register_scripts(){
    wp_enqueue_script( 'coockbook-jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(),'3.5.1', true);
    wp_enqueue_script( 'coockbook-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(),'4.5.0', true);
    wp_enqueue_script( 'coockbook-jqBootstrapValidation', get_template_directory_uri() . '/assets/js/jqBootstrapValidation.js', array(),'1.3.6', true);
    
}
add_action("wp_enqueue_scripts", "coockbook_register_scripts");






 


?>
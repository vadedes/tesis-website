<?php

function tesis_files(){
    wp_enqueue_script('tesis-imp-scripts', get_theme_file_uri('/build/index.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('tesis-webflow-scripts', get_theme_file_uri('/build/webflow.js'), array('jquery'), 1.0, true);
    wp_enqueue_style('gilroy-extra-bold', get_theme_file_uri('/fonts/Gilroy-ExtraBold.ttf'));
    wp_enqueue_style('gilroy-semi-bold', get_theme_file_uri('/fonts/Gilroy-SemiBold.ttf'));
    
    wp_enqueue_style('tesis_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('tesis_biosciences_normalize', get_theme_file_uri('/build/normalize.css'));
    wp_enqueue_style('tesis_biosciences_webflow', get_theme_file_uri('/build/tesis-biosciences.webflow.css'));
    wp_enqueue_style('webflow_styles', get_theme_file_uri('/build/webflow.css'));
}

add_action('wp_enqueue_scripts', 'tesis_files');

function tesis_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
  register_nav_menu('footerLocationOne', 'Footer Location One');
  register_nav_menu('footerLocationTwo', 'Footer Location Two');


  //automatically generate page-title for each page
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');//enable post thumbnail images //for custom post types, add this support separately
}

add_action('after_setup_theme', 'tesis_features');
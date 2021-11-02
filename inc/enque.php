<?php

//Theme Css and jquery file calling

function akash_style_js_file_calling()
{
    wp_enqueue_style('akash-style', get_stylesheet_uri());
    wp_register_style('bootstrape', get_template_directory_uri() . '/bootstrape/bootstrap.min.css', array(), '5.1.0', 'all');
    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrape');
    wp_enqueue_style('custom');

//jQuery

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrape', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.0.2', true);
    wp_enqueue_script('App', get_template_directory_uri() . '/js/App.js', array(), '1.0.1', true);

}

add_action('wp_enqueue_scripts', 'akash_style_js_file_calling');

//Gogle Font enque

function akash_gogle_fonts()
{

    wp_enqueue_style('akash_gogle_fonts', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap', false);

}

add_action('wp_enqueue_scripts', 'akash_gogle_fonts');

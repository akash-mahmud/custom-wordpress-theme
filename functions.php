<?php
/*
My theme Function
 */

//Theme Title

add_theme_support('title-tag');

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

//Theme Function

function akash_customizar_register($wp_customize)
{
    $wp_customize->add_section('akash_header_area', array(
        'title' => __('Header Area', 'akash'),
        'description' => 'If you interested to update your header area, you can do it here.',

    ));

    $wp_customize->add_setting('akash_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'akash_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you interested to change or  update your logo, you cxan do it here.',
        'setting' => 'akash_logo',
        'section' => 'akash_header_area',
    )));
    //Menu Position Customization Function

    $wp_customize->add_section('akash_menu_option', array(

        'title' => __('Menu Position Option', 'akash'),
        'description' => 'If you interested to change your menu position, you can do it here.',

    ));

    $wp_customize->add_setting('akash_menu_position', array(

        'default' => 'left_menu',

    ));

    $wp_customize->add_control('akash_menu_position', array(

        'label' => 'Menu Position',
        'description' => 'Select your menu position',
        'setting' => 'akash_menu_position',
        'section' => 'akash_menu_option',
        'type' => 'radio',
        'choices' => array(

            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',

        ),
    ));
}

add_action('customize_register', 'akash_customizar_register');

//Menu register

register_nav_menu('main_menu', __('Main Menu', 'akash'));

//Walker Menu Property

function akash_nav_description($item_output, $item, $args)
{

    if (!empty($item->description)) {

        $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description .
            '</span>' . $args->link_after . '</a>', $item_output);

    }
    return $item_output;
};

add_filter('walker_nav_menu_start_el', 'akash_nav_description', 10, 4);

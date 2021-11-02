<?php
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
        //Footer option

        $wp_customize->add_section('akash_footer_option', array(

            'title' => __('Footer Option', 'akash'),
            'description' => 'If you interested to change or update your footer setting, you can do it here.',
    
        ));
    
        $wp_customize->add_setting('akash_copyright_section', array(
    
            'default' => '&copy; copyright 2021 | Akash',
    
        ));
    
        $wp_customize->add_control('akash_copyright_section', array(
    
            'label' => 'Copyright Text',
            'description' => 'If need you can update your copyright text from here',
            'setting' => 'akash_copyright_section',
            'section' => 'akash_footer_option',

        ));
}

add_action('customize_register', 'akash_customizar_register');
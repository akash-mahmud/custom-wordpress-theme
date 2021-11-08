<?php

//Sidebar register function

function akash_widget_register(){
  register_sidebar( array(
    'name' => __('Main Widget Area', 'akash'),
    'id' => 'sidebar-1' ,
    'description' => __('Apears in the side bar in the blog page and other pages' , 'akash'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>'
  ));
  
  register_sidebar( array(
    'name' => __('Footer 1 Widget Area', 'akash'),
    'id' => 'footer-1' ,
    'description' => __('Apears in the side bar in the blog page and other pages' , 'akash'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>'
  ));
  
  register_sidebar( array(
    'name' => __('Footer 2 Widget Area', 'akash'),
    'id' => 'footer-2' ,
    'description' => __('Apears in the side bar in the blog page and other pages' , 'akash'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>'
  ));
  
  register_sidebar( array(
    'name' => __('Footer 3 Widget Area', 'akash'),
    'id' => 'footer-3' ,
    'description' => __('Apears in the side bar in the blog page and other pages' , 'akash'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>'
  ));
}

add_action('widgets_init' , 'akash_widget_register' );

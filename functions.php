<?php

/*
* My Theme Functions
*/

//Theme title
add_theme_support('title-tag');


//Theme css and js file calling

function b_css_js_file_calling(){
    wp_enqueue_style( 'my-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','b_css_js_file_calling');

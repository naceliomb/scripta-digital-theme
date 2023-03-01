<?php

//register logo site
function scripta_digital_suporte_tema()
{
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'scripta_digital_suporte_tema');

//register nav menu
function scripta_digital_resgistrando_menu()
{
    register_nav_menu(
        'menu-navegacao',
        'Menu de navegação'
    );
}
add_action('init', 'scripta_digital_resgistrando_menu');


//jquery
function jquery_register()
{
    wp_deregister_script('jquery'); // Remove a versão atual do jQuery
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.6.0', true); // Registra o novo arquivo do jQuery
    wp_enqueue_script('jquery'); // Adiciona o novo arquivo do jQuery na página
}
add_action('wp_enqueue_scripts', 'jquery_register');

//header js
function header_js_register()
{
    wp_enqueue_script('header-js', get_template_directory_uri() . '/js/header.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'header_js_register');
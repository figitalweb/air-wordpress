<?php

/* ********************************************************

Archivo de Scripts y Estilos

***********************************************************/

function air_theme_style(){

    //Registrando hojas de estilo
    wp_register_style('font-inconsolate','https://fonts.googleapis.com/css?family=Inconsolata:400,700', '', '', 'all');
    wp_register_style('animate', RUTATEMA . '/css/animate.css', '', '2015', 'all');
    wp_register_style('icomoon', RUTATEMA . '/css/icomoon.css', '', '', 'all');
    wp_register_style('bootstrap', RUTATEMA . '/css/bootstrap.css', '', '3.3.5', 'all');
    wp_register_style('flexslider', RUTATEMA . '/css/flexslider.css', '', '2.6.0', 'all');
    wp_register_style('style', get_stylesheet_uri(), array('font-inconsolate', 'animate', 'icomoon','bootstrap', 'flexslider'), '1.0', 'all');

    //Cargar hojas de estilo
    wp_enqueue_style('style');

}

add_action( 'wp_enqueue_scripts', 'air_theme_style');


function air_theme_script(){

    //Registrando scripts
    wp_register_script('modernizr', RUTATEMA . '/js/modernizr-2.6.2.min.js', '', '2.6.2', false);
    
    wp_register_script('easing', RUTATEMA . '/js/jquery.easing.1.3.js', array('jquery'), '1.3', true);
    wp_register_script('bootstrap', RUTATEMA . '/js/bootstrap.min.js', array('jquery'), '3.3.5', true);
    wp_register_script('waypoints', RUTATEMA . '/js/jquery.waypoints.min.js', array('jquery'), '4.0', true);
    wp_register_script('flexslider', RUTATEMA . '/js/jquery.flexslider-min.js', array('jquery'), '4.0', true);
    wp_register_script('main', RUTATEMA . '/js/main.js', array('easing', 'bootstrap', 'waypoints', 'flexslider'), '1.0', true);
    

    //Cargar scripts
    wp_enqueue_script('modernizr');
    wp_enqueue_script('main');

}

add_action( 'wp_enqueue_scripts', 'air_theme_script');
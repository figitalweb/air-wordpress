<?php

function air_menus(){

    register_nav_menus( array(
        'main-menu' => __('Menu principal en cabecera', 'air')
    ));
}

add_action('init', 'air_menus');


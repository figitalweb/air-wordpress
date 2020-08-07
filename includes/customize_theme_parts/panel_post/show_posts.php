<?php

/**************************************************************************************
 *                           Sección Mostrar Posts 
 *************************************************************************************/

$wp_customize->add_section('air_post_show', array(
    'title' => __('Opciones de Posts', 'air'),
    'description' => __('Mostrar o no los posts en la home', 'air'),
    'priority' => 20,
    'panel' => 'air_post_panel'
));

/********************** Sección Mostrar Los posts *******************************/

//Setings Para Mostrar Posts
$wp_customize->add_setting('air_setting[show_section_post]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar Posts
$wp_customize->add_control('show_section_post', array(
    'label' => __('Mostrar Posts en la Sección', 'air'),
    'section' => 'air_post_show',
    'settings' => 'air_setting[show_section_post]',
    'type' => 'checkbox'
));
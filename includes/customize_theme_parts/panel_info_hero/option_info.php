<?php

/**************************************************************************************
 *                 Sección Opciones para Titulo, descripción, colores 
 *************************************************************************************/

$wp_customize->add_section('air_info_option', array(
    'title' => __('Opciones', 'air'),
    'description' => __('Agrega Titulo, descripcion y botones a la sección', 'air'),
    'priority' => 10,
    'panel' => 'air_info_hero_panel'
));

/*************************  Mostrar Sección  *******************************/

//Setings Para Mostrar Seccion
$wp_customize->add_setting('air_setting[show_section_info]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar Seccion
$wp_customize->add_control('show_section_info', array(
    'label' => __('Mostrar Sección', 'air'),
    'section' => 'air_info_option',
    'settings' => 'air_setting[show_section_info]',
    'type' => 'checkbox'
));

/*************************  Background de la Sección  *******************************/

//Setings Para Background De La Seccion 
$wp_customize->add_setting('air_setting[info_bg]', array(
    'default' => '#dd356e',
    'transport'   => 'refresh',
    'type' => 'theme_mod'
));

//Control Para Background De La Seccion 
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'info_bg', array(
    'label' => __('Selecciona Un Color De Fondo Para La Sección', 'air'),
    'section' => 'air_info_option',
    'settings' => 'air_setting[info_bg]'
)));

/**********************  Titulo y descripción *******************************/

//Setings Para titulo Seccion
$wp_customize->add_setting('air_setting[title_section_info]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Seccion
$wp_customize->add_control('title_section_info', array(
    'label' => __('Titulo De La Sección', 'air'),
    'description' => __('Titulo que mostrarás en la sección', 'air'),
    'section' => 'air_info_option',
    'settings' => 'air_setting[title_section_info]'
));

//Setings Para Descripción Seccion
$wp_customize->add_setting('air_setting[description_section_info]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripción Seccion
$wp_customize->add_control('description_section_info', array(
    'label' => __('Descripción De La Sección', 'air'),
    'description' => __('Descripción que mostrarás debajo del título de sección', 'air'),
    'section' => 'air_info_option',
    'settings' => 'air_setting[description_section_info]'
));

/*************************  Mostrar Botón  *******************************/

//Setings Para Mostrar boton
$wp_customize->add_setting('air_setting[show_button_info]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar boton
$wp_customize->add_control('show_button_info', array(
    'label' => __('Mostrar Botón', 'air'),
    'section' => 'air_info_option',
    'settings' => 'air_setting[show_button_info]',
    'type' => 'checkbox'
));

/*************************  Titulo y Link de Botón  *******************************/

//Setings Para titulo Boton
$wp_customize->add_setting('air_setting[title_button_info]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Boton
$wp_customize->add_control('title_button_info', array(
    'label' => __('Texto dentro del botón', 'air'),
    'section' => 'air_info_option',
    'settings' => 'air_setting[title_button_info]'
));

//Setings Para link Boton
$wp_customize->add_setting('air_setting[link_button_info]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para link Boton
$wp_customize->add_control('link_button_info', array(
    'label' => __('URL del botón', 'air'),
    'type' => 'url',
    'section' => 'air_info_option',
    'settings' => 'air_setting[link_button_info]'
));


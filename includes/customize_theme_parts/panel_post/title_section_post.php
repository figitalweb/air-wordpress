<?php

/**************************************************************************************
 *                     Sección Titulo y descripción Dentro de Post 
 *************************************************************************************/

$wp_customize->add_section('air_post_title', array(
    'title' => __('Titulo y Descripción', 'air'),
    'description' => __('Agrega un Titulo a la sección', 'air'),
    'priority' => 10,
    'panel' => 'air_post_panel'
));

/********************** Mostrar Titulo y descripción *******************************/

//Setings Para Mostrar Titulo y descripcion de Seccion
$wp_customize->add_setting('air_setting[show_title_section_post]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar titulo y descripcion Seccion
$wp_customize->add_control('show_title_section_post', array(
    'label' => __('Mostrar Titulo y Descripción De La Sección', 'air'),
    'section' => 'air_post_title',
    'settings' => 'air_setting[show_title_section_post]',
    'type' => 'checkbox'
));

/********************** Titulo y descripción *******************************/

//Setings Para titulo Seccion
$wp_customize->add_setting('air_setting[title_section_post]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Seccion
$wp_customize->add_control('title_section_post', array(
    'label' => __('Titulo De La Sección', 'air'),
    'description' => __('Titulo que mostrarás en la sección', 'air'),
    'section' => 'air_post_title',
    'settings' => 'air_setting[title_section_post]'
));

//Setings Para Descripción Seccion
$wp_customize->add_setting('air_setting[description_section_post]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripción Seccion
$wp_customize->add_control('description_section_post', array(
    'label' => __('Descripción De La Sección', 'air'),
    'description' => __('Descripción que mostrarás debajo del título de sección', 'air'),
    'section' => 'air_post_title',
    'settings' => 'air_setting[description_section_post]'
));

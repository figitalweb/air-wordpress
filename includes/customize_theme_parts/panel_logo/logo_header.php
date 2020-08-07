<?php

/**************************************************************************************
 *                      Sección Logotipo 
 *************************************************************************************/
$wp_customize->add_section('air_logo', array(
    'title' => __('Logo En Navegación', 'air'),
    'description' => __('Agrega un logo a la sección', 'air'),
    'priority' => 10,
    'panel' => 'air_logo_panel'
));


/************************ Seleccionar Imagen  ******************************/

//Setings Para Logo
$wp_customize->add_setting('air_setting[img_logo]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Logo
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_logo', array(
    'label' => __('Selecciona Una Imagen', 'air'),
    'description' => __('El logo debe tener el siguiente tamaño: 165px de ancho. Por 54px de alto', 'air'),
    'section' => 'air_logo',
    'settings' => 'air_setting[img_logo]'
)));


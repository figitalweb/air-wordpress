<?php

/**************************************************************************************
 *                          Sección Footer Copy 
 *************************************************************************************/

$wp_customize->add_section('air_footer_copy', array(
    'title' => __('Texto De Pie De Página', 'air'),
    'description' => __('Agrega descripcion a la sección', 'air'),
    'priority' => 10,
    'panel' => 'air_footer_panel'
));


/**********************  Texto De Copy *******************************/

//Setings Para Texto De Copy
$wp_customize->add_setting('air_setting[text_section_footer]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para titulo Seccion
$wp_customize->add_control('text_section_footer', array(
    'label' => __('Texto De Copy', 'air'),
    'description' => __('Texto que mostrará en el pie de página', 'air'),
    'section' => 'air_footer_copy',
    'settings' => 'air_setting[text_section_footer]'
));
<?php

/**************************************************************************************
 *                      Sección imagénes y textos Dentro de Slide 
 *************************************************************************************/
$wp_customize->add_section('air_slide_img', array(
    'title' => __('Imágenes y Textos De Slide', 'air'),
    'description' => __('Agrega imágenes y textos a la sección', 'air'),
    'priority' => 20,
    'panel' => 'air_slide_panel'
));

/************************ Background Dentro de Seccion Slide ******************************/

//Setings Para Background De La Seccion Slide
$wp_customize->add_setting('air_setting[img_slide_bg]', array(
    'default' => '#2A528A',
    'transport'   => 'refresh',
    'type' => 'theme_mod'
));

//Control Para Background De La Seccion Slide
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'img_slide_bg', array(
    'label' => __('Selecciona Un Color De Fondo Para La Sección', 'air'),
    'section' => 'air_slide_img',
    'settings' => 'air_setting[img_slide_bg]'
)));


/************************ Seleccionar Imagen 1, titutlo y descripcion ******************************/

//Setings Para Imagen 1 Slide
$wp_customize->add_setting('air_setting[img_slide_one]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Imagen 1 Slide
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_slide_one', array(
    'label' => __('Selecciona Una Imagen', 'air'),
    'description' => __('Primera imagen que se mostrará en el slide', 'air'),
    'section' => 'air_slide_img',
    'settings' => 'air_setting[img_slide_one]'
)));

//Setings Para Titulo Imagen 1 Slide
$wp_customize->add_setting('air_setting[img_slide_one_title]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Titulo Imagen 1 Slide
$wp_customize->add_control('img_slide_one_title', array(
    'label' => __('Titulo De Primera Imagen', 'air'),
    'section' => 'air_slide_img',
    'settings' => 'air_setting[img_slide_one_title]'
));

//Setings Para Descripcion Imagen 1 Slide
$wp_customize->add_setting('air_setting[img_slide_one_description]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Imagen 1 Slide
$wp_customize->add_control('img_slide_one_description', array(
    'label' => __('Descripción De Primera Imagen', 'air'),
    'section' => 'air_slide_img',
    'settings' => 'air_setting[img_slide_one_description]'
));


/************************ Seleccionar Imagen 2, titutlo y descripcion ******************************/

//Setings Para Imagen 2 Slide
$wp_customize->add_setting('air_setting[img_slide_two]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Imagen 2 Slide
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_slide_two', array(
    'label' => __('Selecciona Una Imagen', 'air'),
    'description' => __('Segunda imagen que se mostrará en el slide', 'air'),
    'section' => 'air_slide_img',
    'settings' => 'air_setting[img_slide_two]'
)));

//Setings Para Titulo Imagen 2 Slide
$wp_customize->add_setting('air_setting[img_slide_two_title]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Titulo Imagen 2 Slide
$wp_customize->add_control('img_slide_two_title', array(
    'label' => __('Titulo De Segunda Imagen', 'air'),
    'section' => 'air_slide_img',
    'settings' => 'air_setting[img_slide_two_title]'
));

//Setings Para Descripcion Imagen 2 Slide
$wp_customize->add_setting('air_setting[img_slide_two_description]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Imagen 2 Slide
$wp_customize->add_control('img_slide_two_description', array(
    'label' => __('Descripción De Segunda Imagen', 'air'),
    'section' => 'air_slide_img',
    'settings' => 'air_setting[img_slide_two_description]'
));


/************************ Seleccionar Imagen 3, titutlo y descripcion ******************************/

//Setings Para Imagen 3 Slide
$wp_customize->add_setting('air_setting[img_slide_tree]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Imagen 3 Slide
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'img_slide_tree', array(
    'label' => __('Selecciona Una Imagen', 'air'),
    'description' => __('Tercera imagen que se mostrará en el slide', 'air'),
    'section' => 'air_slide_img',
    'settings' => 'air_setting[img_slide_tree]'
)));

//Setings Para Titulo Imagen 3 Slide
$wp_customize->add_setting('air_setting[img_slide_tree_title]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Titulo Imagen 3 Slide
$wp_customize->add_control('img_slide_tree_title', array(
    'label' => __('Titulo De Tercera Imagen', 'air'),
    'section' => 'air_slide_img',
    'settings' => 'air_setting[img_slide_tree_title]'
));

//Setings Para Descripcion Imagen 3 Slide
$wp_customize->add_setting('air_setting[img_slide_tree_description]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Descripcion Imagen 3 Slide
$wp_customize->add_control('img_slide_tree_description', array(
    'label' => __('Descripción De Tercera Imagen', 'air'),
    'section' => 'air_slide_img',
    'settings' => 'air_setting[img_slide_tree_description]'
));
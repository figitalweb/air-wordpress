<?php

/**************************************************************************************
 *                 Sección Footer redes sociales 
 *************************************************************************************/

$wp_customize->add_section('air_footer_social', array(
    'title' => __('Redes Sociales', 'air'),
    'description' => __('Agrega tus redes sociales', 'air'),
    'priority' => 20,
    'panel' => 'air_footer_panel'
));


/*************************  Mostrar Botones de Redes   *******************************/

//Setings Para Mostrar boton
$wp_customize->add_setting('air_setting[show_button_social]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para Mostrar boton
$wp_customize->add_control('show_button_social', array(
    'label' => __('Mostrar Botones', 'air'),
    'section' => 'air_footer_social',
    'settings' => 'air_setting[show_button_social]',
    'type' => 'checkbox'
));

/*************************  Link de Twitter  *******************************/

//Setings Para link Boton Twitter
$wp_customize->add_setting('air_setting[title_button_social_twitter]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para link Boton Twitter
$wp_customize->add_control('title_button_social_twitter', array(
    'label' => __('URL De Twitter', 'air'),
    'type' => 'url',
    'section' => 'air_footer_social',
    'settings' => 'air_setting[title_button_social_twitter]'
));


/*************************  Link de Facebook  *******************************/

//Setings Para link Boton Facebook
$wp_customize->add_setting('air_setting[title_button_social_facebook]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para link Boton facebook
$wp_customize->add_control('title_button_social_facebook', array(
    'label' => __('URL De facebook', 'air'),
    'type' => 'url',
    'section' => 'air_footer_social',
    'settings' => 'air_setting[title_button_social_facebook]'
));


/*************************  Link de linkedin  *******************************/

//Setings Para link Boton linkedin
$wp_customize->add_setting('air_setting[title_button_social_linkedin]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para link Boton linkedin
$wp_customize->add_control('title_button_social_linkedin', array(
    'label' => __('URL De linkedin', 'air'),
    'type' => 'url',
    'section' => 'air_footer_social',
    'settings' => 'air_setting[title_button_social_linkedin]'
));


/*************************  Link de instagram  *******************************/

//Setings Para link Boton instagram
$wp_customize->add_setting('air_setting[title_button_social_instagram]', array(
    'default' => '',
    'type' => 'theme_mod'
));

//Control Para link Boton instagram
$wp_customize->add_control('title_button_social_instagram', array(
    'label' => __('URL De instagram', 'air'),
    'type' => 'url',
    'section' => 'air_footer_social',
    'settings' => 'air_setting[title_button_social_instagram]'
));

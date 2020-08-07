<?php
/**
 * Personalizar el tema, agregando paneles, secciones, settings y controles
 */

 function air_customize_theme($wp_customize) {

    /**************************************************************************************
     *                              Panel de Slide 
     *************************************************************************************/
     $wp_customize->add_panel('air_slide_panel', array(
         'title' => __('Slide', 'air'),
         'description' => __('Personaliza las imágenes a mostrar y el contenido', 'air'),
         'priority' => 35
     ));

    /************* Sección Titulo y descripción Dentro de Slide **********************/
     include_once('customize_theme_parts/panel_slide/title_section.php');

    /************* Sección imagénes y textos Dentro de Slide **********************/
     include_once('customize_theme_parts/panel_slide/slide_img.php');

 }

 add_action('customize_register', 'air_customize_theme');
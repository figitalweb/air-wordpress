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

    // Sección Titulo y descripción Dentro de Slide
     include_once('customize_theme_parts/panel_slide/title_section.php');

    // Sección imagénes y textos Dentro de Slide 
     include_once('customize_theme_parts/panel_slide/slide_img.php');


    /**************************************************************************************
     *                              Panel de Posts 
     *************************************************************************************/
    $wp_customize->add_panel('air_post_panel', array(
        'title' => __('Posts De Home', 'air'),
        'description' => __('Personaliza los posts a mostrar', 'air'),
        'priority' => 40
    ));

    // Sección Titulo y descripción Dentro de Posts
    include_once('customize_theme_parts/panel_post/title_section_post.php');

    // Sección Mostrar Posts
    include_once('customize_theme_parts/panel_post/show_posts.php');


    /**************************************************************************************
     *                              Panel de Información Hero 
     *************************************************************************************/
    $wp_customize->add_panel('air_info_hero_panel', array(
        'title' => __('Sección Información', 'air'),
        'description' => __('Personaliza la seccion info hero', 'air'),
        'priority' => 42
    ));

    // Sección Titulo, descripción, botones y color Dentro de Info Hero
    include_once('customize_theme_parts/panel_info_hero/option_info.php');

 }

 add_action('customize_register', 'air_customize_theme');
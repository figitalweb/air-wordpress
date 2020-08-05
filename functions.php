<?php

/* ********************************************************

Archivo de funciones, soporte del tema y definiciones

***********************************************************/

//Ruta principal del tema
define('RUTATEMA', get_theme_file_uri());


/*************** Soporte del tema ***************/
if (!function_exists('air_custom_theme_features')) {

    // Register Theme Features
    function air_custom_theme_features()
    {

        // Add theme support for Automatic Feed Links
        add_theme_support('automatic-feed-links');

        // Add theme support for Post Formats
        add_theme_support('post-formats', array('status', 'quote', 'gallery', 'image', 'video', 'audio', 'aside'));

        // Add theme support for Featured Images
        add_theme_support('post-thumbnails');

        // Add theme support for Custom Background
        $background_args = array(
            'default-color'          => 'ffffff',
            'default-image'          => '',
            'default-repeat'         => '',
            'default-position-x'     => '',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
        );
        add_theme_support('custom-background', $background_args);

        // Add theme support for HTML5 Semantic Markup
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

        // Add theme support for document Title tag
        add_theme_support('title-tag');

        // Add theme support for custom CSS in the TinyMCE visual editor
        add_editor_style('editor-style.css');

        // Add theme support for Translation
        load_theme_textdomain('air', get_template_directory() . '/language');

        //Agregando imagen personalizada
        add_image_size( 'blog-img', 360, 300, true );
    }

    add_action('after_setup_theme', 'air_custom_theme_features');
}

//Estilos y Scripts
require_once('includes/air_styles_scripts.php');
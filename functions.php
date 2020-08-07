<?php

/* ********************************************************

Archivo de funciones, soporte del tema y definiciones

***********************************************************/

/*************** Ruta Raiz ***************/
define('RUTATEMA', get_theme_file_uri());


/*************** Soporte del tema ***************/
require_once('includes/air_custom_theme.php');


/*************** Estilos y scripts ***************/
require_once('includes/air_styles_scripts.php');

/*************** Agregando zonas de menú  *********/
require_once('includes/menus.php');

function register_custom_nav_walker()
{
    require_once 'air-class-walker-nav-menu.php';
}

add_action('after_setup_theme', 'register_custom_nav_walker');

/*************** Agregando Sidebars  *********/
require_once('includes/air_sidebars.php');

/*************** Cambiar cantidad de palabras de extracto  *********/
function air_custom_the_excerpt($length)
{
    $length = 18;
    return $length;
}
add_filter('excerpt_length', 'air_custom_the_excerpt');

/*************** Agregando Campos nuevos a inicio  *********/
require_once('includes/campos_inicio.php');

/*************** Agregando Personalizador  *********/
require_once('includes/air_personalizador_tema.php');

/************ Agregando Custom Post type Servicios *********/
require_once('includes/custom_post_services.php');


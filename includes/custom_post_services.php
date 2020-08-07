<?php

/*************** Custom Post Type *********/
if (!function_exists('air_custom_post_type')) {

    // Register Custom Post Type
    function air_custom_post_type()
    {

        $labels = array(
            'name' => _x('Servicios', 'Post Type General Name', 'air'),
            'singular_name' => _x('Servicio', 'Post Type Singular Name', 'air'),
            'menu_name' => __('Servicios', 'air'),
            'name_admin_bar' => __('Servicios', 'air'),
            'archives' => __('Item Archives', 'air'),
            'attributes' => __('Item Attributes', 'air'),
            'parent_item_colon' => __('Parent Item:', 'air'),
            'all_items' => __('Todos Los Servicios', 'air'),
            'add_new_item' => __('Agregar Nuevo Servicio', 'air'),
            'add_new' => __('Agregar Nuevo', 'air'),
            'new_item' => __('Nuevo Servicio', 'air'),
            'edit_item' => __('Editar Servicio', 'air'),
            'update_item' => __('Actualizar Servicio', 'air'),
            'view_item' => __('Ver Servicio', 'air'),
            'view_items' => __('Ver Servicios', 'air'),
            'search_items' => __('Buscar Servicio', 'air'),
            'not_found' => __('No encontrado', 'air'),
            'not_found_in_trash' => __('No encontrado en la papelera', 'air'),
            'featured_image' => __('Imagen destacada', 'air'),
            'set_featured_image' => __('Seleccionar imagen destacada', 'air'),
            'remove_featured_image' => __('Eliminar Imagen destacada', 'air'),
            'use_featured_image' => __('Use as featured image', 'air'),
            'insert_into_item' => __('Insertar Servicio', 'air'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'air'),
            'items_list' => __('Items list', 'air'),
            'items_list_navigation' => __('Items list navigation', 'air'),
            'filter_items_list' => __('Filter items list', 'air'),
        );
        $args = array(
            'label' => __('Servicio', 'air'),
            'description' => __('Agregar servicios en la home', 'air'),
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 20,
            'menu_icon' => 'dashicons-portfolio',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => false,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => true,
            'publicly_queryable' => true,
            'rewrite' => false,
            'capability_type' => 'page'
        );
        register_post_type('services', $args);
    }
    add_action('init', 'air_custom_post_type', 0);
}


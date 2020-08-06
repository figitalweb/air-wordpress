<?php

function air_sidebars() {

    register_sidebar(array(
        'name'          => __('Pie de Pagina Izquierda', 'air'),
        'id'            => 'footer-sidebar-left',
        'description'   => __('Sidebar de la izquierda', 'air'),
        'class'         => '',
        'before_widget' => '<div class="col-md-4 fh5co-widget">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h4>',
        'after_title'   => "</h4>\n"

    ));

    register_sidebar(array(
        'name'          => __('Pie de Pagina Centro', 'air'),
        'id'            => 'footer-sidebar-cent',
        'description'   => __('Sidebar del Centro', 'air'),
        'class'         => '',
        'before_widget' => '<div class="col-md-4 fh5co-widget">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h4>',
        'after_title'   => "</h4>\n"

    ));

    register_sidebar(array(
        'name'          => __('Pie de Pagina Derecha', 'air'),
        'id'            => 'footer-sidebar-right',
        'description'   => __('Sidebar de la Derecha', 'air'),
        'class'         => '',
        'before_widget' => '<div class="col-md-4 fh5co-widget">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h4>',
        'after_title'   => "</h4>\n"

    ));
}

add_action('widgets_init', 'air_sidebars');
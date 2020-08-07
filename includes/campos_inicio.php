<?php
/*
Campos personalizados para modificar titulo, subtitulo, botones de pagina inicio
*/

function air_new_metabox_home()
{

    add_meta_box('air_data_home', __('Datos de la pagina inicio', 'air'), 'air_meta_home', 'page', 'normal', 'high');
}

add_action('add_meta_boxes', 'air_new_metabox_home');

$air_custom_field = array(

    array(
        'label' => __('Titulo Principal En Home', 'air'),
        'description' => __('Texto que se muestra en la sección hero de la home', 'air'),
        'id' => 'title-main',
        'type' => 'text'
    ),

    array(
        'label' => __('Sub-Titulo Principal En Home', 'air'),
        'description' => __('Texto que se muestra en la sección hero de la home', 'air'),
        'id' => 'title-description',
        'type' => 'text'
    ),

    array(
        'label' => __('Texto del Botón Izuierdo', 'air'),
        'description' => __('Texto que se muestra en el botón izquierdo en sección hero de la home', 'air'),
        'id' => 'button-text-izq',
        'type' => 'text'
    ),

    array(
        'label' => __('Enlace del Botón Izuierdo', 'air'),
        'description' => __('Coloca el link del boton', 'air'),
        'id' => 'button-link-izq',
        'type' => 'text'
    ),

    array(
        'label' => __('Texto del Botón Derecho', 'air'),
        'description' => __('Texto que se muestra en el botón derecho en sección hero de la home', 'air'),
        'id' => 'button-text-der',
        'type' => 'text'
    ),

    array(
        'label' => __('Enlace del Botón Derecho', 'air'),
        'description' => __('Coloca el link del boton', 'air'),
        'id' => 'button-link-der',
        'type' => 'text'
    )
);

function air_meta_home()
{

    global $air_custom_field, $post;

    //Creamos un nonce para seguridad de envio de datos
    wp_nonce_field('air_meta_home_nonce', 'air_meta_nonce');

    foreach ($air_custom_field as $field) {

        //Obtenemos el valor del campo
        $air_meta = get_post_meta($post->ID, $field['id'], true);
?>

        <!-- Estructura a mostrar en la pagina -->
        <p>
            <label for="<?php echo $field['id']; ?>"><?php echo $field['label']; ?></label><br>
            <input id="<?php echo $field['id']; ?>" class="widefat" type="text" name="<?php echo $field['id']; ?>" value="<?php echo $air_meta; ?>">
            <span class="howto"><?php echo $field['description']; ?></span>
        </p>

    <?php

    }
}

function save_air_meta($post_id)
{

    global $air_custom_field;

    //Verificamos si el nonce es correcto
    if (!isset($_POST['air_meta_nonce']) || !wp_verify_nonce($_POST['air_meta_nonce'], 'air_meta_home_nonce')) {
        return;
    }

    //Verificamos si wordpress está realizando autoguardado
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }


    //Verificamos si el usuario tiene los permisos para editar
    if ($_POST['post_type'] == 'page') {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    }

    foreach ($air_custom_field as $field) {

        //Obtenemos el valor antiguo
        $air_old_field = get_post_meta($post_id, $field['id'], true);

        //Obtenemos el valor nuevo
        $air_new_field = $_POST[$field['id']];

        //Verificamos los campos nuevos con los antiguos para actualizar
        if ($air_new_field && $air_new_field != $air_old_field) {

            update_post_meta($post_id, $field['id'], $air_new_field);
        } elseif ($air_new_field == '' && $air_old_field) {

            delete_post_meta($post_id, $field['id'], $air_old_field);
        }
    }
}

add_action('save_post', 'save_air_meta');

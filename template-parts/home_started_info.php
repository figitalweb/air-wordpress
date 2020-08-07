<?php

$options_info = get_theme_mod('air_setting');

//Mostrar seccion info
if (!empty($options_info['show_section_info'])) {
    $show_info = $options_info['show_section_info'];
} else {
    $show_info = false;
}

//Titulo y Descripcion
if (!empty($options_info['title_section_info'])) {
    $title_info = $options_info['title_section_info'];
} else {
    $title_info = '';
}

if (!empty($options_info['description_section_info'])) {
    $description_info = $options_info['description_section_info'];
} else {
    $description_info = '';
}


//Mostrar Boton de la seccion
if (!empty($options_info['show_button_info'])) {
    $show_button_info = $options_info['show_button_info'];
} else {
    $show_button_info = false;
}

//Texto y Link del boton
if (!empty($options_info['title_button_info'])) {
    $title_button_info = $options_info['title_button_info'];
} else {
    $title_button_info = '';
}

if (!empty($options_info['link_button_info'])) {
    $link_button_info = $options_info['link_button_info'];
} else {
    $link_button_info = '';
}

?>

<?php if ($show_info) : ?>
    <div id="fh5co-started">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2><?php echo $title_info; ?></h2>
                    <p><?php echo $description_info; ?></p>

                    <?php if ($show_button_info) : ?>
                        <p><a href="<?php echo esc_url($link_button_info); ?>" class="btn btn-default btn-lg"><?php echo $title_button_info; ?></a></p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
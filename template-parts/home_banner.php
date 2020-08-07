<?php

//Obtenemos los datos de los metaboxes creados para pagina de inicio
$titulo_home = get_post_meta($post->ID, 'title-main', true);
$subtitulo_home = get_post_meta($post->ID, 'title-description', true);
$button_text_home_izq = get_post_meta($post->ID, 'button-text-izq', true);
$button_link_home_izq = get_post_meta($post->ID, 'button-link-izq', true);
$button_text_home_der = get_post_meta($post->ID, 'button-text-der', true);
$button_link_home_der = get_post_meta($post->ID, 'button-link-der', true);

if (empty($titulo_home)) {
    $titulo_home = get_bloginfo('name');
}
if (empty($subtitulo_home)) {
    $subtitulo_home = get_bloginfo('description');
}
if (empty($button_text_home_izq)) {
    $button_text_home_izq = __('Ver Más', 'air');
}
if (empty($button_text_home_der)) {
    $button_text_home_der = __('Ver Más', 'air');
}

?>

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1><?php echo $titulo_home; ?></h1>
                        <h2><?php echo $subtitulo_home; ?></h2>
                        <p>
                            <?php if (!empty($button_link_home_izq)) : ?>
                                <a class="btn btn-primary btn-lg btn-demo" href="<?php echo esc_url($button_link_home_izq); ?>"></i> <?php echo $button_text_home_izq; ?></a>
                            <?php endif; ?>

                            <?php if (!empty($button_link_home_der)) : ?>
                                <a class="btn btn-primary btn-lg btn-learn" href="<?php echo esc_url($button_link_home_der); ?>"><?php echo $button_text_home_der; ?></a>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
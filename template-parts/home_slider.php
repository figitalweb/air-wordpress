<?php

//Obteniendo opciones del personalizador para el slide
$options_slide = get_theme_mod('air_setting');

//Opciones para mosrar titulo y Descripcion
if (!empty($options_slide['show_title_section_slide'])) {
    $show_title_slide = $options_slide['show_title_section_slide'];
} else {
    $show_title_slide = false;
}

if (!empty($options_slide['title_section_slide'])) {
    $title_slide = $options_slide['title_section_slide'];
} else {
    $title_slide = '';
}

if (!empty($options_slide['description_section_slide'])) {
    $description_slide = $options_slide['description_section_slide'];
} else {
    $description_slide = '';
}

//Opciones para imagenes, titulo y Descripcion
if (!empty($options_slide['img_slide_one'])) {
    $img_1_slide = $options_slide['img_slide_one'];
} else {
    $img_1_slide = false;
}

if (!empty($options_slide['img_slide_one_title'])) {
    $title_img_1_slide = $options_slide['img_slide_one_title'];
} else {
    $title_img_1_slide = '';
}

if (!empty($options_slide['img_slide_one_description'])) {
    $description_img_1_slide = $options_slide['img_slide_one_description'];
} else {
    $description_img_1_slide = '';
}


if (!empty($options_slide['img_slide_two'])) {
    $img_2_slide = $options_slide['img_slide_two'];
} else {
    $img_2_slide = false;
}

if (!empty($options_slide['img_slide_two_title'])) {
    $title_img_2_slide = $options_slide['img_slide_two_title'];
} else {
    $title_img_2_slide = '';
}

if (!empty($options_slide['img_slide_two_description'])) {
    $description_img_2_slide = $options_slide['img_slide_two_description'];
} else {
    $description_img_2_slide = '';
}



if (!empty($options_slide['img_slide_tree'])) {
    $img_3_slide = $options_slide['img_slide_tree'];
} else {
    $img_3_slide = false;
}

if (!empty($options_slide['img_slide_tree_title'])) {
    $title_img_3_slide = $options_slide['img_slide_tree_title'];
} else {
    $title_img_3_slide = '';
}

if (!empty($options_slide['img_slide_tree_description'])) {
    $description_img_3_slide = $options_slide['img_slide_tree_description'];
} else {
    $description_img_3_slide = '';
}

?>

<div id="fh5co-slider">
    <div class="container">
        <div class="row">

            <?php if ($show_title_slide) : ?>
                <div class="col-md-6 animate-box">
                    <div class="heading">
                        <h2><?php echo $title_slide; ?></h2>
                        <p><?php echo $description_slide; ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-md-6 col-md-push-1 animate-box">
                <aside id="fh5co-hero">
                    <div class="flexslider">
                        <ul class="slides">

                            <?php if (!empty($img_1_slide)) : ?>
                                <li style="background-image: url(<?php echo $img_1_slide; ?>);">

                                <?php else : ?>
                                <li style="background-image: url(<?php echo RUTATEMA; ?>/images/img_bg_1.jpg);">
                                <?php endif; ?>

                                <div class="overlay-gradient"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
                                            <div class="slider-text-inner">
                                                <div class="desc">
                                                    <h2><?php echo $title_img_1_slide; ?></h2>
                                                    <p><?php echo $description_img_1_slide; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </li>


                                <?php if (!empty($img_2_slide)) : ?>
                                    <li style="background-image: url(<?php echo $img_2_slide; ?>);">

                                    <?php else : ?>
                                    <li style="background-image: url(<?php echo RUTATEMA; ?>/images/img_bg_2.jpg);">
                                    <?php endif; ?>

                                    <div class="overlay-gradient"></div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
                                                <div class="slider-text-inner">
                                                    <div class="desc">
                                                        <h2><?php echo $title_img_2_slide; ?></h2>
                                                        <p><?php echo $description_img_2_slide; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </li>


                                    <?php if (!empty($img_3_slide)) : ?>
                                        <li style="background-image: url(<?php echo $img_3_slide; ?>);">

                                        <?php else : ?>
                                        <li style="background-image: url(<?php echo RUTATEMA; ?>/images/img_bg_3.jpg);">
                                        <?php endif; ?>
                                        <div class="overlay-gradient"></div>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
                                                    <div class="slider-text-inner">
                                                        <div class="desc">
                                                            <h2><?php echo $title_img_3_slide; ?></h2>
                                                            <p><?php echo $description_img_3_slide; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
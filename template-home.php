<?php
/*
template name: Pagina de Inicio

*/
?>

<?php get_header(); ?>

<?php

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

<div id="fh5co-features">
    <div class="container">
        <div class="services-padding">
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="feature-left">
                        <span class="icon">
                            <i class="icon-hotairballoon"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Marketing</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More <i class="icon-arrow-right22"></i></a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 animate-box">
                    <div class="feature-left">
                        <span class="icon">
                            <i class="icon-search"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Search Engine</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More <i class="icon-arrow-right22"></i></a></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 animate-box">
                    <div class="feature-left">
                        <span class="icon">
                            <i class="icon-wallet"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Earn Money</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More <i class="icon-arrow-right22"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 animate-box">

                    <div class="feature-left">
                        <span class="icon">
                            <i class="icon-wine"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Entrepreneur</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More <i class="icon-arrow-right22"></i></a></p>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 animate-box">
                    <div class="feature-left">
                        <span class="icon">
                            <i class="icon-genius"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Stragic Plan</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More <i class="icon-arrow-right22"></i></a></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 animate-box">
                    <div class="feature-left">
                        <span class="icon">
                            <i class="icon-chat"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Support</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href="#">Learn More <i class="icon-arrow-right22"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-wireframe">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Wireframe Connects the Underlying Conceptual Structure</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 animate-box">
                <div class="user-frame">
                    <h3>Wireframe Connects the Underlying Conceptual Structure</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                    <span>Louie Jie Mahusay</span><br>
                    <small>CEO, Founder</small>
                </div>
            </div>
            <div class="col-md-7 animate-box">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <blockquote>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                </blockquote>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts. far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-6 animate-box">
                <div class="heading">
                    <h2>Download Our Latest Free HTML5 Bootstrap Template</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                </div>
            </div>
            <div class="col-md-6 col-md-push-1 animate-box">
                <aside id="fh5co-hero">
                    <div class="flexslider">
                        <ul class="slides">
                            <li style="background-image: url(<?php echo RUTATEMA; ?>/images/img_bg_1.jpg);">
                                <div class="overlay-gradient"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
                                            <div class="slider-text-inner">
                                                <div class="desc">
                                                    <h2>Air Free HTML5 Bootstrap Template</h2>
                                                    <p>Ink is a free html5 bootstrap and a multi-purpose template perfect for any type of websites. A combination of a minimal and modern design template. The features are big slider on homepage, smooth animation, product listing and many more</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li style="background-image: url(<?php echo RUTATEMA; ?>/images/img_bg_2.jpg);">
                                <div class="overlay-gradient"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
                                            <div class="slider-text-inner">
                                                <div class="desc">
                                                    <h2>Ink Free HTML5 Bootstrap Template</h2>
                                                    <p>Ink is a free html5 bootstrap and a multi-purpose template perfect for any type of websites. A combination of a minimal and modern design template. The features are big slider on homepage, smooth animation, product listing and many more</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li style="background-image: url(<?php echo RUTATEMA; ?>/images/img_bg_3.jpg);">
                                <div class="overlay-gradient"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
                                            <div class="slider-text-inner">
                                                <div class="desc">
                                                    <h2>Travel Free HTML5 Bootstrap Template</h2>
                                                    <p>Ink is a free html5 bootstrap and a multi-purpose template perfect for any type of websites. A combination of a minimal and modern design template. The features are big slider on homepage, smooth animation, product listing and many more</p>
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

<div id="fh5co-blog">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Recent Post</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">

            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
            );

            $query_inicio = new WP_Query($args);

            ?>
            <?php if ($query_inicio->have_posts()) : while ($query_inicio->have_posts()) : $query_inicio->the_post(); ?>
                    <div class="col-md-4">
                        <div class="fh5co-blog animate-box">

                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" class="blog-bg">
                                    <?php the_post_thumbnail('blog-img'); ?>
                                </a>
                            <?php else : ?>
                                <a href="<?php the_permalink(); ?>" class="blog-bg" style="background-image: url(<?php echo RUTATEMA; ?>/images/blog-1.jpg);">
                                </a>
                            <?php endif; ?>

                            <div class="blog-text">
                                <span class="posted_on"><?php the_time(get_option('date_format')); ?></span>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                                <ul class="stuff">
                                    <li><i class="icon-heart2"></i>249</li>
                                    <li><i class="icon-eye2"></i>1,308</li>
                                    <li><a href="<?php the_permalink(); ?>"><?php _e('Leer Más', 'air'); ?><i class="icon-arrow-right22"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>

        </div>
    </div>
</div>

<div id="fh5co-started">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Hire Us!</h2>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                <p><a href="#" class="btn btn-default btn-lg">Contact Us</a></p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
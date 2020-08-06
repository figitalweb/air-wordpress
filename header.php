<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>" />

    <!-- Facebook y Twitter integracion -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Pingback -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- Comentarios de respuesta en hilos -->
    <?php if(is_single() && comments_open()){ 
        wp_enqueue_script('comment-reply');
         }
    ?>

    <?php wp_head(); ?>
</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <!-- Navegacion y Logotipo -->
        <nav class="fh5co-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="fh5co-logo"><a href="index.html">Air<span>.</span></a></div>
                        </div>
                        <!-- <div class="col-xs-10 text-right menu-1"> -->

                        <?php wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container_class' => 'col-xs-10 text-right menu-1',
                            'walker' => new Air_Walker_Nav_Menu
                            
                        )); ?>
                            <!-- <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li class="has-dropdown">
                                    <a href="blog.html">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Web Design</a></li>
                                        <li><a href="#">eCommerce</a></li>
                                        <li><a href="#">Branding</a></li>
                                        <li><a href="#">API</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li class="btn-cta"><a href="#"><span>Login</span></a></li>
                            </ul> -->
                        <!-- </div> -->
                    </div>

                </div>
            </div>
        </nav>
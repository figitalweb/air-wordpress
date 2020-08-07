<?php

$options_posts = get_theme_mod('air_setting');

//Mostrar toda la seccion del blog
if (!empty($options_posts['show_section_post'])) {
    $show_posts = $options_posts['show_section_post'];
} else {
    $show_posts = false;
}


//Mostrar Titulo y descripcion del blog
if (!empty($options_posts['show_title_section_post'])) {
    $show_title_posts = $options_posts['show_title_section_post'];
} else {
    $show_title_posts = false;
}


//Titulo y descripcion del blog
if (!empty($options_posts['title_section_post'])) {
    $title_posts = $options_posts['title_section_post'];
} else {
    $title_posts = '';
}

if (!empty($options_posts['description_section_post'])) {
    $description_posts = $options_posts['description_section_post'];
} else {
    $description_posts = '';
}

?>

<?php if ($show_posts) : ?>
    <div id="fh5co-blog">
        <div class="container">
            <div class="row animate-box">

                <?php if ($show_title_posts) : ?>
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2><?php echo $title_posts; ?></h2>
                        <p><?php echo $description_posts; ?></p>
                    </div>
                <?php endif; ?>

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
<?php endif; ?>
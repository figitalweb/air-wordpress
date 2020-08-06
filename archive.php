<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()) : ?>

        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">

                <?php if (is_category()) : ?>
                    <h2><?php _e('Categoría: ', 'air'); ?><?php single_cat_title(); ?></h2>

                <?php elseif (is_tag()) : ?>
                    <h2><?php _e('Etiqueta: ', 'air'); ?><?php single_tag_title(); ?></h2>

                <?php elseif (is_day()) : ?>
                    <h2><?php _e('Archivo: ', 'air'); ?><?php the_time(get_option('date_format')); ?></h2>

                <?php elseif (is_month()) : ?>
                    <h2><?php _e('Archivo: ', 'air'); ?><?php the_time('F Y'); ?></h2>

                <?php elseif (is_year()) : ?>
                    <h2><?php _e('Archivo: ', 'air'); ?><?php the_time('Y'); ?></h2>

                <?php elseif (is_author()) : ?>
                    <h2><?php _e('Articulos de: ', 'air'); ?>
                        <?php
                        $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
                        ?>
                        <?php echo  $curauth->name; ?>
                    </h2>

                <?php elseif (is_404()) : ?>
                    <h2><?php _e('Página No Encontrada, Puedes Vovler al Inicio', 'air'); ?></h2>

                <?php endif; ?>
            </div>
        </div>

        <div class="row">

            <?php while (have_posts()) : the_post(); ?>

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

            <?php endwhile; ?>

            <!-- Navegacion -->
            <div>
                <div class="col-md-5 nav-previous alignleft">
                    <?php previous_posts_link('Anterior'); ?>
                </div>

                <div class="col-md-5 nav-next alignright"><?php next_posts_link('Siguiente'); ?>
                </div>
            </div>


        <?php
    else :
        //Contenido no encontrado
        get_template_part('template-parts/content', 'nopost');

    endif; ?>

        </div>
        <?php get_footer(); ?>
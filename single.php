<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="fh5co-wireframe">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2><?php the_title(); ?></h2>
                        <div class="blog-text">
                            <span class="posted_on"><?php the_time(get_option('date_format')); ?></span>
                            <span class="posted_on"><?php _e('Autor: ', 'air'); the_author_posts_link(); ?></span>
                            <span class="posted_on"><?php the_tags(); ?></span>
                            <span class="posted_on"><?php _e('Categorías: ', 'air'); the_category(','); ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md- animate-box">
                        <p><?php the_content(); ?> </p>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile; endif; ?>


<?php get_footer(); ?>
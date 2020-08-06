<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="fh5co-wireframe">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md- animate-box">
                        <p><?php the_content(); ?> </p>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile;
endif; ?>


<?php get_footer(); ?>
<?php

$query_servicios = new WP_Query(array(
    'post_type' => 'services'
));

?>

<?php if ($query_servicios->have_posts()) : ?>
    <div id="fh5co-features">
        <div class="container">
            <div class="services-padding">
                <div class="row">

                    <?php while ($query_servicios->have_posts()) : $query_servicios->the_post(); ?>
                        <div class="col-md-4 animate-box">
                            <div class="feature-left">
                                <span class="icon">
                                    <i class="icon-hotairballoon"></i>
                                </span>
                                <div class="feature-copy">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>

            </div>
        </div>
    </div>
<?php endif; ?>
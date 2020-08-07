<footer id="fh5co-footer" role="contentinfo">
    <div class="container">

        <!-- Area de Sidebar y widgets -->
        <?php get_sidebar(); ?>

        <!-- Area de Copyright y Social media -->

        <?php
        $options_footer = get_theme_mod('air_setting');

        //Texto a mostrar en el copy
        if (!empty($options_footer['text_section_footer'])) {
            $text_section_footer = $options_footer['text_section_footer'];
        } else {
            $text_section_footer = '';
        }

        //Mostrar botones de social media
        if (!empty($options_footer['show_button_social'])) {
            $show_button_social = $options_footer['show_button_social'];
        } else {
            $show_button_social = false;
        }


        //Link de botones de social media
        if (!empty($options_footer['title_button_social_twitter'])) {
            $title_button_social_twitter = $options_footer['title_button_social_twitter'];
        } else {
            $title_button_social_twitter = false;
        }

        if (!empty($options_footer['title_button_social_facebook'])) {
            $title_button_social_facebook = $options_footer['title_button_social_facebook'];
        } else {
            $title_button_social_facebook = false;
        }

        if (!empty($options_footer['title_button_social_linkedin'])) {
            $title_button_social_linkedin = $options_footer['title_button_social_linkedin'];
        } else {
            $title_button_social_linkedin = false;
        }

        if (!empty($options_footer['title_button_social_instagram'])) {
            $title_button_social_instagram = $options_footer['title_button_social_instagram'];
        } else {
            $title_button_social_instagram = false;
        }

        ?>
        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; <?php echo $text_section_footer; ?> Desarrollado En Wordpress by <a href="https://figital.com.ar/" target="_blank">Diego Orellano</a></small>
                </p>

                <?php if ($show_button_social) : ?>
                    <p>
                        <ul class="fh5co-social-icons">
                            <li><a href="<?php echo esc_url($title_button_social_twitter); ?>"><i class="icon-twitter"></i></a></li>
                            <li><a href="<?php echo esc_url($title_button_social_facebook); ?>"><i class="icon-facebook"></i></a></li>
                            <li><a href="<?php echo esc_url($title_button_social_linkedin); ?>"><i class="icon-linkedin"></i></a></li>
                            <li><a href="<?php echo esc_url($title_button_social_instagram); ?>"><i class="icon-instagram"></i></a></li>
                        </ul>
                    </p>
                <?php endif; ?>
            </div>
        </div>

    </div>
</footer>
</div>

<!-- Icono para volver arriba -->
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
</div>

<?php wp_footer(); ?>
</body>

</html>
<?php
/*
template name: Pagina de Inicio

*/
?>

<?php get_header(); ?>


<!-- Sección Banner Header -->
<?php include_once('template-parts/home_banner.php'); ?>

<!-- Sección Servicios -->
<?php include_once('template-parts/home_features.php'); ?>

<!-- Sección Wireframes -->
<?php include_once('template-parts/home_wireframe.php'); ?>

<!-- Sección Slider -->
<?php include_once('template-parts/home_slider.php'); ?>

<!-- Sección Blog -->
<?php include_once('template-parts/home_blog.php'); ?>

<!-- Sección Info Started -->
<?php include_once('template-parts/home_started_info.php'); ?>


<?php get_footer(); ?>
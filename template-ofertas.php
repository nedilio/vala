<?php
/**
 * Template Name: Ofertas
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php // get_template_part('templates/header', 'header'); ?>
  <?php get_template_part('templates/content', 'ofertas'); ?>
<?php endwhile; ?>
<?php
/**
 * Template Name: Galeria
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'galeria'); ?>
<?php endwhile; ?>

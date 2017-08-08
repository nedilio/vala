<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <?php the_post_thumbnail('medium_large', ['class' => 'img-fluid rounded']);?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
<div class="navigation">
<div class="alignleft">
<?php previous_post_link(); ?>    
</div>
<div class="alignright">
<?php next_post_link(); ?>
</div>
</div> <!-- end navigation -->
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>

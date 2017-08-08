<div class="col-lg-6">
    <article class="rounded blog-post-container" <?php post_class();?>>
        <header>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large', ['class' => 'img-fluid rounded']);?></a>
            <h2 class="entry-title text-center">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <?php //get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
    </article>
</div>

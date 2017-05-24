<div class="container">
    <div class="row">
        <?php $loop = new WP_Query( array( 'post_type' => 'artista', 'posts_per_page' => 4) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col">
            <div>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
            </div>
            <div>
                <h3>
                    <?php echo get_the_title(); ?>
                </h3>
            </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</div>

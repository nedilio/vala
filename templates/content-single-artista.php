<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
    <div class="row">
        <div class="col-8">
            <h2>
                <?php the_title(); ?>
            </h2>
            <p>
                <?php echo get_post_field( 'biografia', get_post() );?>
            </p>
        </div>
        <div class="col">
            <?php the_post_thumbnail(); ?>
        </div>
    </div>
    <div class="row">
        
         <?php $autor_single = get_the_title();?>
          <!-- Obras del Artista -->
          <?php $loop = new WP_Query( array( 'post_type' => 'obra', 'order' => 'ASC' ));?>
              <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                  <?php $autor_obra= get_post_meta($post->ID,'autor_text',true );?>
                      <?php
                          if ($autor_single == $autor_obra){
                              echo '<a href="';
                              the_permalink();                                
                              echo '">';
                              the_post_thumbnail('thumbnail');
                              echo'</a>';
                          }
                      
                      ?>
          <?php endwhile; wp_reset_query(); ?>
    </div>
</article>
<?php endwhile; ?>

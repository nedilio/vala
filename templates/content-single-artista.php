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
            <?php the_post_thumbnail('obras_artistas_home'); ?>
        </div>
    </div>
    <div class="row">
        <?php $autor_single = get_the_title();
        
//        echo $autor_single;
        $count = 0;?>
        <h3>Obras de
            <?php echo $autor_single;?>
        </h3>
    </div>
    <!-- Obras del Artista -->
    <div class="row">
        <?php $loop = new WP_Query( array( 'post_type' => 'obra',
                                                'order' => 'ASC',
                                                'meta_key' => 'autor_text',
                                                'meta_value' => $autor_single
                                               ));?>
        <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <div class="col-sm-3 text-center">
            <a href="<?php the_permalink()?>">
                <?php the_post_thumbnail('obras_artistas_home');?>
            </a>
            <h3><?php the_title();?></h3>
        </div>

        <?php
            //echo key(get_post_meta($post->ID,'autor',false)[0]).'---';
            // $array=(get_post_meta($post->ID,'autor',false)[0]);
            //        print_r(array_keys($array)[11]);
            //        print_r(get_post_meta($post->ID,'autor',false));
            ?>
            <?php endwhile; wp_reset_query(); ?>
    </div>


</article>
<?php endwhile; ?>

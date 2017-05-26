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
    <div class="row obras-wrapper">
        <?php $autor_single = get_the_title();?>
<div class="col">
            <h3>Obras de
                <?php echo $autor_single;?>
            </h3>
        </div>
    </div>
    <!-- Obras del Artista -->

    <div class="row obras-wrapper">
        <?php $obras_de_autor=array();?>
        <?php $loop = new WP_Query( array( 'post_type' => 'obra',));?>
        <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <?php $autor_obra = get_post_meta($post->ID,'autor',false)[0]['post_title'];
        if ($autor_obra == $autor_single) { ?>
            <div class="col-sm-3 text-center">
                <a href="<?php the_permalink()?>">
                    <?php the_post_thumbnail('obras_artistas_home');?>
                </a>
                <h3>
                    <?php the_title();?>
                </h3>
            </div>
            <?php ;} ?>
            <?php endwhile; wp_reset_query(); ?>
    </div>
</article>
<?php endwhile; ?>

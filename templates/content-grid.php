<section id="grid">
    <div class="row">
        <?php $slug = get_post_field( 'post_name', get_post() );
        $slug = substr_replace($slug, "", -1);
        //echo $slug;
        if ($slug == obra) {
            $array=array( 'post_type' => $slug, 'meta_key' => 'oferta', 'meta_value'=>1,);
            //echo 'el areglo es de obras en oferta';
        }
        else {$array = array( 'post_type' => $slug,); }
        ;?>

        <?php $loop = new WP_Query( $array);?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-3">
            <div class="">
                <a href="<?php the_permalink(); ?>">
                    <?php  the_post_thumbnail('grid',['class' => 'img-fluid']); ?>
                </a>
                <div>
                    <p>
                        <?php echo get_the_title(); ?>
                    </p>
                </div>
            </div>
        </div>

        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>

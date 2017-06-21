<section id="grid">
    <div class="row">
        <?php 
       $array= array( 'post_type' => 'artista' , 'order'=>'ASC','posts_per_page' => -1); 
        ;?>

        <?php $loop = new WP_Query( $array);?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-lg-2 col-sm-3 col-xs-6 text-center">
            <div class="">
                <a href="<?php the_permalink(); ?>">
                   <?php $image = get_post_field('obra_destacada');
                  $image_url = pods_image_url ( $image['ID'], 'grid', ['class'=>'img-fluid desaturated']);?>
                    <?php  //the_post_thumbnail('grid',['class' => 'img-fluid desaturated']); ?>
                    <img src="<?php echo $image_url;?>" alt="<?php the_title();?>" class="img-fluid">
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

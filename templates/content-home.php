<section id="artistas-home" class="artistas-wrapper" style="width:100%;">
    <div class="carousel-wrap">
        <div class="row">
            <div class="col">
                <div class="autores-items">
                    <?php $loop = new WP_Query( array( 'post_type' => 'artista','meta_key'=>'destacado','meta_value'=>1) ); ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="image-carousel-wrapper">
                        <a href="<?php the_permalink();?>"><?php  the_post_thumbnail('grid-carousel',['class' => 'img-fluid img-carousel']); ?></a>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="obras-items">
                    <?php $loop = new WP_Query( array( 'post_type' => 'obra','meta_key'=>'destacada','meta_value'=>1) ); ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="image-carousel-wrapper">
                        <a href="<?php the_permalink();?>"><?php  the_post_thumbnail('grid-carousel',['class' => 'img-fluid img-carousel']); ?></a>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="noticia" class="noticia-wrapper container">
    <div class="row">
        <div class="col-md-4 resumen">
            <h5 class="text-left text-uppercase">
                <?php the_title()?>
            </h5>
            <div class="content-low">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="col-md-4 excerpt-noticia">
            <?php $loop = new WP_Query( array( 'post_type' => 'post', 'post_per_page' => 1) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <h5 class="text-uppercase text-left">
                Noticias
            </h5>
            <div class="content-low">
                <h3 class="text-uppercase">
                    <?php the_title()?>
                </h3>
                <?php the_excerpt();?>
            </div>
        </div>
        <div class="col-md-4 video">
            <h5 class="text-uppercase text-left">Video</h5>
            <div class="content-low">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7gu3ZkRObbk" allowfullscreen></iframe>
                </div>
                <a class="text-uppercase text-center boton-vermas" href="https://www.youtube.com/watch?v=7gu3ZkRObbk/" target="_blank">Ver Video</a>
            </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>

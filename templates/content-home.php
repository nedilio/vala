<div class="welcome text-center">
<!--    <h1>VANGUARDIAS LATINOAMÉRICANAS</h1>-->
<img src="<?php echo get_template_directory_uri();?>/dist/images/ajax-loader.gif" alt="Loader">
</div>
<section id="artistas-home" class="artistas-wrapper" style="width:100%;">
    <div class="link-obras hidden-lg-up text-center single-post a:hover" style="margin-bottom:20px; margin-top:-30px;">
        <a href="<?php echo home_url() ;?>/artistas" >VER OBRAS</a>
    </div>
    <div class="carousel-wrap">
        <div class="row">
            <div class="col">
                <div class="autores-items">
                    <?php $loop = new WP_Query( array( 'post_type' => 'artista','meta_key'=>'destacado','meta_value'=>1, 'order' => 'ASC', 'posts_per_page' => -1) ); ?>
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
                    <?php $loop = new WP_Query( array( 'post_type' => 'obra','meta_key'=>'destacada','meta_value'=>1,'order' => 'ASC','posts_per_page' => -1) ); ?>
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
            <div class="content-low text-left">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="col-md-4 excerpt-noticia">
            <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <h5 class="text-uppercase text-left">
                Noticias
            </h5>
            <div class="content-low text-left">
                <h3 class="text-uppercase">
                    <?php the_title()?>
                </h3>
                <?php the_excerpt();?>
                
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
        <div class="col-md-4 video">
            <h5 class="text-uppercase text-left">Video</h5>
            <div class="content-low text-left">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7gu3ZkRObbk" allowfullscreen></iframe>
                </div>
                <a class="text-uppercase text-center boton-vermas" href="https://www.youtube.com/watch?v=7gu3ZkRObbk/" target="_blank">Ver Video</a>
            </div>
        </div>
        
    </div>
</section>

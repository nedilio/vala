<section id="descripcion" class="descripcion-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Vala Galeria de Arte</h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<section id="artistas-home" class="artistas-wrapper">
    <div class="container carousel-wrap">
        <div class="row">
            <div class="col-xs-1 hidden-md-up">
                <a class="carousel-prev"><span class="icon-chevron-left"></span></a>
            </div>
            <div class="col col-xs-10">
                <a class="carousel-prev hidden-sm-down"><span class="icon-chevron-left"></span></a>
                <div class="multiple-items">
                    <?php $loop = new WP_Query( array( 'post_type' => 'artista','meta_key'=>'destacado','meta_value'=>1) ); ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col text-center">
                        <a href="<?php the_permalink();?>"><?php  the_post_thumbnail('grid-carousel',['class' => 'img-fluid img-carousel']); ?></a>
                        <div class="nombre-artista-carousel">
                            <h5>
                                <?php the_title();?>
                            </h5>
                        </div>
                        <div>
                            <?php 
                            $idobra = 0;
                            $idobra = get_post_meta($post->ID,'obras',false)[0]['ID'];
//                            echo $idobra;
                            unset($obraThumbnail);
                            $obraThumbnail = get_the_post_thumbnail( $idobra, 'grid-carousel', array( 'class' => 'img-fluid img-carousel' ) );
                            if ($idobra != 0) {
                                echo $obraThumbnail;
                            }
                            else {
                                echo 'S/O';
                            }
                            ?>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
                <a class="carousel-next hidden-sm-down"><span class="icon-chevron-right"></span></a>
            </div>
            <div class="col-xs-1 hidden-md-up">
                <a class="carousel-next"><span class="icon-chevron-right"></span></a>
            </div>
        </div>
    </div>
</section>

<section id="noticia" class="noticia-wrapper container">
    <?php $loop = new WP_Query( array( 'post_type' => 'post', 'post_per_page' => 1) ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="row">
        <div class="col-md-4 image-noticia">
            <?php the_post_thumbnail('large',['class' => 'img-fluid'])?>
        </div>
        <div class="col-md-8 excerpt-noticia">
            <h2 class="text-uppercase">
                <?php the_title()?>
            </h2>
            <p>
                <?php the_excerpt();?>
            </p>
        </div>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>

<script>
    ;
    (function($) {

        $(document).ready(function() {
            console.log("ready!");
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: -1,
                prevArrow: $('.carousel-prev'),
                nextArrow: $('.carousel-next'),
                speed: 6000,
                autoplay: true,
                autoplaySpeed:0,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true
                        }
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true
                        }
                    }
                ]

            });
        });

    })(jQuery);

</script>

<section id="artistas-home" class="artistas-wrapper">
    <div class="carousel-wrap">
        <div class="row">
            <div class="col">
                <div class="autores-items">
                    <?php $loop = new WP_Query( array( 'post_type' => 'artista','meta_key'=>'destacado','meta_value'=>1) ); ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="image-carousel-wrapper">
                        <a href="<?php the_permalink();?>"><?php  the_post_thumbnail('grid-carousel',['class' => 'img-fluid img-carousel']); ?></a>
                        <?php 
//                            $idobra = 0;
  //                          $idobra = get_post_meta($post->ID,'obras',false)[0]['ID'];
//                            echo $idobra;
    //                        unset($obraThumbnail);
      //                      $obraThumbnail = get_the_post_thumbnail( $idobra, 'grid-carousel', array( 'class' => 'img-fluid img-carousel' ) );
        //                    if ($idobra != 0) {
          //                      echo $obraThumbnail;
            //                }
              //              else {
                //                echo 'S/O';
                  //          }
                    //        ?>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
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

<script>
    ;
    (function($) {

        $(document).ready(function() {
            console.log("ready!");
            $('.autores-items').slick({
                infinite: true,
                slidesToShow: 7,
                slidesToScroll: -1,
                prevArrow: $('.carousel-prev'),
                nextArrow: $('.carousel-next'),
                speed: 3000,
                autoplay: true,
                autoplaySpeed: 0,
                cssEase: 'linear',
                responsive: [{
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: -1,
                            infinite: true,
                            //                            autoplay:false,
                        }
                    },
                    //                    {
                    //                        breakpoint: 575,
                    //                        settings: {
                    //                            slidesToShow: 3,
                    //                            slidesToScroll: -1,
                    //                            infinite: true
                    //                        }
                    //                    }
                ]

            });

        });

        $(document).ready(function() {
            console.log("ready!");
            $('.obras-items').slick({
                infinite: true,
                slidesToShow: 7,
                slidesToScroll: 1,
                prevArrow: $('.carousel-prev'),
                nextArrow: $('.carousel-next'),
                speed: 3000,
                autoplay: true,
                autoplaySpeed: 0,
                cssEase: 'linear',
                responsive: [{
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: true,
                            //                            autoplay:false,
                        }
                    },
                    //                    {
                    //                        breakpoint: 575,
                    //                        settings: {
                    //                            slidesToShow: 3,
                    //                            slidesToScroll: 1,
                    //                            infinite: true
                    //                        }
                    //                    }
                ]

            });

        });
        $(document).ready(function() {
            // Delay the action by 10000ms
            setTimeout(function() {
                // Display the div containing the class "bottomdiv"
                $("#artistas-home").show();
            }, 3000);
        });
    })(jQuery);

</script>

<!-- Indicators -->
<section id="slider-home" class="slider-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php $loop = new WP_Query( array( 'post_type' => 'slider') );
                      $count=0;
                      $class='active';?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <?php if ($count!=0) $class = '';?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $count;?>" class="<?php echo $class;?>">
                            <?php $count++;?>
                            <?php endwhile; wp_reset_query(); ?>
                    </ol>
                    <div class="carousel-inner text-center" role="listbox">
                        <?php $loop = new WP_Query( array( 'post_type' => 'slider') );
                              $count=0;
                              $class='active';?>

                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <?php if ($count!=0)
                                $class = '';?>
                        <div class="carousel-item <?php echo $class;?>">
                            <?php the_post_thumbnail('tamano_slider',['class' => 'd-block img-fluid']);?>
                            <div class="carousel-caption d-none d-md-block">
                                <?php //the_title();?>
                                <?php //the_content();?>
                            </div>
                        </div>
                        <?php $count++;?>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="obras-home" class="obras-wrapper">

    <div class="container carousel-wrap">
        <div class="text-center">
            <h1>Obras Destacadas</h1>
        </div>
        <div class="row">
            <a class="carousel-prev-obra"><span class="icon-chevron-left"></span></a>
            <div class="multiple-items-obra col-sm-12 col-md-10 offset-md-1">
                <?php $loop = new WP_Query( array( 'post_type' => 'obra','meta_key' => 'destacada','meta_value'=>1) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="text-center">
                    <div class="item-scale">
                        <a href="<?php the_permalink(); ?>">
                            <?php  the_post_thumbnail('obras_artistas_home',['class' => 'img-home']); ?>
                        </a>
                    </div>
                    <div>
                        <p>
                            <?php echo get_the_title(); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
                <!--            </div>-->
            </div>
            <a class="carousel-next-obra"><span class="icon-chevron-right"></span></a>
        </div>
    </div>
</section>


<section id="artistas-home" class="artistas-wrapper">

    <div class="container carousel-wrap">
        <div class="text-center">
            <h1>Artistas Destacados</h1>
        </div>
        <div class="row">
            <a class="carousel-prev"><span class="icon-chevron-left"></span></a>
            <div class="multiple-items col-sm-12 col-md-10 offset-md-1">
                <?php $loop = new WP_Query( array( 'post_type' => 'artista','meta_key'=>'destacado','meta_value'=>1) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="text-center">
                    <div class="item-scale">
                        <a href="<?php the_permalink(); ?>">
                            <?php  the_post_thumbnail('obras_artistas_home',['class' => 'img-home']); ?>
                        </a>
                    </div>
                    <div>
                        <p>
                            <?php echo get_the_title(); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
                <!--            </div>-->
            </div>
            <a class="carousel-next"><span class="icon-chevron-right"></span></a>
        </div>
    </div>
</section>

<script>
    ;
    (function($) {

        $(document).ready(function() {
            console.log("ready!");
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: $('.carousel-prev'),
                nextArrow: $('.carousel-next'),
                //                responsive: [{
                //                    breakpoint: 770,
                //                    settings: {
                //                        slidesToShow: 1,
                //                        slidesToScroll: 1,
                //                        infinite: true
                //                    }
                //                }],
                responsive: [{
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true
                    }
                }]

            });
        });

        $(document).ready(function() {
            console.log("ready!");
            $('.multiple-items-obra').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                prevArrow: $('.carousel-prev-obra'),
                nextArrow: $('.carousel-next-obra'),
                //                responsive: [{
                //                    breakpoint: 770,
                //                    settings: {
                //                        slidesToShow: 1,
                //                        slidesToScroll: 1,
                //                        infinite: true
                //                    }
                //                }],
                responsive: [{
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true
                    }
                }]

            });
        });

    })(jQuery);

</script>

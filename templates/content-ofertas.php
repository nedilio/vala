<div id="ofertas" class="ofertas-wrapper">
    <div class=" row justify-content-center text-center">
        <div class="col-1">
            <a class="carousel-prev-artista"><span class="icon-chevron-left"></span></a>
        </div>
    
        <div class="ofertas-carousel col-10">
    
            <?php $loop = new WP_Query( array( 'post_type' => 'obra','meta_key'=>'oferta','meta_value'=>1) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php $autor= get_post_meta($post->ID,'autor',false)[0]['post_title'];?>
            <div class="text-center slide-obra">
                <a href="<?php the_permalink();?>"><?php  the_post_thumbnail('grid',['class' => 'img-fluid']); ?></a>
                <p class="autor-oferta">
                    <?php echo $autor;?>
                </p>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
        <div class="col-1">
            <a class="carousel-next-artista"><span class="icon-chevron-right"></span></a>
        </div>
        <div class="slick-dots"></div>
    </div>
</div>


<script>
    ;
    (function($) {

        $(document).ready(function() {
            console.log("ready!");
            $('.ofertas-carousel').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                dotsClass: 'slick-dots',
                prevArrow: $('.carousel-prev-artista'),
                nextArrow: $('.carousel-next-artista'),
                //                centerMode: true,
            });
        });

    })(jQuery);

</script>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
    <?php $autor_single = get_the_title();?>
    <div class="row">
        <div class="col-2">
            <ul class="nav flex-column" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#artist" role="tab">
                        <?php the_title(); ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#biografia" role="tab">Biografia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Curriculum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
                </li>
            </ul>
        </div>
        <div class="col-10">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="artist" role="tabpanel">

                    <div class=" row justify-content-center text-center">
                        <div class="col-1">
                            <a class="carousel-prev"><span class="icon-chevron-left"></span></a>
                        </div>

                        <div class="obras-single col-6 text-center">

                            <?php $obras_de_autor=array();?>
                            <?php $loop = new WP_Query( array( 'post_type' => 'obra',));?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                            <?php $autor_obra = get_post_meta($post->ID,'autor',false)[0]['post_title'];
                                if ($autor_obra == $autor_single) { ?>
                            <div>
                                <a href="<?php the_permalink()?>">
                                    <?php the_post_thumbnail('grid');?>
                                </a>
                                <p><span class="font-weight-bold"><?php the_title()?>, <?php echo get_post_field( 'anio', get_post() )?>.</span>
                                    <?php echo get_post_field( 'tecnica', get_post() )?>,
                                    <?php echo get_post_field( 'ancho', get_post() )?> x
                                    <?php echo get_post_field( 'alto', get_post() )?> cm.</p>
                            </div>

                            <?php ;} ?>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                        <div class="col-1">
                            <a class="carousel-next"><span class="icon-chevron-right"></span></a>
                        </div>
                    </div>




                </div>
                <div class="tab-pane fade" id="biografia" role="tabpanel">
                    <div class="row">
                        <div class="col">
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                            <div class="">
                                <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                            </div>
                            <p>
                                <?php echo get_post_field( 'biografia', get_post() );?>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="messages" role="tabpanel">
                    <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam numquam eligendi distinctio hic. Alias cum, earum reprehenderit necessitatibus blanditiis officia aliquam temporibus, consequuntur minima possimus quaerat libero obcaecati quos voluptas.</div>
                </div>
                <div class="tab-pane fade" id="settings" role="tabpanel">
                    <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi a illum voluptas non aliquid nisi, ducimus, alias ut quibusdam dolor architecto ad aspernatur, deleniti itaque consectetur obcaecati, optio soluta maiores.</div>
                </div>
            </div>
        </div>
    </div>



    <!--Estructura de tabs-->
    <!-- Nav tabs -->


    <!-- Tab panes -->

</article>
<?php endwhile; ?>

<script>
    ;
    (function($) {

        $(document).ready(function() {
            console.log("ready!");
            $('.obras-single').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                appendDots: $('li.nav-dot'),
                prevArrow: $('.carousel-prev'),
                nextArrow: $('.carousel-next'),
                centerMode: true,
                //                responsive: [{
                //                    breakpoint: 770,
                //                    settings: {
                //                        slidesToShow: 1,
                //                        slidesToScroll: 1,
                //                        infinite: true
                //                    }
                //                }],
                //                responsive: [{
                //                    breakpoint: 576,
                //                    settings: {
                //                        slidesToShow: 1,
                //                        slidesToScroll: 1,
                //                        infinite: true
                //                    }
                //                }]

            });
        });

    })(jQuery);

</script>

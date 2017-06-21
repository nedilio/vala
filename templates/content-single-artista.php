<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
    <?php $autor_single = get_the_title();?>

    <div class="side-menu">
        <div class="hidden-md-down">
            <ul class="nav flex-column" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#artist" role="tab">
                        <?php the_title(); ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#biografia" role="tab">Biografía</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#curriculum" role="tab">Curriculum</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="hidden-lg-up text-center justify-content-center" style="margin-bottom:50px;">
        <ul class="nav text-center justify-content-center" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#artist" role="tab">
                    <?php the_title(); ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#biografia" role="tab">Biografía</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#curriculum" role="tab">Curriculum</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="tab-content" style="min-height:150px;">
                <div class="tab-pane fade show active" id="artist" role="tabpanel">

                    <div class=" row justify-content-center text-center">
                        <div class="col-1">
                            <a class="carousel-prev-artista"><span class="icon-chevron-left"></span></a>
                        </div>

                        <div class="obras-single col-10 text-center">

                            <?php //$obras_de_autor=array(); ?>
                            <?php $loop = new WP_Query( array( 'post_type' => 'obra','posts_per_page'=>-1));?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                            <?php $autor_obra = get_post_meta($post->ID,'autor',false)[0]['post_title'];
//                            echo $autor_single.' - ';
//                            echo $autor_obra;
                                if ($autor_obra == $autor_single) { ;?>
                            <div>
                                <a href="<?php the_permalink()?>">
                                    <?php the_post_thumbnail('large',['class'=> 'img-fluid']);?>
                                </a>
                                <div class="cedula-obra">
                                    <p><span class="text-uppercase texto-negro"><strong><?php the_title()?>, <?php echo get_post_field( 'anio', get_post() )?></strong> </span>-
                                        <?php echo get_post_field( 'tecnica', get_post() )?> |
                                        <?php echo get_post_field( 'alto', get_post() )?> x
                                        <?php echo get_post_field( 'ancho', get_post() )?> cm.</p>
                                </div>
                                <div>
                                    <a href="<?php the_permalink()?>"><button type="button" class="boton-cotizar boton-obra">Cotizar</button></a>
                                </div>
                            </div>

                            <?php ;} ?>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                        <div class="col-1">
                            <a class="carousel-next-artista"><span class="icon-chevron-right"></span></a>
                        </div>
                        
                    </div>
                    <div class="slick-dots"></div>
                </div>
                <div class="tab-pane fade" id="biografia" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-2">
                            <h1>
                                <span class="texto-gris"><?php the_title(); ?></span>
                            </h1>
                            <div class="img-bio">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                            </div>
                            <span class="texto-gris"><?php echo get_post_field( 'biografia', get_post() );?></span>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="curriculum" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-2">
                            <span class="texto-gris"><?php echo get_post_field( 'curriculum', get_post() );?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
<?php endwhile; ?>

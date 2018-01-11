<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
    <?php
                    $autor = get_post_meta($post->ID,'autor',false)[0]['post_title'];
                    $autor_id=get_post_meta($post->ID,'autor',false)[0]['ID'];
                    $autor_url = get_post_permalink($autor_id);
                    $titulo = get_the_title();
                    $tecnica = get_post_meta($post->ID,'tecnica',true );
                    $alto = get_post_meta($post->ID,'alto',true );
                    $ancho = get_post_meta($post->ID,'ancho',true );
                    $precio = get_post_meta($post->ID,'precio',true );
                    $anio = get_post_meta($post->ID,'anio',true );
                    $oferta = get_post_meta($post->ID,'oferta',true );
                    $class='';
                    $enmarcado= '';
                    $oferta_text = '';
                    if ($oferta==1) {
                        $class= 'oferta';
                        //$oferta_text = '<span class="obra-caract oferta">Oferta</span><br>';
                        $enmarcado= ' (Enmarcado Profesional)';
                        $oferta_text = ' Oferta';
                    }
                ?>
                
        <div class="row">
            <div class="col-lg-2 text-center" style="margin-bottom:30px;">
                <h1 class="autor-name">
                    <a href="<?php echo $autor_url;?>">
                        <?php echo $autor;?>
                    </a>
                </h1>
                <button type="button" class="boton-cotizar" data-toggle="modal" data-target="#myModal">Cotizar</button>
            </div>
            <div class="col-lg-8 text-center">
                <a href="#myModal2" data-toggle="modal" data-target="#myModal2"><?php the_post_thumbnail('large',['class'=>'img-fluid']);?></a>

            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="cedula-obra">
                                       <?php if ($precio != 0){ ;
                    $precio_formated = floatval ($precio);
                    $precio_formated = number_format($precio, 0,",",".");?>
                    <p><span class="text-uppercase texto-negro"><span style="font-weight:bold"><?php echo $titulo;?>, <?php echo $anio?></span> </span>-
                        <?php echo $tecnica.'. ';?>
                        <?php echo $alto;?> x
                        <?php echo $ancho;?> cm. <span class="<?php echo $class; ?>">Precio<?php echo $oferta_text;?>: $</span> <span class="<?php echo $class; ?>"><?php echo ($precio_formated);?> + iva.</p>
                </div>
                <div>




                    <?php //echo $oferta_text;?>
                    <span class="<?php echo $class; ?>"><?php echo $enmarcado;?></span><br>
                    <?php }
                    else {?>
                        <p><span class="text-uppercase texto-negro"><span style="font-weight:bold"><?php echo $titulo;?>, <?php echo $anio?></span> </span>-
                        <?php echo $tecnica.'. ';?>
                        <?php echo $alto;?> x
                        <?php echo $ancho;?> cm.</p>
                         <span class="texto-negro">Precio: Cotiza con nosotros </span>
                   <?php }?>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cotizar la obra
                            <?php the_title();?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <div class="modal-body">
                        <script>
                            document.addEventListener('wpcf7mailsent', function(event) {
                                ga('send', 'event', 'Contact Form', 'submit');
                                console.log('Activado el evento de enviado el formulario');
                            }, false);

                        </script>
                        <?php echo do_shortcode('[contact-form-7 id="907" title="Form Cotizar"]');?>
                    </div>
                    <div class="modal-footer">
                        <!--
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
-->
                    </div>
                </div>
            </div>
        </div>
        
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <?php the_title();?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <div class="modal-body text-center">
                      <?php the_post_thumbnail('full',['class'=>'img-fluid']);?>
                    </div>

                </div>
            </div>
        </div>

</article>
<?php endwhile; ?>

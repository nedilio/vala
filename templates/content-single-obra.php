<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
    <?php
                    $autor= get_post_meta($post->ID,'autor',false)[0]['post_title'];
                    $autor_url=get_post_meta($post->ID,'autor',false)[0]['guid'];
                    $titulo = get_the_title();
                    $tecnica = get_post_meta($post->ID,'tecnica',true );
                    $alto = get_post_meta($post->ID,'alto',true );
                    $ancho = get_post_meta($post->ID,'ancho',true );
                    $precio = get_post_meta($post->ID,'precio',true );
                    $anio = get_post_meta($post->ID,'anio',true );
                    $oferta = get_post_meta($post->ID,'oferta',true );
                    $class='';
                    $oferta_text = '';
                    if ($oferta==1) {
                        $class= 'oferta';
                        $oferta_text = '<span class="obra-caract oferta">Oferta</span><br>';
                    }
                ?>
        <div class="row">
            <div class="col-md-2 text-center">
                <h1 class="autor-name">
                    <a href="<?php echo $autor_url;?>">
                        <?php echo $autor;?>
                    </a>
                </h1>
                <button type="button" class="boton-cotizar" data-toggle="modal" data-target="#myModal">Cotizar</button>
            </div>
            <div class="col-md-8 text-center">
                <?php the_post_thumbnail('large',['class'=>'img_fluid']);?>

            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="cedula-obra">
                    <p><span class="text-uppercase texto-negro"><strong><?php echo $titulo;?>, <?php echo $anio?></strong> </span>-
                        <?php echo $tecnica;?> |
                        <?php echo $alto;?> x
                        <?php echo $ancho;?> cm.</p>
                </div>
                <div>
                    <?php echo $oferta_text;?>
                    <span class="<?php echo $class; ?>">Precio: $</span> <span class="<?php echo $class; ?>"><?php echo floor($precio);?> s/iva.</span><br>
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
                        <?php echo do_shortcode('[contact-form-7 id="113" title="Formulario de contacto 1_copy"]');?>
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

</article>
<?php endwhile; ?>

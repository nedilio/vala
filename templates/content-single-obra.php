<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
    <div class="row">
        <div class="col-md-10 offset-sm-1 col-sm-12">
            <div class="row">
                <div class="col-8 text-center">
                    <?php the_post_thumbnail('obras-single');?>
                </div>
                <div class="col text-left">
                    <?php
                    $autor= get_post_meta($post->ID,'autor',false)[0]['post_title'];
                    $autor_url=get_post_meta($post->ID,'autor',false)[0]['guid'];
                    $titulo = get_the_title();
                    $tecnica = get_post_meta($post->ID,'tecnica',true );
                    $alto = get_post_meta($post->ID,'alto',true );
                    $ancho = get_post_meta($post->ID,'ancho',true );
                    $precio = get_post_meta($post->ID,'precio',true );
                    $anio = get_post_meta($post->ID,'anio',true );
                ?>
                        <h3>
                            <a href="<?php echo $autor_url;?>"><?php echo $autor;?></a>
                        </h3>
                        <h4 class="titulo-obra"><em><?php echo $titulo.', '.$anio;?></em></h4>
                        <br>
                        <span class="obra-caract">Tecnica: </span> <span><?php echo $tecnica;?></span><br>
                        <span class="obra-caract">medidas: </span> <span><?php echo $alto.' x '.$ancho.' cm';?></span><br>
                        <span class="obra-caract">precio: $</span> <span><?php echo floor($precio);?></span><br>
                        <br>
                        <button type="button" class="boton-cotizar" data-toggle="modal" data-target="#myModal">Cotizar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col"><?php previous_post_link('<strong>%link</strong>'); ?></div>
        <div class="col text-right"><?php next_post_link( '<strong>%link</strong>' ); ?></div>
    </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cotizar la obra <?php the_title();?></h5>
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
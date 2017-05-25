<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
<div class="row">
    <div class="col">
        <?php the_post_thumbnail('medium');?>
    </div>
    <div class="col">
       <?php
            $autor= get_post_meta($post->ID,'autor',false)[0]['post_title'];
            $titulo = get_the_title();
            $tecnica = get_post_meta($post->ID,'tecnica',true );
            $medida = get_post_meta($post->ID,'medida',true );
            $precio = get_post_meta($post->ID,'precio',true );
            $anio = get_post_meta($post->ID,'anio',true );
        ?>
        <h3><?php echo $autor;?></h3>
        <h4 class="titulo-obra"><em><?php echo $titulo.', '.$anio;?></em></h4>
        <br>
        <span class="obra-caract">Tecnica: </span> <span><?php echo $tecnica;?></span><br>
        <span class="obra-caract">medidas: </span> <span><?php echo $medida;?></span><br>
        <span class="obra-caract">precio: $</span> <span><?php echo floor($precio);?></span><br>
        <br>
        <button type="button" class="boton-cotizar">Cotizar</button>
    </div>
</div>
<div class="row">
    <?php previous_post_link('<strong>%link</strong>'); ?> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium voluptatem architecto repellendus aliquam voluptatibus quis error, aliquid sunt ut numquam distinctio. Porro a minima nemo suscipit unde nostrum laborum atque.</p>
    <?php next_post_link( '<strong>%link</strong>' ); ?>

</div>


    </article>
<?php endwhile; ?>

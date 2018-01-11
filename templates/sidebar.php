<div class="row justify-content-center logo-sidebar">
   
    <a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri();?>/dist/images/vala-logo-rojo.png" alt="vala-logo" class="img-fluid" style="height:50px;">
        </a></div>

<?php $page = get_page_by_title( 'Vanguardias Latinoamericanas' ); ?>


<div class="row text-center sidebar-contenido hidden-md-down">
    <h1>
        <?php echo $page->post_title;?>
    </h1>
    <hr>
    <p class="text-center" style="line-height:1.3;">
        <?php echo $page->post_content;?>
    </p>
</div>
<div class="row justify-content-center">
    <!--    <h3>Enlaces</h3>-->
    <div class="menu-sidebar">
        <?php wp_nav_menu( array('menu'=>'Enlaces de Interés', 'menu_class' => 'nav-sidebar',  ) ); ?>
    </div>
</div>
<div class="link-galeria text-center">
<a href="https://www.vala.cl/category/galeria/"><span style="font-size: 1.3em; color: #cc0610; text-transform:uppercase; font-weight: bold;">Galería de Fotos VALA</span></a>
</div>
<div class="row justify-content-center social-icons">
    <a href="https://www.facebook.com/GaleriaVala/" target="_blank"> <span class="icon-facebook-circled"></span></a>
    <a href="https://twitter.com/galeriavala" target="_blank"><span class="icon-twitter-circled"></span></a>
    <a href="https://www.instagram.com/galeriavala/" target="_blank"><span class="icon-instagram"></span></a>
</div>

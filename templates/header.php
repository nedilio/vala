<header class="banner">
    <div class="container">
        <div class="hidden-md-down">
            <div class="row justify-content-center logo-container">
                <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/dist/images/vala-logo.png">
            </a>
            </div>
            <div class=" row text-uppercase justify-content-center texto-header">
                <p class="texto-menu"><span class="texto-gris">Galeria de Arte </span></p>
                <p class="texto-menu"> | <strong>Vanguardias Latinoamericanas</strong></p>
            </div>
        </div>
        <!--        <div class="row">-->
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded menu-back">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
          </button>
            <a class="navbar-brand hidden-lg-up" href="<?= esc_url(home_url('/')); ?>">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/dist/images/vala-logo.png">
            </a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <?php wp_nav_menu( array('menu'=>'Top Menu', 'menu_class' => 'navbar-nav mr-auto text-uppercase',  ) ); ?>
            </div>
        </nav>
        <!--        </div>-->
    </div>
</header>

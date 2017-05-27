<header class="banner">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/dist/images/vala-logo.png"></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php wp_nav_menu( array('menu'=>'Top Menu', 'menu_class' => 'navbar-nav mr-auto',  ) ); ?> 
        </div>
    </nav>
</header>

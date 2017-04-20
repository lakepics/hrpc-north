<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>

    <header class="banner navbar navbar-default navbar-static-top" role="banner">
        <div class="container-fluid">
            <div class="divider-rule"></div>
            <div class="navbar-header">
                <div class="preheader">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_directory'); ?>/dist/images/logo.svg" alt="<?php bloginfo('name'); ?>"></a>
                    <?php wp_nav_menu( array( 'theme_location' => 'top-nav-menu', 'container_class' => 'top-nav-menu' ) ); ?>
                </div>

                <nav class="collapse navbar-collapse" role="navigation">
                    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
                </nav>
            </div>
        </div>
    </header>

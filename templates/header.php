<header class="banner" id="header">
  <div id="header-top">
      <div class="container">
          <div class="d-flex justify-content-end">
              <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="1" ]');?>
          </div>
      </div>

  </div>
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <div class="container">
      <button class="hamburger hamburger--elastic navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
      </button>
        <?php if(get_field('logo','option')): ?>
            <a class="navbar-brand site-logo " href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
                <img src="<?php echo get_field('logo','option')['url'] ?>" class="" alt="<?php bloginfo('name'); ?>"/>
            </a>
        <?php else:?>
            <a class="navbar-brand site-name" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
        <?php endif;?>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation','depth' => 1, 'menu_class' => 'nav navbar-nav mr-auto justify-content-end',  'menu_id' => 'nav-primary']);
          endif;
        ?>
      </div>
    </div>
  </nav>
</header>

<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <?php
      do_action('get_header');

    ?>
    <div class="inner-body">
    <?php
        get_template_part('templates/header');

        if(is_front_page()) {
            get_template_part('templates/home', 'hero');
        } else {
            get_template_part('templates/page', 'header');
        }

        if(is_home()) {
           // get_template_part('templates/content', 'feature');
        }
    ?>
    <div class="wrap-container">
        <div class="wrap <?php echo (is_front_page() || is_page() ) ? 'container-fluid' : 'container' ;?> " role="document">
            <div class="content row">
                <main class="main">
                    <?php include Wrapper\template_path(); ?>
                </main><!-- /.main -->
                <?php if (Setup\display_sidebar()) : ?>
                    <aside class="sidebar">
                        <?php include Wrapper\sidebar_path(); ?>
                    </aside><!-- /.sidebar -->
                <?php endif; ?>
            </div><!-- /.content -->
        </div><!-- /.wrap -->
    </div>
    <?php
        get_template_part('templates/footer');
    ?>
    </div>
    <?php
      do_action('get_footer');

      wp_footer();
    ?>
  </body>
</html>

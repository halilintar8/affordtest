<footer class="content-info" id="footer">
    <div class="footer-top d-flex align-items-center  ">
        <div class="container">
            <div class="d-flex justify-content-center">
                <?php echo do_shortcode('[gravityform id="5" title="false" description="false" ajax="true" tabindex="4"]');?>
            </div>
        </div>
    </div>
    <div class="footer-nav d-md-flex align-items-center">
        <div class="container">
            <div class="d-md-flex justify-content-between">
                <div class="footer-brand">
                    <?php if(get_field('logo-footer','option')): ?>
                        <a class="navbar-brand site-logo " href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
                            <img src="<?php echo get_field('logo-footer','option')['url'] ?>" class="" alt="<?php bloginfo('name'); ?>"/>
                        </a>
                    <?php else:?>
                        <a class="navbar-brand site-name" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
                    <?php endif;?>
                </div>
                <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav  mr-auto ',  'menu_id' => 'nav-footer']);
                endif;
                ?>
                <div class="footer-social d-flex text-center align-items-center ">
                    <div class="clearfix" style="width: 100%;">
                        <a href="<?php the_field('facebook_link', 'option')?>" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="<?php the_field('twiter_link', 'option')?>" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom d-flex align-items-center ">
        <div class="footer-bootom__inner">
            <div class="container">
                <div class="d-flex justify-content-center text-center">
                    <p><?php the_field('footer_text', 'option') ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php if (!empty( get_the_content() )) :?>
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="<?php echo (is_page(11) )? 'col-lg-12' : 'col-lg-9'; ?> ">
                <?php the_content(); ?>
                <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
            </div>
            <?php if (is_page(6)): ?>
                <div class="col-lg-3">
                    <?php
                    if (has_nav_menu('about_navigation')) :
                        wp_nav_menu(['theme_location' => 'about_navigation','depth' => 1, 'menu_class' => 'nav-about ',  'menu_id' => 'nav-about']);
                    endif;
                    ?>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
<?php endif;?>




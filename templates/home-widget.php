<?php if(get_sub_field('title_widget')):?>
<section class="section-home sectionHomeWidget" >
    <div class="container">
        <h1 class="text-center"><?php the_sub_field('title_widget') ?></h1>
        <?php  if( have_rows('content_widget') ):?>
            <div class="action-center block-action-center row d-flex justify-content-center">
                <?php $i = 1; while( have_rows('content_widget') ): the_row();

                    // vars
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $button_url = get_sub_field('button_url');
                    $tab = get_sub_field('open_new_tab');

                ?>
                    <div class="col-md-6 col-lg-4 action-center__col">
                        <div class="action-center__list text-center d-flex  flex-column">
                            <div class="wrap-icon d-flex align-items-center">
                                <?php if(!empty($icon)): ?>
                                    <img src="<?php echo $icon['url'];?>" class="icon" alt="<?php echo $icon['title']; ?>" />
                                <?php endif;?>
                            </div>
                            <h2 class="action-title"><?php echo $title;?></h2>
                            <div class="desc">
                                <p><?php echo $description;?></p>
                            </div>
                            <div class="wrap-btn mt-auto">
                                <a href="<?php echo $button_url; ?>" target="<?php echo ($tab == TRUE) ? '_blank': '_self'; ?>" class="btn-main" title="Call to action">Call to action</a>
                            </div>
                        </div>
                    </div>

                <?php $i++; endwhile; ?>
            </div>

        <?php endif; ?>

    </div>
</section>
<?php endif;?>
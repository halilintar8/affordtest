<?php  if( have_rows('content_action_center_bottom') ):?>

<section class="section-col ac-bottom-page">
    <div class="container">
        <div class="action-center block-action-center row">
            <?php $i = 1; while( have_rows('content_action_center_bottom') ): the_row();

                $count = count( get_field('content_action_center_bottom'));
                // vars
                $icon = get_sub_field('icon');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $button_text_1 = get_sub_field('button_text_1');
                $button_url_1 = get_sub_field('button_url_1');
                $button_text_2 = get_sub_field('button_text_2');
                $button_url_2 = get_sub_field('button_url_2');


                if($count ==  1) {
                    $push = 'push-md-3';
                } else {
                    $push = '';
                }

                ?>

                <div class="col-md-6  action-center__col <?php echo $push;?>">
                    <div class="action-center__list text-center d-flex  flex-column">
                        <h1 class="action-title"><?php echo $title;?></h1>
                        <?php if(!empty($icon)): ?>
                            <img src="<?php echo $icon['url'];?>" class="icon" alt="<?php echo $icon['title']; ?>" />
                        <?php endif;?>
                        <div class="desc">
                            <p><?php echo $description;?></p>
                        </div>
                        <div class="wrap-btn double-btn mt-auto d-lg-flex justify-content-around">
                            <?php if($button_text_1): ?>
                                <a href="<?php echo $button_url_1; ?>" class="btn-main" title="<?php echo $button_text_1; ?>"><?php echo $button_text_1; ?></a>
                            <?php endif;?>
                            <?php if($button_text_2): ?>
                                <a href="<?php echo $button_url_2; ?>" class="btn-main" title="<?php echo $button_text_2; ?>"><?php echo $button_text_2; ?></a>
                            <?php endif;?>

                        </div>
                    </div>
                </div>


             <?php $i++; endwhile; ?>
        </div>
    </div>
</section>

<?php endif; ?>
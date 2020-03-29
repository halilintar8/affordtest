<?php if( get_field('take_action_feature') ): ?>
<?php if(!empty(get_field('form_take_action','option'))):?>
<section class="section-action-now <?php echo (!empty( get_the_content() ))? 'with-intro':''?>">
    <div class="container">
        <h1 class="text-center">Take Action Now!</h1>
        <?php /*<div class="text-center">
            <a href="#" class="openForm "><i class="arrow"></i></a>
        </div>*/ ?>
        <div class="container-take-action open">
            <div class="container-take-action__inner">
                <div class="row">
                    <div class="col-md-10 push-md-1">
                        <div class="block-form">
                        <?php if(get_field('title_take_action','option')):?>
                            <header>
                                <h2><?php the_field('title_take_action','option');?></h2>
                            </header>
                        <?php endif;?>
                            <div class="wrap-form">
                                <?php the_field('form_take_action','option');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<?php endif;?>
<?php endif;?>

<?php  if( have_rows('social_media_toolkit') ):?>

    <section class="section-action-now section-col ac-bottom-page social-media-toolkit">
        <div class="container">
            <div class="action-center block-action-center d-flex justify-content-center row">
                <?php $i = 1; while( have_rows('social_media_toolkit') ): the_row();

                    $count = count( get_field('social_media_toolkit'));
                    // vars
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $button_text_1 = get_sub_field('button_text_1');
                    $button_url_1 = get_sub_field('button_url_1');
                    $tab_1 = get_sub_field('open_new_tab_1');
                    $button_text_2 = get_sub_field('button_text_2');
                    $button_url_2 = get_sub_field('button_url_2');
                    $tab_2 = get_sub_field('open_new_tab_2');


                    if($count ==  1) {
                        $push = 'push-md-3';
                    } else {
                        $push = '';
                    }

                    ?>

                    <div class="col-md-4  action-center__col <?php //echo $push;?>">
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
                                    <a href="<?php echo $button_url_1; ?>" target="<?php echo ($tab_1 == TRUE) ? '_blank': '_self'; ?>" class="btn-main" title="<?php echo $button_text_1; ?>"><?php echo $button_text_1; ?></a>
                                <?php endif;?>
                                <?php if($button_text_2): ?>
                                    <a href="<?php echo $button_url_2; ?>" target="<?php echo ($tab_2 == TRUE) ? '_blank': '_self'; ?>" class="btn-main" title="<?php echo $button_text_2; ?>"><?php echo $button_text_2; ?></a>
                                <?php endif;?>

                            </div>
                        </div>
                    </div>


                    <?php $i++; endwhile; ?>
            </div>
        </div>
    </section>

<?php endif; ?>

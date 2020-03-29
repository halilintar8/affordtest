<?php
$category_sb = get_field('category_sb');
if( $category_sb ): ?>

<section class="section-col">
    <div class="container">
        <div class="action-center block-action-center row">
            <?php foreach( $category_sb as $category ):

                $count = count( get_field('category_sb'));
                if($count ==  1) {
                    $push = 'push-md-3';
                } else {
                    $push = '';
                }
                //var
                if ($category === 'staff') {
                    $title = get_field('title_staff');
                    $icon = get_field('icon_staff');
                    $description = get_field('description_staff');
                    $button_url = get_field('button_url_staff');
                    $button_text = get_field('button_text_staff');
                }

                if ($category === 'board') {
                    $title = get_field('title_board');
                    $icon = get_field('icon_board');
                    $description = get_field('description_board');
                    $button_url = get_field('button_url_board');
                    $button_text = get_field('button_text_board');
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
                        <div class="wrap-btn mt-auto">
                            <a href="<?php echo $button_url; ?>" class="btn-main" title="<?php echo $button_text; ?>"><?php echo $button_text; ?></a>
                        </div>
                    </div>
                </div>


            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif; ?>
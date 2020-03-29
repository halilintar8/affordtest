<?php if( get_field('show_partner') == 1): ?>
<?php  if( have_rows('partners','option') ):?>
    <section class="section-home section-partners">
        <div class="container">
            <h1 class="text-center">Partners</h1>
            <div class="wrap-partners">
                <div class="row d-flex justify-content-center  align-items-center">
                    <?php $i = 0; while( have_rows('partners','option') ): the_row();
                        // vars
                        $icon = get_sub_field('logo');
                        $hyperlink = get_sub_field('hyperlink');

                        if (!empty($icon)) {
                            $img_url = $icon['url'];
                        } else {
                            $img_url = get_sub_field('external_image');
                        }

                        ?>
                        <div class="col-6 col-md-3 col-lg-2 d-flex justify-content-center  align-items-center">
                            <div class="clearfix">
                                <?php if($hyperlink):?>
                                    <a href="<?php echo $hyperlink;?>" target="_blank"><img src="<?php echo $img_url;?>" title="<?php echo $icon['title'];?>" class="partner-logo img-fluid" alt="<?php echo $icon['title']; ?>" /></a>
                                <?php else:?>
                                    <img src="<?php echo $img_url;?>" title="<?php echo $icon['title'];?>"  class="partner-logo img-fluid" alt="<?php echo $icon['title']; ?>" />
                                <?php endif;?>
                            </div>

                        </div>


                        <?php $i++; endwhile; ?>

                </div>
            </div>
            <?php /*
            <div class="wrap-btn text-center">
                <a href="#" class="btn-main" title="Learn More">Learn More</a>
            </div>*/?>
        </div>
    </section>

<?php endif; ?>
<?php endif; ?>

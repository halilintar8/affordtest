<?php if( get_field('contact_box_feature') ): ?>

<section class="section-contact-box">
    <div class="container">
        <div class="action-center block-action-center row">
            <div class="col-md-6  action-center__col">
                <div class="action-center__list left-content  d-flex  flex-column">
                    <h1 class="text-center">Contact Us</h1>
                    <div class="desc">
                        <div class="desc__inner">
                            <?php the_field('contact_1', 'option');?>
                        </div>
                        <?php if(get_field('contact_2','option')):?>
                        <div class="desc__inner contact_2">
                            <?php the_field('contact_2', 'option');?>
                        </div>
                        <?php endif;?>

                    </div>
                </div>
            </div>
            <div class="col-md-6  action-center__col">
                <div class="action-center__list  d-flex  flex-column">
                    <h1 class="text-center">Got a question?</h1>
                    <div class="desc">
                        <div class="desc__inner form">
                            <?php the_field('form', 'option');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
<?php if( get_field('sign_up_feature') ): ?>
<?php  if( get_field('content_sign_up','option') ):?>
    <section class="section-home section-sign-up">
        <div class="container">
            <div class="row">
                <div class="col-md-10 push-md-1 col-lg-6 push-lg-3">
                    <h1 class="text-center"> <?php the_field('title_sign_up','option') ?></h1>
                    <br/>
                    <?php the_field('content_sign_up','option') ?>
                </div>
            </div>

        </div>
    </section>

<?php endif; ?>
<?php endif; ?>

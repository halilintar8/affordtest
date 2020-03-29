<article <?php post_class(); ?>>
    <?php
    $image = get_the_post_thumbnail_url();
    if($image) {
        $class = 'col-lg-9 col-md-9 col-sm-9 col-xs-9';
    }
    else {
        $class = 'col-lg-12 col-md-8 col-sm-12 col-xs-12';
    }
    ?>
    <div class="row">
        <?php if($image): ?>
            <div class="col-lg-3">
                <div class="entry-image-container">
                    <div class="entry-image bg-image">
                        <img class="img-fluid" src="<?php the_post_thumbnail_url() ?>"/>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="<?php echo $class ?>">
            <header>
                <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </header>
            <div class="entry-summary">
                <?php echo '<p>'.wp_trim_words( get_the_content(), 35, '...' ).'</p>'; ?>
                <?php /*echo '<p>'.mb_strimwidth(get_the_content(), 0, 200, '...').'</p>'; */?>

            </div>
            <div class="wrap-btn mr-auto">
                <a href="<?php the_permalink(); ?>" class="btn-main" title="<?php the_title(); ?>">Read More</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</article>

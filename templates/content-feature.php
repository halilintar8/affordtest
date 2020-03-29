<?php
$args1 = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'post_status' => 'publish',
    'meta_query' => array(
        array(
            'key' => 'feature',
            'value' => '1',
            'compare' => '==',
        ),
    ),
);
$args2 = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'post_status' => 'publish',

);

$query1 = new WP_Query($args1);
$query2 = new WP_Query($args2);

$query_featured = '';

if($query1->have_posts()) {
    $query_featured = $query1;
} else {
    $query_featured = $query2;
}
?>
<?php while($query_featured->have_posts()) : $query_featured->the_post(); ?>
    <section class="section-col content-feature">
        <div class="container">
            <div class="action-center block-action-center row">
                <div class="col-md-12  action-center__col">
                    <div class="action-center__list ">
                        <div class="row">
                            <?php
                            $image = get_the_post_thumbnail_url(get_the_ID(),'main-thumbnail');
                            $imageBg = strlen($image) > 0 ? 'background-image: url(\''.$image.'\');' : null;
                            $class = 'col-md-12';
                            ?>
                            <?php if($image): ?>
                                <div class="col-md-6">
                                    <img src="<?php echo $image ?>" class="img-fluid img-featured" alt="featured image" />
                                </div>
                                <?php $class = 'col-md-6'; ?>
                            <?php endif; ?>

                            <div class="<?php echo $class ?>">
                                <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                                <div class="entry-summary">
                                    <p>
                                        <?php  echo wp_trim_words( get_the_content(), 24, '...' );?>
                                    </p>

                                </div>
                                <div class="wrap-btn mt-auto">
                                    <a href="<?php the_permalink(); ?>" class="btn-main" title="<?php the_title(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <h1 class="action-title"><?php echo $title;?></h1>

                        <div class="desc">
                            <p><?php echo $description;?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

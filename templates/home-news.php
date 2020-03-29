<?php if( get_field('news_&_resources','option') ): ?>
<section class="section-home sectionNews " id="sectionNews">
    <div class="container">
        <h1 class="text-center">Stories</h1>
        <div class="row sectionNews__inner d-flex justify-content-center  align-items-center">
            <div class="col-md-6">
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
                    <?php
                    $image = get_the_post_thumbnail_url(get_the_ID(),'main-thumbnail');
                    $imageBg = strlen($image) > 0 ? 'background-image: url(\''.$image.'\');' : null;
                    ?>
                    <div class="row">
                        <div class="block-featured col-md-12">
                            <?php if($image): ?>
                                <img src="<?php echo $image ?>" class="img-fluid img-featured" alt="featured image" />
                            <?php endif; ?>
                            <h2 class="title-news"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <div class="entry-summary">
                                <p>
                                    <?php  echo wp_trim_words( get_the_content(), 24, '...' );?>
                                    <a href="<?php the_permalink(); ?>" class="read--more" title="Read More"><strong>READ MORE</strong></a>
                                </p>

                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            </div>

        </div>
        <div class="wrap-btn text-center">
            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn-main" title="See all news">See all stories</a>
        </div>
    </div>
</section>
<?php endif;?>
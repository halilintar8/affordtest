<?php while (have_posts()) : the_post(); ?>
    <?php
    $image = get_the_post_thumbnail_url();
    if($image) {
        $class = 'col-lg-8 col-md-9 col-sm-9 col-xs-9';
    }
    else {
        $class = 'col-lg-11 col-md-8 col-sm-11 col-xs-11';
    }
    ?>
  <article <?php post_class(); ?>>
      <div class="row page-content">
          <?php if($image): ?>
              <div class="col-lg-3">
                  <div class="entry-image-container">
                      <div class="entry-image bg-image">
                          <img class="img-fluid" src="<?php the_post_thumbnail_url( 'medium' ) ?>"/>
                      </div>
                  </div>
              </div>
          <?php endif; ?>
          <div class="<?php echo $class ?>">
              <div class="page-content__inner">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <?php the_content(); ?>
                              <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </article>
<?php endwhile; ?>


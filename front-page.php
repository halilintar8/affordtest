<?php while (have_posts()) : the_post(); ?>


  <?php
  //home widget
  if( have_rows('widget_home') ):
    echo '<div class="wrap-home-section">';
      get_template_part('templates/home', 'news');
    $i = 0; while ( have_rows('widget_home') ) : the_row();

      $cl_odd = '';
      if ($i % 2 !== 0) {
        $cl_odd = 'odd';
      }

      if( get_row_layout() == 'home_widget' ):

        echo '<div class="widget-wrap '.$cl_odd.'">';
        get_template_part('templates/home', 'widget');
        echo '</div>';
      endif;

      if($i == 0) {
        get_template_part('templates/widget', 'takeAction');
        get_template_part('templates/widget', 'signUp');

      }

    $i++; endwhile;
    echo '</div>';

  else :
    // no layouts found
  endif; ?>
  <?php get_template_part('templates/widget', 'contact-box'); ?>
  <?php get_template_part('templates/widget', 'partners'); ?>
  <?php get_template_part('templates/widget', 'community'); ?>
<?php endwhile; ?>

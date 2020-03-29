<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/widget', 'about-staff-board'); ?>
  <?php get_template_part('templates/widget', 'ac-top-page'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php get_template_part('templates/widget', 'partners'); ?>
  <?php get_template_part('templates/widget', 'takeAction'); ?>
  <?php get_template_part('templates/widget', 'signUp'); ?>
  <?php get_template_part('templates/widget', 'ac-bottom-page'); ?>
  <?php get_template_part('templates/widget', 'contact-box'); ?>
<?php endwhile; ?>

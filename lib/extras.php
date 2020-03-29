<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

function featured_query( $query ) {

    if ( ! is_admin() ) {
        if ($query->is_home() && $query->is_main_query() && !$query->is_search()) {

            $exclude = array();
            $featured = '';
            $featured_query = get_posts(array(
                'post_type' => 'post',
                'meta_query' => array(
                    array(
                        'key' => 'feature',
                        'value' => '1',
                        'compare' => '==',
                    ),
                ),
                'posts_per_page' => 1
            ));

            $first_post = get_posts(array(
                'post_type' => 'post',
                'posts_per_page' => 1
            ));

            if (!empty($featured_query)) {
                $featured = $featured_query;
            } else {
                $featured = $first_post;
            }

            $query->set('post_type', array('post'));
            foreach($featured as $hide) {
                $exclude[] = $hide->ID;
            }
            $query->set('post__not_in', $exclude);

        }
    }
}
//add_filter( 'pre_get_posts', __NAMESPACE__ . '\\featured_query' );
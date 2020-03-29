<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/custom-field.php', // Theme customizer
  'lib/custom-types.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/**
 * WordPress Bootstrap Pagination
 */
function wp_bootstrap_pagination( $args = array() ) {
    $defaults = array(
        'range'           => 3,
        'custom_query'    => FALSE,
        'previous_string' => __( '&#171;', 'text-domain' ),
        'next_string'     => __( '&#187;', 'text-domain' ),
        'before_output'   => '<nav class="post-nav"><ul class="pagination">',
        'after_output'    => '</ul></nav>'
    );
    $args = wp_parse_args(
        $args,
        apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
    );
    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );
    if ( $count <= 1 )
        return FALSE;
    if ( !$page )
        $page = 1;
    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }
    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );
    $firstpage = esc_attr( get_pagenum_link(1) );
    if ( $firstpage && (1 != $page) )
        //$echo .= '<li class="previous page-item"><a href="' . $firstpage . '" class="page-link">' . __( 'First', 'text-domain' ) . '</a></li>';
        if ( $previous && (1 != $page) )
            $echo .= '<li class="page-item"><a href="' . $previous . '" class="page-link" title="' . __( 'previous', 'text-domain') . '">' . $args['previous_string'] . '</a></li>';
    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li class="active page-item"><a href="#" class="page-link">' . str_pad( (int)$i, 2, '0', STR_PAD_LEFT ) . '</a></li>';
            } else {
                $echo .= sprintf( '<li class="page-item" ><a href="%s" class="page-link">%002d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }
    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page) )
        $echo .= '<li class="page-item"><a href="' . $next . '" class="page-link" title="' . __( 'next', 'text-domain') . '">' . $args['next_string'] . '</a></li>';
    $lastpage = esc_attr( get_pagenum_link($count) );
    if ( $lastpage ) {
        //$echo .= '<li class="next page-item"><a href="' . $lastpage . '" class="page-link">' . __( 'Last', 'text-domain' ) . '</a></li>';
    }
    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}


add_filter( 'gform_validation_message_1', 'change_message', 10, 2 );
add_filter( 'gform_validation_message_5', 'change_message', 10, 2 );
function change_message( $message, $form ) {
    return "<div class='validation_error'>The all fields is required.</div>";
}

add_filter('style_loader_tag', 'codeless_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
function codeless_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}
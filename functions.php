<?php

 add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );

 /**
  * Customize the title for the home page, if one is not set.
  *
  * @param string $title The original title.
  * @return string The title to use.
  */
  function wpdocs_hack_wp_title_for_home( $title )
  {
    if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
      $title = __( get_the_title(), 'textdomain' ) . ' | ' . get_bloginfo( 'description' );
    }
    return $title;
  }

  function wpdocs_excerpt_more ($more) {
    return '...<a href="'.get_the_permalink().'" rel="nofollow" class="post__more">Read more</a>';
  }

  add_filter('excerpt_more', 'wpdocs_excerpt_more');

  remove_filter( 'the_excerpt', 'wpautop' );

  function wpdocs_custom_excerpt_length( $length ) {
    return 30;
  }
  add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
    /**
   * Enables the Excerpt meta box in Page edit screen.
   */
  function wpcodex_add_excerpt_support_for_pages() {
  	add_post_type_support( 'post', ['thumbnail', 'excerpt']);
  }
  add_action( 'init', 'wpcodex_add_excerpt_support_for_pages', 1);
  add_theme_support( 'post-thumbnails' );

 $args = array(
 	'posts_per_page'   => 5,
 	'offset'           => 0,
 	'category'         => '',
 	'category_name'    => '',
 	'orderby'          => 'date',
 	'order'            => 'DESC',
 	'include'          => '',
 	'exclude'          => '',
 	'meta_key'         => '',
 	'meta_value'       => '',
 	'post_type'        => 'post',
 	'post_mime_type'   => '',
 	'post_parent'      => '',
 	'author'	   => '',
 	'author_name'	   => '',
 	'post_status'      => 'publish',
 	'suppress_filters' => true,
 	'fields'           => '',
 );
 $posts_array = get_posts( $args ); ?>

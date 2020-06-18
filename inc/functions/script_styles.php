<?php
// enqueue styles and scripts
function add_naven_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  
  wp_deregister_script( 'jquery' );
    // if you have problems with plugins,uncomment this latest version of jquery
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.4.1.min.js", array(), '3.4.1',true );
 
  wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array ( 'jquery' ), 1.1, true);
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_naven_scripts' );

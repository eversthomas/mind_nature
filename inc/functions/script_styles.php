<?php
/**
 * Enqueue scripts and styles.
 */
function mind_nature_scripts() {
	wp_enqueue_style( 'mind_nature-style', get_stylesheet_uri(), array() );
	wp_style_add_data( 'mind_nature-style', 'rtl', 'replace' );
  
  wp_deregister_script( 'jquery' );
  // if you have problems with plugins,uncomment this latest version of jquery
  wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.4.1.min.js", array(), '3.4.1',true );

	wp_enqueue_script( 'mind_nature-navigation', get_template_directory_uri() . '/js/navigation.js', array(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mind_nature_scripts' );

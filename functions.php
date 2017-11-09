<?php 

// Setup 


// Includes
include( get_template_directory() . '/includes/front/enqueue.php' ); 
include( get_template_directory() . '/includes/like-system.php' ); 
include( get_template_directory() . '/includes/setup.php' ); 
//include( get_template_directory() . '/includes/widgets.php' ); 

// Hooks
add_action( 'wp_enqueue_scripts', 'di_enqueue' );
add_action( 'after_setup_theme', 'di_setup_theme' );
//add_action( 'widgets_init', 'di_widgets' );
add_action( 'admin_menu', 'di_change_post_label' );
add_action( 'init', 'di_change_post_object' );

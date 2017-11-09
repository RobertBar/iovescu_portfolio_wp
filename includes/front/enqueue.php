<?php 


function di_enqueue() {

    wp_register_style( 'di_google_fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic');
    wp_register_style( 'di_lightgallery', 'https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css' );
    wp_register_style( 'di_font_awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
    wp_register_style( 'di_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css'  );
    wp_register_style( 'di_like', get_template_directory_uri() . '/assets/css/simple-likes-public.css'  );
    wp_register_style( 'di_main_stylesheet', get_template_directory_uri() . '/assets/css/main.css' );
        
    wp_enqueue_style( 'di_google_fonts' );
    wp_enqueue_style( 'di_lightgallery' );
    wp_enqueue_style( 'di_bootstrap' ); 
    wp_enqueue_style( 'di_font_awesome' );
    wp_enqueue_style( 'di_like' );
    wp_enqueue_style( 'di_main_stylesheet' );                
                  
    wp_register_script( 'di-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, true);
    wp_register_script( 'di-like', get_template_directory_uri() . '/assets/js/simple-likes-public.js', array(), false, true);
    wp_register_script( 'di-mixitup', get_template_directory_uri() . '/assets/js/mixitup.min.js', array(), false, true);
    wp_register_script( 'di-main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);

    
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'di-bootstrap' );
    wp_enqueue_script( 'di-like' ); 
    wp_enqueue_script( 'di-main' );    

    
}

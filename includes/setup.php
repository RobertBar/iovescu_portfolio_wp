<?php 

function di_setup_theme() {

    //Add theme support
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );

     /**
     * Add automatic image sizes
     */
    if ( function_exists( 'add_image_size' ) ) { 
        add_image_size( 'gallery_thumbnail', 300, 300, array( 'center', 'center') );        
        add_image_size( 'gallery_thumbnail_two', 450, 338, array( 'center', 'center') );
        add_image_size( 'portfolio-responsive-medium', 360, 360 , false ); //(scaled)
    }
    
    
    //Register theme menus
    register_nav_menu(
        'primary', __( 'Primary Menu', 'iovescu-portfolio')
    );
    
}

//Changing label from posts to album
function di_change_post_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'Albume foto';
	$submenu['edit.php'][5][0] = 'Albume foto';
	$submenu['edit.php'][10][0] = 'Adaugă Album foto';
	$submenu['edit.php'][16][0] = 'Taguri Albume foto';
}
function di_change_post_object() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'Albume foto';
	$labels->singular_name = 'Album foto';
	$labels->add_new = 'Adaugă album foto';
	$labels->add_new_item = 'Adaugă album foto';
	$labels->edit_item = 'Editează album foto';
	$labels->new_item = 'Album foto';
	$labels->view_item = 'Vezi albume foto';
	$labels->search_items = 'Caută albume foto';
	$labels->not_found = 'Nu a fost găsit nici un album foto';
	$labels->not_found_in_trash = 'Nu a fost găsit nici un album foto în coș';
    $labels->all_items = 'Toate Albume foto';
    $labels->menu_name = 'Albume foto';
    $labels->name_admin_bar = 'Albume foto';
}


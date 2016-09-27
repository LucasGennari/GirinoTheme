<?php

/*

@package GennariGirino-Theme

    =================
      ADMIN ENQUEUE FUNCTIONS
    =================
*/

function girino_load_admin_scripts( $hook ){

    if( 'toplevel_page_lucas-gennarigirino' != $hook ){
        return;
    }

    wp_register_style( 'girino_admin' , get_template_directory_uri() . '/css/girino-admin.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'girino_admin' );

    wp_enqueue_media();

    wp_register_script( 'girino-admin-script', get_template_directory_uri() . '/js/girino-admin.js', array('jquery'), '1.0.0', true  );
    wp_enqueue_script( 'girino-admin-script' );

}
add_action( 'admin_enqueue_scripts', 'girino_load_admin_scripts' );

/*

@package GennariGirino-Theme

    =================
      FRONT-END FUNCTIONS
    =================
*/

function girino_load_scripts(){

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
    wp_enqueue_style('girino.css', get_template_directory_uri() . '/css/girino.css', array(), '1.0.0', 'all');
    wp_enqueue_style('manos.css', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css', array(), '1.0.0', 'all');
    wp_enqueue_style('raleway', 'https://fonts.googleapis.com/css?family=Raleway:200i,300,500');

    //wp_deregister_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
    wp_enqueue_script('manos', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), '3.3.7', true);
    wp_enqueue_script( 'girino', get_template_directory_uri() . '/js/girino.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'girino_load_scripts');
?>

<?php

/*

@package GennariGirino-Theme

    =================
      ADMIN PAGE
    =================
*/

function girino_add_admin_page(){

    //Generate Girino Admin Page
    add_menu_page( 'Girino Theme Options', 'Girino', 'manage_options', 'lucas-gennarigirino', 'girino_theme_create_page', 'dashicons-admin-home' , 110 );

    //Generate Girino admin Sub Pages
    add_submenu_page('lucas-gennarigirino', 'Girino Sidebar Options', 'Sidebar', 'manage_options','lucas-gennarigirino', 'girino_theme_create_page');
    add_submenu_page('lucas-gennarigirino', 'Girino Theme Options', 'Theme Options', 'manage_options','lucas-gennarigirino_theme', 'girino_theme_support_page');
    add_submenu_page('lucas-gennarigirino', 'Girino CSS Options', 'Custom CSS', 'manage_options','lucas-gennarigirino_css', 'girino_theme_settings_page');


    //Activate custom Settings
    add_action('admin_init', 'girino_custom_settings');
}
add_action( 'admin_menu', 'girino_add_admin_page' );

function girino_custom_settings (){

    //Sidebar Options
    register_setting( 'girino-settings-group', 'profile_picture' );
    register_setting( 'girino-settings-group', 'first_name' );
    register_setting( 'girino-settings-group', 'last_name' );
    register_setting( 'girino-settings-group', 'user_description' );
    register_setting( 'girino-settings-group', 'twitter_handler' );
    register_setting( 'girino-settings-group', 'facebook_handler' );

    add_settings_section( 'girino-sidebar-options' , 'Sidebar Option' , 'girino_sidebar_options' , 'lucas-gennarigirino');

    add_settings_field( 'sidebar-profile-picture', 'Profile Picture', 'girino_sidebar_profile', 'lucas-gennarigirino', 'girino-sidebar-options');
    add_settings_field( 'sidebar-name', 'Full Name', 'girino_sidebar_name', 'lucas-gennarigirino', 'girino-sidebar-options');
    add_settings_field( 'sidebar-description', 'Description', 'girino_sidebar_description', 'lucas-gennarigirino', 'girino-sidebar-options');
    add_settings_field( 'sidebar-twitter', 'Twitter handler', 'girino_sidebar_twitter', 'lucas-gennarigirino', 'girino-sidebar-options');
    add_settings_field( 'sidebar-facebook', 'Facebook handler', 'girino_sidebar_facebook', 'lucas-gennarigirino', 'girino-sidebar-options');

    //Theme Support Options
    register_setting( 'girino-theme-support', 'post_formats' );
    register_setting( 'girino-theme-support', 'custom_header' );
    register_setting( 'girino-theme-support', 'custom_background' );

    add_settings_section( 'girino-theme-options' , 'Theme Option' , 'girino_theme_options' , 'girino_theme_support_page');

    add_settings_field( 'post-formats', 'Post Formats', 'girino_post_formats', 'girino_theme_support_page', 'girino-theme-options');
    add_settings_field( 'custom_header', 'Custom Header', 'girino_custom_header', 'girino_theme_support_page', 'girino-theme-options');
    add_settings_field( 'custom_background', 'Custom Background', 'girino_custom_background', 'girino_theme_support_page', 'girino-theme-options');
}



function girino_theme_options(){


}
function girino_post_formats(){
    $options =  get_option( 'post_formats' )  ;
    $formats = array ('aside', 'galley', 'image', 'link','quote','status','video','audio','chat');
    $output = '';
    foreach($formats as $format){
        $checked =( @$options[$format] == 1 ? 'checked' : '');
        $output .='<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.'/>'.$format.'</label><br>';
    }
    echo $output;
}
function girino_custom_header(){
    $options =  get_option( 'custom_header' )  ;
    $checked =( @$options == 1 ? 'checked' : '');
    echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" '.$checked.'/>Activate the Custom Header</label>';

}
function girino_custom_background(){
    $options =  get_option( 'custom_background' )  ;
    $checked =( @$options == 1 ? 'checked' : '');
    echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" '.$checked.'/>Activate the Custom Background</label>';

}
function girino_sidebar_options(){
  echo 'Customize your Sidebar Information';
}
function girino_sidebar_profile (){
  $picture =  esc_attr( get_option( 'profile_picture' ) ) ;

  if( empty($picture)){
    echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button"/>
          <input type="hidden" id="profile-picture" name="profile_picture" value="'.$picture.'" />';
  }
    else{
  echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-button"/>
        <input type="hidden" id="profile-picture" name="profile_picture" value="'.$picture.'" />
        <input type="button" class="button button-secondary" value="Remove Profile Picture" id="remove-picture"/>';}

}
function girino_sidebar_name() {
  $firstName =  esc_attr( get_option( 'first_name' ) ) ;
  $lastName =  esc_attr( get_option( 'last_name' ) ) ;
  echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name"/>
        <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name"/>';
}
function girino_sidebar_description (){
  $description =  esc_attr( get_option( 'user_description' ) ) ;
  echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description"/><p class="description">Write something
  short and smart</p>';

}
function girino_sidebar_twitter (){
  $twitter =  esc_attr( get_option( 'twitter_handler' ) ) ;
  echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler"/>';

}
function girino_sidebar_facebook (){
  $facebook =  esc_attr( get_option( 'facebook_handler' ) ) ;
  echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook handler"/>';

}

//Template submenu functions
function girino_theme_support_page(){

    require_once( get_template_directory() . '/inc/templates/girino-theme-support.php');

}

function girino_theme_settings_page(){

    echo '<h1>Girino Custom CSS</h1>';

}

function girino_theme_create_page(){

    require_once( get_template_directory() . '/inc/templates/girino-admin.php');

}
 ?>

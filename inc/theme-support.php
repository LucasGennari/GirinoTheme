<?php

/*

@package GennariGirino-Theme

    =================
      THEME SUPPORT PAGE
    =================
*/

$options = get_option('post_formats');
$formats = array ('aside', 'galley', 'image', 'link','quote','status','video','audio','chat');
$output = array();

foreach($formats as $format){

  $output[] = ( @$options[$format] == 1 ? $format : '');
}
if (!empty($options) ){
  add_theme_support('post-formats',  $output );
}

$options = get_option('custom_header');
if($options == 1){
  add_theme_support('custom-header');
}
$options = get_option('custom_background');
if($options == 1){
  add_theme_support('custom-background');
}

add_theme_support( 'post-thumbnails' );

/* Activate Nav Menu Option */
function girino_register_nav_menu() {
  register_nav_menu( 'primary','Header Navagation Menu');
}
add_action('after_setup_theme', 'girino_register_nav_menu');

/*
ACTIVATE HTML5 FEATURES
*/
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );


/*
=================
  BLOG LOOP CUSTOM FUNCTIONS
=================
 */
function girino_posted_meta() {
  $posted_on = human_time_diff( get_the_time('U'), current_time('timestamp')) ;

  $categories = get_the_category();
  $separator = ', ';
  $output = '';
  $i = 1;

  if( !empty($categories) ):
      foreach( $categories as $category ):
          if( $i > 1): $output .= $separator; endif;
          $output .= '<a href="' . esc_url( get_category_link( $category->term_id) ) . '" alt="' . esc_attr( 'View all posts in%s',
$category->name ) . '">'. esc_html(  $category->name ) . '</a>';
      $i++;  endforeach;
  endif;

  return '<span class="posted-on">Postado há <a href="'.esc_url( get_permalink() ).'">' .$posted_on. '</a> atrás</span> / <span
  class="posted-in">' . $output .'</span>';
}

function girino_posted_footer() {

  $comments_num = get_comments_number();
  if( comments_open() ){
    if( $comments_num == 0 ){
        $comments = __('Nenhum Comentário');
    } elseif ( $comments_num > 1){
        $comments = $comments_num. __(' Comentários');
    } else{
        $comments = __('1 Comentário');
    }
    $comments = '<a class = "comments-link" href="' . get_comments_link() . '">' . $comments . ' <span class="girino-icon girino-comments"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span></a>';
  }else{
    $comments = __('Comments are closed');
  }

  return '<div class="post-footer-container"> <div class="row"> <div class="col-xs-6 col-sm-6">'. get_the_tag_list('<div class="tag-
  lists"><span class="girino-icon girino-tags"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>', ' ', '</div>') .'</div>
  <div class="col-xs-6 col-sm-6 text-right">'. $comments .'</div></div></div>';
}

function girino_get_embedded_media( $type = array()){
  $content = do_shortcode( apply_filters( 'the_content', get_the_content() ));
  $embed = get_media_embedded_in_content ( $content, $type);

  if( in_array('audio', $type) ):
    $output = str_replace( '?visual=true', '?visual=false', $embed[0]);
  else:
    $output = $embed[0];
  endif;

  return $output;

}

/*
  SIDEBAR FUNCTIONS
  =============
*/

function girino_sidebar_init(){

  register_sidebar(
      array(
            'name'=> esc_html__('Girino Sidebar', 'girino-theme'),
            'id' => 'girino-sidebar',
            'description' => 'Dynamic Left Sidebar',
            'before_widget'=> '<section id="%1$s" class="girino-widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="girino-widget-title">',
            'after_title' => '</h2>'
      )

);
}
add_action( 'widgets_init', 'girino_sidebar_init');


function girino_get_post_navigation(){

    if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ):

        require( get_template_directory() . '/inc/templates/girino-comment-nav.php');

    endif;
}

?>

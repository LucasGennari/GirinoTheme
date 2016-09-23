<?php
/*
  @package girino-theme
*/

if( post_password_required() ){
  return;
}

 ?>

 <div id="comments" class="comments-area" >

   <?php
      if( have_comments() ):
      //We have comments
   ?>
   <h2 class="comments-title">
     <?php

        printf(
          esc_html( _nx('One comment on &ldquo;%2$s&rdquo;', '%1$s comentários em &ldquo;%2$s&rdquo;', get_comments_number(), 'comments tutle',
'girino-theme') ),
          number_format_i18n( get_comments_number()),
          '<span>' . get_the_title() . '</span>'
      );

      ?>
   </h2>

   <?php girino_get_post_navigation(); ?>



      <?php
        endif;
         ?>

   <ol class="comment-list">
    <?php
      $args = array(
         'walker'            => null,
         'max_depth'         => 3,
         'style'             => 'ol',
         'callback'          => null,
         'end-callback'      => null,
         'type'              => 'all',
         'reply_text'        => 'Reply',
         'page'              => '',
         'per_page'          => '',
         'avatar_size'       => 64,
         'reverse_top_level' => null,
         'reverse-children'  => '',
         'format'            => 'html5',
         'short_ping'        => false,
         'echo'              => true
      );
      wp_list_comments($args);
    ?>
   </ol>

     <?php girino_get_post_navigation(); ?>

   <?php
      if( !comments_open() && get_comments_number() ):
   ?>
      <p class="no-comments"><?php esc_html_e( 'Comments are closed', 'girino-theme' ) ?> </p>
  <?php
    endif;
     ?>


   <?php

    $fields = array(

        'author' =>
 '<div class="form-group"><label for="author">' . __( 'Nome', 'domainreference' ) . '</label> <span class="required">*</span><input
id="author" name="author" type="text" class="form-control" value="' .esc_attr( $commenter['comment_author']) .'" required="required"/></div>',

        'email' =>
'<div class="form-group"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> <span class="required">*</span><input
id="email" name="email" type="text" class="form-control email-field" value="' .esc_attr( $commenter['comment_author_email']) .'" required="required"/></div>'
    );
    $args = array(

        'class_submit' => 'btn btn-block btn-lg btn-warning',
        'label_submit' => __( 'Publicar Comentário' ),
        'comment_field' =>
            '<div class="form-group"><label for="comment">' . _x( 'Comente algo', 'noun') . '</label><textarea id="comment" class="form-control"
name="comment" rows="4" required="required"></textarea></div>',
        'fields'       => apply_filters( 'comment_form_default_fields', $fields ),


    );


      comment_form( $args );
   ?>

</div> <!-- .comments-area -->

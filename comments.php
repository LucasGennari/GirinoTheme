<?php
/*
  @package girino-theme
*/

if( post_password_required() ){
  return;
}

 ?>

 <div id="comments" class="comments-area">

   <?php
      if( have_comments() ):
      //We have comments
   ?>
   <h2 class="comments-title">
     <?php

        printf(
          esc_html( _nx('One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments tutle',
'girino-theme') ),
          number_format_i18n( get_comments_number()),
          '<span>' . get_the_title() . '</span>'
      );

      ?>
   </h2>

   <?php if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ): ?>

      <nav id="comment-nav-top" class="comment-navigation" role="navigation">
          <h3><?php esc_html_e( 'Comment navigation', 'girino-theme')?></h3>
          <div class="nav-link">
        </div>
      </nav>

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
         'avatar_size'       => 50,
         'reverse_top_level' => null,
         'reverse-children'  => '',
         'format'            => 'html5',
         'short_ping'        => false,
         'echo'              => true
      );
      wp_list_comments($args);
    ?>
   </ol>

   <?php
      if( !comments_open() && get_comments_number() ):
   ?>
      <p class="no-comments"><?php esc_html_e( 'Comments are closed', 'girino-theme' ) ?> </p>
  <?php
    endif;
     ?>
  <?php
    endif;
   ?>

   <?php comment_form(); ?>

</div> <!-- .comments-area -->

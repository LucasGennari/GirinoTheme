<?php
/*
  ASIDE POST FORMAT
  =====
*/
 ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class('girino-format-aside'); ?> style="margin-bottom:30px;">


    <div class="aside-container">
       <div class="row" style="margin-left: 0">

          <div class="col-xs-12 col-sm-3 col-md-2 text-center">
            <?php if( has_post_thumbnail()):
              $featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
              ?>

                <div class="aside-featured background-image" style="background-image: url(<?php echo   $featured_image;  ?>);"></div>

            <?php endif ?>

          </div><!-- .col-md-3 -->

          <div class="col-xs-12 col-sm-9 col-md-10 ">

            <header class="entry-header">



              <div class="entry-meta">
                <?php echo girino_posted_meta(); ?>
              </div>

            </header>

           <div class="entry-content">



             <div class="entry-excerpt">
                 <?php the_content(); ?>
             </div>

           </div><!-- .entry-content -->

          </div><!-- .col-md-9 -->

       </div><!--row-->


  <footer class="entry-footer">
    <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
        <?php echo girino_posted_footer(); ?>
        </div>
    </div>
  </footer>
   </div><!--container-->
   <div class="girino-shareThis" style="border-bottom: 1px solid #f1f1f1;">

     <h4>
       Compartilhe nas redes sociais
     </h4>
     <?php
       $title = get_the_title();
       $permalink = get_permalink();

       $twitterHandler = ( get_option('twitter_handler') ? '&amp;via=' .esc_attr( get_option('twitter_handler')):'');
       //IF YOU HAVE A TWITTER ADD THE TWITTER HANDLER TO THE $TWITTER

       $twitter = 'https://twitter.com/intent/tweet?text=' . $title . '&amp;url=' . $permalink . $twitterHandler . '';
       $facebook = 'https://facebook.com/sharer/sharer.php?url=' . $permalink;
       $google = 'https://plus.google.com/share?url=' . $permalink;
      ?>

      <ul>
       <li><a href="<?php echo $twitter ?>" rel="nofollow"><span class="girino-icon girino-twitter"><span class="path1"></span><span class="path2"></span></span></a></li>
       <li><a href="<?php echo $facebook ?>" rel="nofollow"><span class="girino-icon girino-facebook"><span class="path1"></span><span class="path2"></span></span></a></li>
       <li><a href="<?php echo $google ?>" rel="nofollow"><span class="girino-icon girino-googleplus"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span></a></li>
      </ul>

   </div><!-- .girino-share-->
 </article>

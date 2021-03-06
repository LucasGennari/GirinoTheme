<?php
/*
  ASIDE POST FORMAT
  =====
*/
 ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class('girino-format-aside'); ?> style="margin-bottom:30px; margin-top:50px;">


    <div class="aside-container">
      <div class="text-left" style=" padding-top: 8px;  border-top: 1px solid #f1f1f1; border-bottom:1px solid #f1f1f1;">
        <ul  style="list-style:none; display: -webkit-inline-box;">
            <li style="margin-right: 5px"><div class="fb-like" data-href="<?php echo $permalink ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div></li>
            <li class="hidden-xs"><div class="fb-share-button" data-href="<?php echo $permalink ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"></a></div></li>
        </ul>
      </div>
       <div class="row" style="margin-left: 0">

          <div class="col-xs-12 col-sm-3 col-md-3 text-center">
            <?php if( has_post_thumbnail()):
              $featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
              ?>

                <div class="aside-featured background-image" style="background-image: url(<?php echo   $featured_image;  ?>);"></div>

            <?php endif ?>

          </div><!-- .col-md-3 -->

          <div class="col-xs-12 col-sm-9 col-md-9 ">

            <header class="entry-header">


                <div class="entry-meta">

                  <div class="row">

                    <div class="col-xs-6 col-sm-9 col-md-10">
                   <?php echo girino_posted_meta(); ?>
                 </div>
                      <div class="col-xs-6 col-sm-3 col-md-2 text-right" style="padding-right: 25px;">
                    <span  class="girino-icon girino-multimedia"></span>
                  </div>
                 </div>
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
       <li><div class="" data-href="<? echo $permalink ?>" ><a class="fb-xfbml-parse-ignore" target="_blank"  href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink ?>">
<span class="girino-icon girino-facebook"><span class="path1"></span><span class="path2"></span></span></a></div></li>
       <li><a href="<?php echo $google ?>" rel="nofollow"><span class="girino-icon girino-googleplus"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span></a></li>
      </ul>

   </div><!-- .girino-share-->
 </article>

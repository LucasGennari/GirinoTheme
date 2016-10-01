<?php
/*
  QUOTE POST FORMAT
  =====
*/

$permalink = get_permalink();


 ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class('girino-format-quote'); ?> style="margin-bottom:30px; margin-top:50px;">


    <div class="quote-container">
      <div class="text-left" style=" padding-top: 8px;  border-top: 1px solid #f1f1f1; border-bottom:1px solid #f1f1f1;">
        <ul  style="list-style:none; display: -webkit-inline-box;">
            <li style="margin-right: 5px"><div class="fb-like" data-href="<?php echo $permalink ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div></li>
            <li class="hidden-xs"><div class="fb-share-button" data-href="<?php echo $permalink ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"></a></div></li>
        </ul>
      </div>
       <div class="row text-center" >

         <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
           <h1 class="quote-content"><?php echo get_the_content(); ?> </h1>
         <?php the_title( '<h2 class="quote-author">', '</h2>' ); ?>
       </div>

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

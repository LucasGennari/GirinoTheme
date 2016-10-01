<?php
/*

@package Girino-Theme

    =================
    SINGLE PAGE
    =================
*/
 ?>
 <?php
   $title = get_the_title();
   $permalink = get_permalink();


   $twitterHandler = ( get_option('twitter_handler') ? '&amp;via=' .esc_attr( get_option('twitter_handler')):'');
   //IF YOU HAVE A TWITTER ADD THE TWITTER HANDLER TO THE $TWITTER

   $twitter = 'https://twitter.com/intent/tweet?text=' . $title . '&amp;url=' . $permalink . $twitterHandler . '';
   $facebook = 'http://www.facebook.com/sharer.php?u='. $the_permalink .'&t=' . $the_title;
   $google = 'https://plus.google.com/share?url=' . $permalink;
  ?>

 <article class="single-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>style="margin-bottom:30px;">

  <header class="entry-header text-center " >

    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    <div class="entry-meta">
      <?php echo girino_posted_meta(); ?>
    </div>
    <div class="text-left" style=" padding-top: 8px;  border-top: 1px solid #f1f1f1; border-bottom:1px solid #f1f1f1;">
      <ul  style="list-style:none; display: -webkit-inline-box;">
          <li style="margin-right: 5px"><div class="fb-like" data-href="<?php echo $permalink ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div></li>
          <li class="hidden-xs"><div class="fb-share-button" data-href="<?php echo $permalink ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"></a></div></li>
      </ul>
    </div>
  </header>

  <div class="entry-content-single clearfix" >


    <?php the_content(); ?>


  </div><!-- .entry-content -->

  <div class="girino-shareThis">

    <h4>
      Compartilhe nas redes sociais
    </h4>


    <ul>
      <li><a href="<?php echo $twitter ?>" rel="nofollow"><span class="girino-icon girino-twitter"><span class="path1"></span><span class="path2"></span></span></a></li>
      <li><div class="" data-href="<? echo $permalink ?>" ><a class="fb-xfbml-parse-ignore" target="_blank"  href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink ?>">
<span class="girino-icon girino-facebook"><span class="path1"></span><span class="path2"></span></span></a></div></li>
      <li><a href="<?php echo $google ?>" rel="nofollow"><span class="girino-icon girino-googleplus"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span></a></li>
   </ul>


  </div><!-- .girino-share-->

  <footer class="entry-footer">
    <?php echo girino_posted_footer(); ?>
  </footer>
 </article>

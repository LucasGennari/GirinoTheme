<?php
/*

@package Girino-Theme

    =================
    SINGLE PAGE
    =================
*/
 ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>style="margin-bottom:30px;">

  <header class="entry-header text-center">

    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    <div class="entry-meta">
      <?php echo girino_posted_meta(); ?>
    </div>

  </header>

  <div class="entry-content-single clearfix" >


    <?php the_content(); ?>

  </div><!-- .entry-content -->

  <div class="girino-shareThis">

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

  <footer class="entry-footer">
    <?php echo girino_posted_footer(); ?>
  </footer>
 </article>

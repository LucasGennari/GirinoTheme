<?php
/*
  STANDARD POST FORMAT
  =====
*/
 ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

   <div class="icon-circle icon-standard">
     <span class="girino-icon girino-standard"></span>
   </div>


  <div class="entry-content">
    <?php if( has_post_thumbnail()):
      $featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
      ?>

      <a class="standard-featured-link" href="<?php the_permalink();?>">
        <div class="standard-featured background-image" style="background-image: url(<?php echo   $featured_image;  ?>);"></div>
      </a>
    <?php endif ?>

    <header class="entry-header text-center">

      <?php the_title( '<h1 class="entry-title"><a href="'. esc_url(get_permalink()) .'" rel="bookmark">', '</a></h1>' ); ?>

      <div class="entry-meta">
        <?php echo girino_posted_meta(); ?>
      </div>

    </header>
    <div class="entry-excerpt">
        <?php the_excerpt(); ?>
    </div>
    <div class="row">
          <div class="col-sm-6">
            <div class="girino-shareThisLoop">

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
                <li><span class="girino-icon girino-multimedia"></span></li>
                <li><a href="<?php echo $twitter ?>" rel="nofollow"><span class="girino-icon girino-twitter"><span class="path1"></span><span class="path2"></span></span></a></li>
                <li><a href="<?php echo $facebook ?>" rel="nofollow"><span class="girino-icon girino-facebook"><span class="path1"></span><span class="path2"></span></span></a></li>
                <li><a href="<?php echo $google ?>" rel="nofollow"><span class="girino-icon girino-googleplus"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span></a></li>
               </ul>



            </div><!-- .girino-share-->

          </div>
          <div class="col-sm-6 btn-ul">


               <ul>
                <li>   <a id="leiamais" href="<?php the_permalink(); ?>" class=" btn  btn-primary "><?php _e( 'Leia Mais' );?></a> </li>
               </ul>



          </div>
        </div>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <?php echo girino_posted_footer(); ?>
  </footer>
 </article>

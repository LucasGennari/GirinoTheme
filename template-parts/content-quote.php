<?php
/*
  STANDARD POST FORMAT
  =====
*/
 ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class('girino-format-quote'); ?>>

   <div class="icon-circle icon-quote">
     <span class="girino-icon girino-quote"></span>
   </div>


  <div class="entry-content">

    <header class="entry-header text-center">
      <div class="row">
            <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
           <h1 class="quote-content"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo get_the_content(); ?></a> </h1>
            <?php the_title( '<h2 class="quote-author">', '</h2>' ); ?>
          </div>
      </div>
    </header>

    <div class="row">
          <div class="col-sm-6">
            <div class="girino-shareThisLoop">

              <?php
                $title = get_the_title();
                $permalink = get_permalink();
                $comment =  get_comments_link();

                $twitterHandler = ( get_option('twitter_handler') ? '&amp;via=' .esc_attr( get_option('twitter_handler')):'');
                //IF YOU HAVE A TWITTER ADD THE TWITTER HANDLER TO THE $TWITTER

                $twitter = 'https://twitter.com/intent/tweet?text=' . $title . '&amp;url=' . $permalink . $twitterHandler . '';
                $facebook = 'http://www.facebook.com/sharer.php?u='. $the_permalink .'&t=' . $the_title;
                $google = 'https://plus.google.com/share?url=' . $permalink;

               ?>





               <ul>
                <li><span class="girino-icon girino-multimedia"></span></li>
                <li><a  target="_blank" href="<?php echo $twitter ?>" rel="nofollow"><span class="girino-icon girino-twitter"><span class="path1"></span><span class="path2"></span></span></a></li>
                  <li><div class="" data-href="<? echo $permalink ?>" ><a class="fb-xfbml-parse-ignore" target="_blank"  href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink ?>">
<span class="girino-icon girino-facebook"><span class="path1"></span><span class="path2"></span></span></a></div></li>
                <li><a href="<?php echo $comment ?>" rel="nofollow"><span class="girino-icon girino-googleplus"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span></a></li>
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

    <div class="post-footer-container">
       <div class="row">
          <div class="col-xs-6 col-sm-6">
             <?php echo get_the_tag_list('<div class="tag-
    lists"><span class="girino-icon girino-tags"><span class="path1"></span><span class="path2"></span>
    <span class="path3"></span></span>', ' ', '</div>');?>
  </div>
    <div class="col-xs-6 col-sm-6 text-right"><a href="<?php echo $comment ?>"><span class="fb-comments-count" data-href="<?php echo $permalink ?>"></span> comentários <span class="girino-icon girino-comments"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span></a></div></div></div>
<!--    <span class="fb-comments-count" data-href=""></span> comentários -->
  </footer>
 </article>

<?php
/*
  ASIDE POST FORMAT
  =====
*/
 ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class('girino-format-aside'); ?>>

   <div class="icon-circle icon-aside">
    <span class="girino-icon girino-aside"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span></span>
   </div>
    <div class="aside-container">
       <div class="row" style="margin-left: 0">

          <div class="col-xs-12 col-sm-3 col-md-3 text-center">
            <?php if( has_post_thumbnail()):
              $featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
              ?>
                  <a class="standard-featured-link" href="<?php the_permalink();?>">
                <div class="aside-featured background-image" style="background-image: url(<?php echo   $featured_image;  ?>);"></div>
              </a>
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

                        <a href="<?php the_permalink();?>" class="button">
                            <span  class="girino-icon girino-multimedia"></span>
                        </a>


                </div>
               </div>
            </div>
            </header>

           <div class="entry-content">


              <a class="standard-featured-link" href="<?php the_permalink();?>">
             <div class="entry-excerpt">
                 <?php the_content(); ?>
             </div>
           </a>
           </div><!-- .entry-content -->

          </div><!-- .col-md-9 -->

       </div><!--row-->


  <footer class="entry-footer">
    <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
          <div class="post-footer-container">
             <div class="row">
                <div class="col-xs-6 col-sm-6">
                   <?php echo get_the_tag_list('<div class="tag-
          lists"><span class="girino-icon girino-tags"><span class="path1"></span><span class="path2"></span>
          <span class="path3"></span></span>', ' ', '</div>');?>
        </div>
          <div class="col-xs-6 col-sm-6 text-right"><a href="<?php echo $permalink ?>"><span class="fb-comments-count" data-href="<?php echo $permalink ?>"></span> comentários <span class="girino-icon girino-comments"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></span></a></div></div></div>
        </div>
    </div>
  </footer>
   </div><!--container-->
 </article>

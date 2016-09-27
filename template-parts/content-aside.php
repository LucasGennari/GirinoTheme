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

          <div class="col-xs-12 col-sm-3 col-md-2 text-center">
            <?php if( has_post_thumbnail()):
              $featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
              ?>
                  <a class="standard-featured-link" href="<?php the_permalink();?>">
                <div class="aside-featured background-image" style="background-image: url(<?php echo   $featured_image;  ?>);"></div>
              </a>
            <?php endif ?>

          </div><!-- .col-md-3 -->

          <div class="col-xs-12 col-sm-9 col-md-10 ">

            <header class="entry-header">



              <div class="entry-meta">
                <?php echo girino_posted_meta(); ?>
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
        <?php echo girino_posted_footer(); ?>
        </div>
    </div>
  </footer>
   </div><!--container-->
 </article>

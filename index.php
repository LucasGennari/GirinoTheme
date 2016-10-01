<?php get_header(); ?>


<div id="primary" class="content-area col-xs-12 col-sm-9 col-md-9 col-lg-8 col-lg-offset-3 col-sm-offset-3" style="background-color: #FFF;">
   <main id="main" class="site-main" role="main">

    <!-- <div class="visible-xs header-content table" style=" padding-bottom: 10px; margin-bottom:5px;">
       <div class="table-cell">

       <div > <img src= "<?php //echo header_image();?>" height=100% width=100%> </div>


           <div class="text-center">
           <div class="fb-like" data-href="<?php //echo $FacebookrHandler ?>" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
         </div>
       </div><!-- .table-cell -->
    <!-- </div>--><!-- .header-content -->
            <div class="content-area">

                  <?php

                    if( have_posts() ):

                        while( have_posts() ): the_post();

                          get_template_part( 'template-parts/content', get_post_format() );

                        endwhile;

                        the_posts_pagination(
                          array(
                                'mid_size' => '2',
                                'prev_text' => '<span class="girino-icon girino-arrows-1"></span>',
                                'next_text' => '<span class="girino-icon girino-arrows"></span>'
                          )
                      );
                    endif;

                   ?>

            </div>



            </main>


      </div>










<?php get_footer(); ?>

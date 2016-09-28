<?php get_header(); ?>


      <div id="indexxs"class="col-xs-12 col-sm-9 col-md-9 col-lg-8 col-sm-offset-3 col-md-offset-3 col-lg-offset-3" style="padding:0px; background-color: #fff;">

         <div id="primary" class="content-area scroll-index"  >
            <main id="main" class="site-main" role="main">

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
      </div>









<?php get_footer(); ?>

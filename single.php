<?php get_header(); ?>

     <div id="primary" class="content-area col-xs-12 col-sm-9 col-md-9 col-lg-8 col-lg-offset-3 col-sm-offset-3" style="background-color: #FFF">
        <main id="main" class="site-main" role="main">



                    <?php

                      if( have_posts() ):

                          while( have_posts() ): the_post();

                            if('aside' == get_post_format()){

                              get_template_part( 'template-parts/single-aside', get_post_format() );

                              echo girino_post_navigation();
                            }else{
                            get_template_part( 'template-parts/single', get_post_format() );

                            echo girino_post_navigation();
                            }
                          //  if ( comments_open()):
                        //    comments_template();
                      //    endif;

                          endwhile;

                      endif;

                     ?>
                  <div class="text-center"    >
                  <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
                </div>
          </main>
        </div>


<?php get_footer(); ?>

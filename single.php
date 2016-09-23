<?php get_header(); ?>

     <div id="primary" class="content-area col-sm-9 col-md-9 col-lg-8 " style="background-color: #FFF">
        <main id="main" class="site-main" role="main">



                    <?php

                      if( have_posts() ):

                          while( have_posts() ): the_post();

                            get_template_part( 'template-parts/single', get_post_format() );

                            the_post_navigation();
                            if ( comments_open()):
                            comments_template();
                          endif;

                          endwhile;

                      endif;

                     ?>


            </div>

          </main>
  </div>

<?php get_footer(); ?>

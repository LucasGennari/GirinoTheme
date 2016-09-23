<?php get_header(); ?>
  <div class="col-xs-12 col-sm-9 col-md-9 col-lg-8" style="padding:0px; background-color: #FFF">

     <div id="primary" class="content-area scroll-index"  >
        <main id="main" class="site-main" role="main">

        <div class="content-area">

              <?php

                if( have_posts() ):

                    while( have_posts() ): the_post();

                      get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;

                endif;

               ?>

        </div>



        </main>


  </div>
  </div>









<?php get_footer(); ?>

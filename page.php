<?php get_header(); ?>

     <div id="primary" class="content-area col-xs-12 col-sm-9 col-md-9 col-lg-8 col-lg-offset-3 col-sm-offset-3" style="background-color: #FFF">
        <main id="main" class="site-main" role="main">




                              <?php



                                    while( have_posts() ): the_post();



                                    get_template_part( 'template-parts/content', 'page');

                                    //  echo girino_post_navigation();

                                      if ( comments_open()):
                                      comments_template();
                                    endif;

                                    endwhile;


                               ?>




      </main>

  </div>

<?php get_footer(); ?>

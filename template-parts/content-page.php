<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">

      <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

  </header>

  <?php the_content(); ?>

  </div><!-- .entry-content -->

</article>

<?php
/*
 *
 * The template file for home.
 *
 */

get_header(); ?>

<div id="home">
  <div class="contents_wrapper">
    <div class="contents clearfix">
      <ul class="article_list">
    <?php
    if ( have_posts() ) :

      if ( is_home() && ! is_front_page() ) : ?>
        <header>
          <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>

      <?php
      endif;

      /* Start the Loop */
      while ( have_posts() ) : the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'template-parts/content-top', get_post_format() );

      endwhile;

      // the_posts_navigation();

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif; ?>
      </ul><!-- article_list -->
    </div><!-- contents -->
  </div><!-- contents_wrapper -->
</div><!-- #home -->

<?php
get_footer();


<?php
/**
 * This file is for the category/country page, not for general category page.
 */
get_header(); ?>

<?php
  $queried_object = get_queried_object();
  $taxonomy = $queried_object->taxonomy;
  $term_id = $queried_object->term_id;
  $cat_image = get_field('cat_image', $taxonomy . '_' . $term_id);
  $size = 'full';
  $image = wp_get_attachment_image_src($cat_image, $size)[0];

  if( $image ) {
    echo '<div class="category-image"><img src="' . $image . '" alt="' . single_cat_title('', false) . '"></div>';
  }
?>




<header class="content_header">
    <div class="content_header_inner">
      <h1>
        <span>
          <a href="<?php echo get_permalink(); ?>"><?php single_cat_title(); ?></a>
        </span>
      </h1>
    </div>
    <figure style="background-image:url(http://tabippo.net/wp-content/uploads/shutterstock_313805903.jpg);">
      <img src="http://tabippo.net/wp-content/uploads/shutterstock_313805903.jpg" alt="<?php single_cat_title(); ?>">
    </figure>
  </header>

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

    the_posts_navigation();

  else :

    get_template_part( 'template-parts/content', 'none' );

  endif; ?>
    </ul><!-- article_list -->
  </div><!-- contents -->
</div><!-- contents_wrapper -->

<?php
get_footer();


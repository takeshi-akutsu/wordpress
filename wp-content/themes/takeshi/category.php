<?php
/**
 * This file is for the category/country page, not for general category page.
 */
get_header(); ?>


<!-- PHP: カテゴリー画像取得の処理 -->
<?php
  $queried_object = get_queried_object();
  $taxonomy = $queried_object->taxonomy;
  $term_id = $queried_object->term_id;
  $cat_image = get_field('category-image', $taxonomy . '_' . $term_id);
  $size = 'full';
  $image = wp_get_attachment_image_src($cat_image, $size)[0];
?>




<header class="content_header">
    <div class="content_header_inner">
      <h1>
        <?php single_cat_title(); ?>
      </h1>
    </div>
    <figure style="background-image:url(<?php echo $image ?>);">
      <img src="<?php echo $image ?>" alt="<?php single_cat_title(); ?>">
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
      get_template_part( 'template-parts/content-hover', get_post_format() );

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


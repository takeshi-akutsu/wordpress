<?php
/*
Template Name: Categories page
*/
  $args = array(
    'orderby' => 'name',
    'order' => 'ASC',
    'parent' => 0
  );
?>



<?php get_header(); ?>

<div id="categories">
  <header class="content_header">
    <div class="content_header_inner">
      <h1>
        カテゴリー一覧
      </h1>
    </div>
    <figure style="background-image:url(http://tabippo.net/wp-content/uploads/shutterstock_313805903.jpg);">
      <img src="http://tabippo.net/wp-content/uploads/shutterstock_313805903.jpg" alt="カテゴリー一覧">
    </figure>
  </header>

  <div class="contents_wrapper">
    <div class="contents clearfix">
      <?php $categories = get_categories($args); ?>
      <?php foreach ($categories as $category) { ?>
        <?php
          $category_image = get_field('category-image', 'category_' . $category->cat_ID);
          $image = wp_get_attachment_image_src($category_image, 'full')[0];
        ?>
        <div class="category_box" style="background-image: url(<?php echo $image ?>);">
          <a href="<?php echo get_category_link( $category->term_id ) ?>">
            <div class="title_box">
              <h2><?php echo $category->name ?></h2>
            </div>
          </a>
        </div><!-- category_box -->
      <?php } ?>
    </div><!-- contents -->
  </div><!-- contents_wrapper -->

</div>


<?php get_footer(); ?>












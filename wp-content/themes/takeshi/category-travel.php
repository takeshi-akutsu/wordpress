<?php
/**
 * This file is for the travel category page.
 */
?>


<!-- もろもろの処理 開始-->
<?php
  //$catに最上位カテゴリの情報を入れる
  $cat = get_category($cat);
  while ( $cat->parent > 0 )
  $cat = get_category( $cat->parent );
  //親カテゴリIDを取得
  $parentID = attribute_escape($cat->cat_ID);

  //子カテゴリIDを全て取得し、配列に入れる
  $catChildren = get_category_children($parentID);
  $catIDs = explode('/',$catChildren);
  array_shift($catIDs);
  sort ($catIDs);
?>
<!-- もろもろの処理 終了-->



<?php get_header(); ?>

<div id="travel">





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
      <ul class="country_list">
        <?php for($i=0; $i<count($catIDs); $i++) { $cats = get_category($catIDs[$i]); ?><!-- ループしてHTMLを作成 開始-->
          <li class="country_box">
            <a href="<?php echo get_category_link($catIDs[$i]); ?>">
              <div class="img_overlay"></div>
              <span class="img_box">
                <?php
                // カテゴリーのアイキャッチ画像を表示する&imgタグの状態で出力 TODO: URLで取得できるように
                $image = get_field('category-image', 'category_' . $catIDs[$i]);
                echo wp_get_attachment_image($image['id'], 'large');
                ?>
              </span><!-- img_box -->
              <div class="text_box">
                <div class="text_area">
                  <p><?php echo get_catname($catIDs[$i]); ?></p>
                </div>
              </div><!-- text_box -->
            </a>
          </li><!-- country_box -->
        <?php } ?><!-- ループしてHTMLを作成 終わり-->
      </ul><!-- country-list -->
    </div><!-- contents -->
  </div><!-- contents_wrapper -->

</div>

<?php get_footer(); ?>



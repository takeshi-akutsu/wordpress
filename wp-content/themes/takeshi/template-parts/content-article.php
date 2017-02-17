<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Takeshi
 */

?>

<!-- サムネイル画像を取得する -->
<?php
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id, true);
?>

<article>

  <header class="content_header">
    <div class="content_header_inner">
      <h1>
        <?php the_title(); ?>
      </h1>
      <ul class="meta_contents">
        <li>Posted on <?php the_date() ?></li>
        <!-- <li>Category : <a href="http://www.nxworld.net/category/wordpress/" class="cat-wordpress"></a></li> -->
        <!-- <?php the_category(); ?> -->
      </ul>
    </div>
    <?php if ( has_post_thumbnail() ) { ?>
      <figure style="background-image:url(<?php echo $image_url[0]; ?>);">
        <img src="<?php echo $image_url[0]; ?>" alt="<?php the_title(); ?>">
      </figure>
      <?php }else{ ?>
      <figure style="background-image:url(http://www.wallpaper-box.com/forest/images/forest13.jpg);">
        <img src="http://www.wallpaper-box.com/forest/images/forest13.jpg" alt="<?php the_title(); ?>">
      </figure>
      <?php }?>
  </header>

  <div class="contents_wrapper">
    <div class="contents">
      <div class="post_content">
        <?php the_content() ?>
      </div>

      <div class="comment_content">
        <!-- comments_template() -->
      </div>
      <div class="related_articles">
        
      </div>
    </div>
  </div>

</article>

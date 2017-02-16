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
        <span>
          <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
        </span>
      </h1>
      <ul>
        <li>Posted on <time datetime="2014-04-02">April 2th, 2014</time></li>
        <li>Category : <a href="http://www.nxworld.net/category/wordpress/" class="cat-wordpress">WordPress</a></li>
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
    </div>
  </div>

</article>

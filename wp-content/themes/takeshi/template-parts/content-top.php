

<?php
/**
 * Template part for displaying top page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Takeshi
 */

?>

<?php
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id, true);
?>

<li class="article_box">
  <a href="<?php echo get_permalink(); ?>">
    <div class="img_overlay"></div>
    <div class="img_box">
      <?php if ( has_post_thumbnail() ) { ?>
        <img src="<?php echo $image_url[0]; ?>" alt="画像">
      <?php }else{ ?>
        <img src="http://www.wallpaper-box.com/forest/images/forest13.jpg">
      <?php }?>
    </div><!-- img_box -->
    <div class="text_box">
      <div class="text_area">
        <p><?php the_title(); ?></p>
      </div>
    </div><!-- text_box -->
  </a>
</li><!-- article_box -->



<?php
/**
 *
 * Template part for displaying category content.
 *
 */

?>

<?php
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id, true);
?>

<?php if ( has_post_thumbnail() ) { ?>
<div class="category_box" style="background-image: url(<?php echo $image_url[0]; ?>);">
<?php }else{ ?>
<div class="category_box" style="background-image: url(http://www.wallpaper-box.com/forest/images/forest13.jpg);">
<?php }?>
  <a href="<?php echo get_permalink(); ?>">
    <div class="title_box">
      <h2>JAPAN</h2>
    </div>
  </a>
  <div class="category_box_overlay"></div>
</div>

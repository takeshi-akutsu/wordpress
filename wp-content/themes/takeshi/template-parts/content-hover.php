

<?php
/**
 *
 * Template part for displaying top page
 *
 */

?>

<?php
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id, true);
?>


<?php if ( has_post_thumbnail() ) { ?>
<div class="featured-story" style="background-image: url(<?php echo $image_url[0]; ?>);">
<?php }else{ ?>
<div class="featured-story" style="background-image: url(http://www.wallpaper-box.com/forest/images/forest13.jpg);">
<?php }?>
  <a class="featured-story-target" href="<?php echo get_permalink(); ?>">
    <div class="header-group">
      <!-- <h3 class="subheader">India</h3> -->
      <h2><?php the_title(); ?></h2>
      <div class="featured-story-summary">
        <?php the_excerpt() ?>
      </div>
    </div>
  </a>
  <div class="featured-story-summary-overlay"></div>
</div>

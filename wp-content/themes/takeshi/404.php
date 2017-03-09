<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Takeshi
 */

get_header(); ?>


<div id="error404">
  <div class="inner_center">
    <div class="eye-catch-section">
      <div class="temp404">
        <p>404 ERROR</p>
      </div>
    </div>
    <div class="message-section">
      <h1>このページはまだ準備中です</h1>
      <a href="<?php echo home_url(); ?>">トップページへ</a>
    </div>
  </div>
</div>

<?php
get_footer();

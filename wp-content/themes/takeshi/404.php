<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Takeshi
 */

get_header(); ?>


<header class="page-header">
	<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'takeshi' ); ?></h1>
</header>

<?php
get_footer();

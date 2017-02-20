<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Takeshi
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<?php wp_head(); ?>
</head>

<body class="js-body" <?php body_class(); ?>>
<div id="page" class="site">










<!-- ==========================================HEADER========================================== -->


<header id="main_header">
  <div class="header_container clearfix">
    <div class="sns_icons"></div>
    <a href="/wordpress/" class="header_logo">
      <h1 class="header_title">On the road</h1>
      <!-- <img src="https://d2hi3epuv5qhwt.cloudfront.net/assets/renewal/logo-2256c44c102d2e23c5303d219bf09b85.svg" alt=""> -->
    </a>
    <a id="js-click-menu" class="menu-trigger hamburger" href="#">
      <span></span>
      <span></span>
      <span></span>
    </a>
  </div>
</header>

<div class="menu_wrapper" id="js-menu">
<div class="menu_inner">
  <ul class="menu_list">
    <li><a href="/wordpress/">HOME</a></li>
    <li><a href="/wordpress/about">ABOUT</a></li>
    <li><a href="/wordpress/category/travel">BLOG</a></li>
    <li><a href="/wordpress/category/travel">CATEGORIES</a></li>
    <li><a href="/wordpress/contact">CONTACT</a></li>
  </ul>
</div>
</div>


<!-- ==========================================HEADER========================================== -->







<div id="content" class="site-content">

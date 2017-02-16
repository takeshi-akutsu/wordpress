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

<body <?php body_class(); ?>>
<div id="page" class="site">










<!-- ==========================================HEADER========================================== -->


<header>
  <div class="header_container">
    <div class="main_header">
      <h2>
        <a href="/wordpress/">
          <img src="https://d2hi3epuv5qhwt.cloudfront.net/assets/renewal/logo-2256c44c102d2e23c5303d219bf09b85.svg" alt="">
        </a>
      </h2>
      <a id="js-click-menu" class="menu-trigger" href="#">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>
  </div>
</header>

<div class="menu_wrapper" id="js-menu">
  <!-- <ul class="menu unstyled">
  <li class="menu-search">
  <form accept-charset="UTF-8" action="/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"></div>
  <input class="search-input js-search" type="text" placeholder="Search" name="q">
  </form> </li>
  <li><a href="/about">About</a></li>
  <li><a href="/archive">Archive</a></li>
  <li><a href="http://junglesinparis.tumblr.com/">Blog</a></li>
  <li><a href="/contact">Contact</a></li>
  <li><a href="#" class="js-modal-opener" data-target="#newsletter-modal">Follow</a></li>
  </ul> -->
</div>


<!-- ==========================================HEADER========================================== -->







<div id="content" class="site-content">

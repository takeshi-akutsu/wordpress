<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
  <meta name="description" content="自分用のオリジナルテーマ">
  <meta name="keywords" content="WordPress 無料 テーマ, WordPress テーマ, WordPress 3.0 テーマ, WordPress テンプレート, WordPress 無料テンプレート">
  <!-- External files -->
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <!-- Favicon, Thumbnail image -->
  <link rel="shortcut icon" href="images/favicon.ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Header -->
<div id="header">
  <h1>This is header</h1>
</div><!-- /#header -->

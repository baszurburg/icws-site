<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		header.inc.php
* @Package:		GetSimple
* @Action:		Material theme for GetSimple CMS
*
*****************************************************/
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" > <!--<![endif]-->
<head>
<meta charset="utf-8">

  <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="<?php get_theme_url(); ?>/assets/css/site.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">
  <link href="<?php get_theme_url(); ?>/assets/css/bootstrap-grid.css" rel="stylesheet">

  <script src="/bower_components/webcomponentsjs/webcomponents.js"></script>


	<?php get_header(); ?>

  <link rel="import" href="/bower_components/polymer/polymer.html">

  <link rel="import" href="/bower_components/iron-iconset-svg/iron-iconset-svg.html">

  <link rel="import" href="/bower_components/paper-icon-button/paper-icon-button.html">
  <link rel="import" href="/bower_components/paper-checkbox/paper-checkbox.html">

  <link rel="import" href="/bower_components/app-layout/app-drawer-layout/app-drawer-layout.html">
  <link rel="import" href="/bower_components/app-layout/app-drawer/app-drawer.html">
  <link rel="import" href="/bower_components/app-layout/app-header-layout/app-header-layout.html">
  <link rel="import" href="/bower_components/app-layout/app-header/app-header.html">
  <link rel="import" href="/bower_components/app-layout/app-scroll-effects/app-scroll-effects.html">
  <link rel="import" href="/bower_components/app-layout/app-toolbar/app-toolbar.html">

  <link rel="import" href="/bower_components/paper-card/paper-card.html">
  <link rel="import" href="/bower_components/paper-button/paper-button.html">
  <link rel="import" href="/bower_components/paper-icon-button/paper-icon-button.html">

</head>

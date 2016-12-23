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

	<link href="<?php get_theme_url(); ?>/style-m.min.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">

  <script src="/bower_components/webcomponentsjs/webcomponents.js"></script>

	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/assets/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

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
  <link rel="import" href="/bower_components/paper-button/paper-button.html">

    <style>
    app-drawer section {
      height: 100%;
      overflow-y: auto;
      -webkit-overflow-scrolling: touch;
    }
    app-drawer h2 {
      margin: 8px 0 0;
      padding: 18px;
      font-size: 18px;
    }
    app-drawer paper-checkbox {
      display: block;
      padding: 18px;
    }
    app-header {
      color: #fff;
      background-color: #C62828;
      --app-header-background-front-layer: {
        background-image: url(//app-layout-assets.appspot.com/assets/test-drive.jpg);
        background-position: 50% 10%;
      };
    }
    [main-title] {
      font-size: 2em;
    }
    </style>

</head>
<body id="<?php get_page_slug(); ?>" >


    <app-drawer-layout>

      <app-drawer swipe-open>
        <section>
          <h2>app-header Properties</h2>
          <paper-checkbox checked="{{condenses}}">
            condenses
          </paper-checkbox>
          <paper-checkbox checked="{{fixed}}">
            fixed
          </paper-checkbox>
          <paper-checkbox checked="{{reveals}}">
            reveals
          </paper-checkbox>
          <paper-checkbox checked="{{shadow}}">
            shadow
          </paper-checkbox>

          <h2>app-header Effects</h2>
          <paper-checkbox checked="{{blendBackground}}">
            blend-background
          </paper-checkbox>
          <paper-checkbox checked="{{fadeBackground}}">
            fade-background
          </paper-checkbox>
          <paper-checkbox checked="{{parallaxBackground}}">
            parallax-background
          </paper-checkbox>
          <paper-checkbox checked="{{resizeSnappedTitle}}">
            resize-snapped-title
          </paper-checkbox>
          <paper-checkbox checked="{{resizeTitle}}">
            resize-title
          </paper-checkbox>
          <paper-checkbox checked="{{waterfall}}">
            waterfall
          </paper-checkbox>
        </section>
      </app-drawer>

      <app-header-layout>

        <app-header
            condenses="true"
            fixed="true"
            shadow="true"
            effects="blend-background parallax-background resize-title">

          <app-toolbar>
            <paper-icon-button icon="app:menu" drawer-toggle></paper-icon-button>
            <div condensed-title>Test Drive app-header</div>
          </app-toolbar>

          <app-toolbar></app-toolbar>

          <app-toolbar>
            <div main-title spacer>Test Drive</div>
          </app-toolbar>

        </app-header>

        <div size="100">
          My content

        <ul class="">
          <?php get_navigation(get_page_slug(FALSE)); ?>
        </ul>


        <ul>

          <li>
              &nbsp;
          </li>

          <li>
              <img src="<?php get_theme_url(); ?>/images/icws-logo-300.png">
          </li>
          <li><div class="divider"></div></li>

          <?php get_navigation(get_page_slug(FALSE)); ?>

          <li><div class="divider"></div></li>
          <!-- include the sidebar template -->

          <!-- do somethings conditional in php -->

          <?php
          if (get_page_slug(false) == 'about') {

          ?>
                <li>
                    <div class="userView">
                    <img class="background" src="<?php get_theme_url(); ?>/images/bas-bryce-300.jpg">
                    <!--
                      <a href="#!user"><img class="circle" src="<?php get_theme_url(); ?>/images/yuna.jpg"></a>
                    -->
                    <br />
                    <a href="#!name"><span class="white-text name">Bas Zurburg</span></a>
                    <a href="mailto:bas.zurburg@gmail.com"><span class="white-text email">bas.zurburg@gmail.com</span></a>
                    </div>
              </li>

          <?php
          }
          ?>

 	  </ul>

             <!-- title and content -->
		  <h1 style="margin-top: 0;"><?php get_page_title(); ?></h1>
        <?php get_page_content(); ?>


        </div>

      </app-header-layout>

    </app-drawer-layout>


<header>
</header>

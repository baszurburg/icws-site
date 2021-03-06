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

	<link href="<?php get_theme_url(); ?>/style-m.min.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if lt IE 7 ]>
    <script src="<?php get_theme_url(); ?>/assets/js/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

	<?php get_header(); ?>

</head>
<body id="<?php get_page_slug(); ?>" >

<header>

  <nav>
    <div class="nav-wrapper">
      <div class="container">
        <a href="#" class="brand-logo"><?php get_site_name(); ?></a>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down">
          <?php get_navigation(get_page_slug(FALSE)); ?>
        </ul>

      </div>

      <ul id="slide-out" class="side-nav fixed">

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
    </div>
  </nav>
</header>

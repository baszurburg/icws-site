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

    <script src="//cdn.muicss.com/mui-latest/js/mui.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="<?php get_theme_url(); ?>/assets/js/script.js"></script>

	<link href='//fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href="<?php get_theme_url(); ?>/assets/css/reset.css" rel="stylesheet">
		<link href="<?php get_theme_url(); ?>/assets/css/mui.css" rel="stylesheet">
	<link href="<?php get_theme_url(); ?>/style.css?v=<?php echo get_site_version(); ?>" rel="stylesheet">
	
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

	 <div id="sidedrawer" class="mui--no-user-select">

          <div id="sidedrawer-brand" class="mui--appbar-line-height">
              <a href="<?php get_site_url(); ?>" id="logo" ><?php get_site_name(); ?></a>
          </div>

          <div class="mui-divider"></div>

        <ul>
            <?php get_navigation(get_page_slug(FALSE)); ?>
        </ul>

     </div>



	<!-- site header -->

	    <header id="header">
          <div class="mui-appbar mui--appbar-line-height">
            <div class="mui-container-fluid">
              <a class="sidedrawer-toggle mui--visible-xs-inline-block mui--visible-sm-inline-block js-show-sidedrawer">☰</a>
              <a class="sidedrawer-toggle mui--hidden-xs mui--hidden-sm js-hide-sidedrawer">☰</a>
              <span class="mui--text-title mui--visible-xs-inline-block mui--visible-sm-inline-block"><?php get_site_name(); ?></span>
            </div>
          </div>
        </header>



		<div class="header">
			<div class="wrapper">
				
				<!-- logo/sitename -->
				<a href="<?php get_site_url(); ?>" id="logo" ><?php get_site_name(); ?></a>
				
				<!-- main navigation -->
				<nav id="main-nav">

				</nav>
			</div>
		</div>
		

		

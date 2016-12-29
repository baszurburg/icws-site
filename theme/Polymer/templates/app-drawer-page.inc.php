<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
?>
<link rel="import" href="/bower_components/polymer/polymer.html">

<iron-iconset-svg name="app" size="24">
	<svg><defs>
		<g id="menu"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></g>
	</defs></svg>
</iron-iconset-svg>

<custom-style>
  <style is="custom-style">

      app-drawer {
        box-shadow: 2px 0px 5px 0px rgba(0, 0, 0, 0.4);
      }

      app-drawer section {
        height: 100%;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        background-image: linear-gradient(135deg, rgb(0, 0, 0) 0px, #aa2828)
      }
      app-drawer h2 {
        margin: 8px 0 0;
        padding: 18px;
        font-size: 18px;
      }

      app-drawer .logo {
        margin-top: 0;
        padding: 24px 0 16px 0;
        background-color: #fff;
      }

      app-header {
        color: #fff;
        background-color: #aa2828;
        --app-header-background-front-layer: {
          background-image: url(/theme/Polymer/images/grand-canyon.jpg);
          background-position: 50% 5%;
        };
      }

      ul.sidenav {
        margin-top: 2px;
      }

      ul.sidenav li {
        border-bottom: 1px solid #666;
      }

      ul.sidenav li a {
        display: block;
        color: #ccc;
        padding: 0 12px;
        line-height: 2.5em;
      }

      ul.sidenav li a:hover,
      ul.sidenav li a:focus {
        background-color: teal;
      }

      ul.sidenav li.active a {
        background-color: teal;
        font-weight: 400;
        color: #fff;
      }

      article.content {
        padding: 0 16px 16px;
      }

      .breadcrumbs {
        margin-top: 8px;
      }

      [main-title] {
        font-size: 2em;
      }


  </style>  
</custom-style>

<app-drawer-layout>

  <app-drawer swipe-open>
    <section>
      <div class="logo">
        <img src="<?php get_theme_url(); ?>/images/icws-logo-300.png">
      </div>

      <ul class="sidenav">
        <?php get_navigation(get_page_slug(FALSE)); ?>
      </ul>

        <!-- do somethings conditional in php -->

      <?php
      if (get_page_slug(false) == 'about') {

      ?>

        <style>
          .userView {
            margin: -8px 8px 8px;
          }
          .userView img {
            border-radius: 2px;
          }

        </style>

        <div class="userView">
          <img class="responsive-img" src="<?php get_theme_url(); ?>/images/bas-bryce-300.jpg">
        </div>

      <?php
      }
      ?>


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
        <div condensed-title><?php get_site_name(); ?> - <?php get_page_title(); ?></div>
      </app-toolbar>

      <app-toolbar></app-toolbar>

      <app-toolbar>
        <div main-title><?php get_page_title(); ?></div>
      </app-toolbar>

    </app-header>

    <!-- Content -->
    <article class="content">

      <?php
        if (get_page_slug(false) != 'home') {

      ?>
        <div class="breadcrumbs right-align" >
          <span class="wrapper">
            <a href="<?php get_site_url(); ?>">Home</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp; <?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b><?php get_page_clean_title(); ?></b>
          </span>
        </div>

      <?php
      }
      ?>

      <section>
        <!-- content -->
        <?php get_page_content(); ?>

        <!-- page footer -->
        <div class="footer">
          <p>Published on <time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate><?php get_page_date('F jS, Y'); ?></time></p>
        </div>
      </section>

    </article>

    <!-- include the footer template -->
    <?php include('footer.inc.php'); ?>

  </app-header-layout>

</app-drawer-layout>

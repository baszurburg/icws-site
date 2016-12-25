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
        box-shadow: 0px 5px 6px rgba(0, 0, 0, 0.4);
      }

      app-drawer section {
        height: 100%;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        background-image: linear-gradient(135deg, rgb(0, 0, 0) 0px, #ba1119)
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
        background-color: #C62828;
        --app-header-background-front-layer: {
          background-image: url(/theme/Polymer/images/grand-canyon.jpg);
          background-position: 50% 10%;
        };
      }


      article.content {
        padding: 0 16px;
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
      <ul class="logo">
        <li>
            <img src="<?php get_theme_url(); ?>/images/icws-logo-300.png">
        </li>

      </ul>


      <ul>
        <?php get_navigation(get_page_slug(FALSE)); ?>
      </ul>

      <ul>
        <li><div class="divider"></div></li>


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

  </app-header-layout>

</app-drawer-layout>

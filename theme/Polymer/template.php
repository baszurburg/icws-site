<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Material theme for GetSimple CMS
*
*****************************************************/


# Get this theme's settings based on what was entered within its plugin.
# This function is in functions.php
$innov_settings = Innovation_Settings();

# Include the header template
include('templates/header.inc.php');
?>

<body unresolved id="<?php get_page_slug(); ?>" >

<?php include('templates/app-drawer-page.inc.php'); ?>

        <!-- page footer -->
        <div class="footer">
          <p>Published on <time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate><?php get_page_date('F jS, Y'); ?></time></p>
          <paper-button>link</paper-button>
          <paper-button raised>raised</paper-button>
          <paper-button toggles raised>toggles</paper-button>
          <paper-button disabled>disabled</paper-button>
        </div>
      </section>


<!-- include the footer template -->
<?php include('templates/footer.inc.php'); ?>

<script src="<?php get_theme_url(); ?>/assets/js/site.js"></script>

</body>
</html>
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
include('header.inc.php');
?>

<main>

    <article>
      <section>

        <!-- title and content -->

        <?php get_page_content(); ?>



        <!-- page footer -->
        <div class="footer">
          <p>Published on <time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate><?php get_page_date('F jS, Y'); ?></time></p>
        </div>
      </section>

    </article>

</main>



<!-- include the footer template -->
<?php include('footer.inc.php'); ?>

<script src="<?php get_theme_url(); ?>/assets/js/site.js"></script>

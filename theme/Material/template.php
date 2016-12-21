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


    <div id="content-wrapper">
      <div class="mui--appbar-height"></div>
      <div class="mui-container-fluid">
		<!-- breadcrumbs: only show when NOT on homepage -->

		<p class="breadcrumbs" >
			<span class="wrapper">
				<a href="<?php get_site_url(); ?>">Home</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp; <?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b><?php get_page_clean_title(); ?></b>
			</span>
		</p>

		<article>
			<section>

				<!-- title and content -->
				<h1><?php get_page_title(); ?></h1>
				<?php get_page_content(); ?>

				<!-- page footer -->
				<div class="footer">
					<p>Published on <time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate><?php get_page_date('F jS, Y'); ?></time></p>
				</div>
			</section>

		</article>

      </div>
    </div>


<!-- include the footer template -->
<?php include('footer.inc.php'); ?>
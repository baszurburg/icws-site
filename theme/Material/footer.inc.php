<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } 
/****************************************************
*
* @File: 		footer.inc.php
* @Package:		GetSimple
* @Action:		Material theme for GetSimple CMS
*
*****************************************************/
?>

	<!-- site footer -->

	    <footer id="footer">
          <div class="mui-container-fluid">
		<?php get_footer(); ?>

	 	<div class="wrapper">
			<div class="left"><?php echo date('Y'); ?> <a href="<?php get_site_url(); ?>" ><?php get_site_name(); ?></a></div>
		</div>
          </div>
        </footer>

	 
</body>
</html>
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

<?php include('templates/body-bottom.inc.php'); ?>

</body>
</html>
<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 
include(ABSPATH . 'wp-content/themes/lar/page-templates/new_popup.php');	
include(ABSPATH . 'wp-content/themes/lar/page-templates/loading.php');	
include(ABSPATH . 'wp-content/themes/lar/page-templates/menu.php');	
include(ABSPATH . 'wp-content/themes/lar/page-templates/home.php');	
include(ABSPATH . 'wp-content/themes/lar/page-templates/what_we_do.php');
 
include(ABSPATH . 'wp-content/themes/lar/page-templates/our_services.php');
include(ABSPATH . 'wp-content/themes/lar/page-templates/our_proccess.php');
include(ABSPATH . 'wp-content/themes/lar/page-templates/ourwork.php');
include(ABSPATH . 'wp-content/themes/lar/page-templates/sustainability.php');
// include(ABSPATH . 'wp-content/themes/lar/page-templates/partners.php');
include(ABSPATH . 'wp-content/themes/lar/page-templates/contact.php'); 
include(ABSPATH . 'wp-content/themes/lar/page-templates/footer.php');

get_footer(); ?>
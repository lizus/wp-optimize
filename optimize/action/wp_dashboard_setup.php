<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }

add_action( 'wp_dashboard_setup', function (){
  //remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );   // Right Now
  remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' ); // Recent Comments
  remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );  // Incoming Links
  remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );   // Plugins
  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );  // Quick Press
  remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );  // Recent Drafts
  remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );   // WordPress blog
  remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );   // Other WordPress News
  remove_meta_box( 'dashboard_php_nag', 'dashboard', 'normal' );//隐藏php更新提醒
  // use 'dashboard-network' as the second parameter to remove widgets from a network dashboard.
});

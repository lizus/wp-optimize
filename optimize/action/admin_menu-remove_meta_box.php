<?php
add_action( 'admin_menu' , function (){
	remove_meta_box( 'postcustom' , 'post' , 'normal' );
  //remove_meta_box( 'postexcerpt', 'post', 'normal' );
  remove_meta_box( 'trackbacksdiv', 'post', 'normal' );
  remove_meta_box( 'commentstatusdiv', 'post', 'normal' );
  remove_meta_box( 'commentsdiv', 'post', 'normal' );
  remove_meta_box( 'revisionsdiv', 'post', 'normal' );
  //remove_meta_box( 'authordiv', 'post', 'normal' );
  remove_meta_box( 'sqpt-meta-tags', 'post', 'normal' );

  //remove_menu_page( 'upload.php' );                 //Media
	//remove_menu_page( 'plugins.php' );                //Plugins
	remove_menu_page( 'tools.php' );                  //Tools
  remove_submenu_page( 'themes.php', 'widgets.php' );

	//We need this because the submenu's link (key from the array too) will always be generated with the current SERVER_URI in mind.
	$customizer_url = add_query_arg( 'return', urlencode( remove_query_arg( wp_removable_query_args(), wp_unslash( $_SERVER['REQUEST_URI'] ) ) ), 'customize.php' );
	remove_submenu_page( 'themes.php', $customizer_url );

  remove_submenu_page( 'themes.php', 'theme-editor.php' );
  remove_submenu_page( 'options-general.php', 'options-writing.php' );
  remove_submenu_page( 'options-general.php', 'options-privacy.php' );
} ,999);

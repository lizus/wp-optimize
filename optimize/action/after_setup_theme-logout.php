<?php
/**
 * 在页面的url中添加?logout=true即可退出登录
 */
add_action( "after_setup_theme", function (){
  if (isset($_GET['logout']) && $_GET['logout']=='true') {
    $redirect=isset($_GET['redirect_to']) ? $_GET['redirect_to'] : get_bloginfo('url');
    wp_logout();
    wp_redirect(urldecode($redirect));
    die();
  }
} );

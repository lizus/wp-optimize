<?php
add_action('admin_bar_menu', function ($wp_toolbar){
  $wp_toolbar->remove_node('wp-logo'); //去掉Wordpress LOGO
  //$wp_toolbar->remove_node('site-name'); //去掉网站名称
  $wp_toolbar->remove_node('updates'); //去掉更新提醒
  $wp_toolbar->remove_node('comments'); //去掉评论提醒
  //$wp_toolbar->remove_node('new-content'); //去掉新建文件
  //$wp_toolbar->remove_node('top-secondary'); //用户信息

  /*
  //添加后台顶部菜单示例
  $args = array(
    //'parent' => 'site-name',
    'id'     => 'media-libray',
    'title'  => 'Media Library',
    'href'   => esc_url( admin_url( 'upload.php' ) ),
    'meta'   => false
  );
  $wp_toolbar->add_node( $args );
  */
}, 999);

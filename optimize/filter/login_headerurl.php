<?php

//登录页的WordPress链接指向到网站首页
add_filter('login_headerurl',function ($url){
  return get_bloginfo( 'url' );
});

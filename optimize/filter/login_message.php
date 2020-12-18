<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }

//登录页的说明内容
add_filter('login_message',function ($msg){
	return '<style type="text/css">.login h1 a{
		display:none;
	}</style><h2 style="text-align:center;max-width:320px;padding:10px;"><a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a></h2>';
});

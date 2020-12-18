<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
add_action( 'init',function (){
	//添加主题支持
	if (function_exists('add_theme_support') ) add_theme_support('post-thumbnails');
	
	if (function_exists('add_editor_style') ) add_editor_style();
	
	add_filter( 'max_srcset_image_width', '__return_false');//禁用图片响应式功能
	//wp-json
	add_filter('rest_enabled', '_return_false');
	add_filter('rest_jsonp_enabled', '_return_false');
	
	/**
	* Filter function used to remove the tinymce emoji plugin.
	*/
	add_filter( 'tiny_mce_plugins', function ($plugins){
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, ['wpemoji'] );
		} else {
			return [];
		}
	});
	
	//不显示顶部的管理条
	add_filter( 'show_admin_bar','__return_false');

	//remove_all_actions('widgets_init');
	//remove_all_actions('wp_register_sidebar_widget');
	
	//stop schedule_event
	add_filter('schedule_event','__return_false');
	
	add_filter('use_block_editor_for_post', '__return_false'); // 切换回之前的编辑器
	
	add_filter( 'max_srcset_image_width', '__return_false');//禁用图片响应式功能
	add_filter('rest_enabled', '_return_false');
	add_filter('rest_jsonp_enabled', '_return_false');
	
},999);


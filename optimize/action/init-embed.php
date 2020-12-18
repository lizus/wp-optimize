<?php
/* ---=*--*=*-=*-=-*-=* ^.^ *---=*--*=*-=*-=-*-=*
wordpress 4.4的embeds功能可以允许更方便的引用第三方资源,但通常用不到,由于国内环境以及国外线路的问题一些网站可能无法正常加载或者加载速度慢，这也就使得我们无法很好地使用这个功能了。所以这里给禁掉,想开启的,删掉这个文件就好
---=*--*=*-=*-=-*-=* ^.^ *---=*--*=*-=*-=-*-=* */
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
add_action( 'init', function (){

    /* @var WP $wp */
    global $wp;

    // Remove the embed query var.
    $wp->public_query_vars = array_diff( $wp->public_query_vars, ['embed'] );

    // Turn off
    add_filter( 'embed_oembed_discover', '__return_false' );

    /**
    * Removes the 'wpembed' TinyMCE plugin.
    *
    * @since 1.0.0
    *
    * @param array $plugins List of TinyMCE plugins.
    * @return array The modified list.
    */
    add_filter( 'tiny_mce_plugins', function ($plugins){
      return array_diff( $plugins, ['wpembed'] );
    });
    
}, 9999 );

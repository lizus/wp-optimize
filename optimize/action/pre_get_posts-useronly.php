<?php
//后台权限在编辑以下的用户只能看到自己的文章和上传的文件
add_action('pre_get_posts',function ($query){
    if (is_admin()) {
        if ( !current_user_can( 'manage_options' ) && !current_user_can('edit_others_posts') ) {
            $user=wp_get_current_user();
            $query->set('author', $user->ID );
        }
    }
});
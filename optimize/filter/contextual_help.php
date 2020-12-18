<?php

//去掉后台的帮助
add_filter( 'contextual_help', function ($old_help, $screen_id, $screen){
    $screen->remove_help_tabs();
    return $old_help;
}, 999, 3 );

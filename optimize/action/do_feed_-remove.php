<?php

/*
//将feed重定向
foreach( array('rdf', 'rss', 'rss2', 'atom' ) as $feed ) {
    add_action( 'do_feed_' . $feed, function (){
        wp_redirect( home_url(), 302 );
        exit();
    }, 1 );
}
unset( $feed );
*/
<?php
//移除所有的widget
remove_action('init','wp_widgets_init',1);

remove_action( 'publish_future_post', 'check_and_publish_future_post', 10 );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

// Remove the REST API endpoint.
remove_action( 'rest_api_init', 'wp_oembed_register_route' );

// Don't filter oEmbed results.
remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );


remove_action( 'init', 'wp_cron' );

// Cron tasks
remove_action( 'wp_scheduled_delete', 'wp_scheduled_delete' );
remove_action( 'wp_scheduled_auto_draft_delete', 'wp_delete_auto_drafts' );
remove_action( 'importer_scheduled_cleanup', 'wp_delete_attachment' );
remove_action( 'upgrader_scheduled_cleanup', 'wp_delete_attachment' );
remove_action( 'delete_expired_transients', 'delete_expired_transients' );

remove_action( 'init', 'wp_schedule_update_checks' );

//评论邮件通知，会导致评论变慢
remove_action( 'comment_post', 'wp_new_comment_notify_moderator' );
remove_action( 'comment_post', 'wp_new_comment_notify_postauthor' );
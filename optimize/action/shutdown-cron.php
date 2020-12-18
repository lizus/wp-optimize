<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
/**
 * 模拟定时发布，原理为在option表中插入一个时间，然后查询posts表，找出post_status为future并且发布时间已过的文章，发表出来，
 * 然后等CONTINUE_INTERVAL_DELAY分钟之后，再循环执行
*/
//间隔时间设置，秒
if (!defined('CONTINUE_INTERVAL_DELAY')) define('CONTINUE_INTERVAL_DELAY',3600); 

//数据库option表存储上次更新时间的key
if (!defined('CONTINUE_INTERVAL_OPTION')) define('CONTINUE_INTERVAL_OPTION','continue_interval_time'); 

add_action( 'shutdown',function (){

  $last = get_option(CONTINUE_INTERVAL_OPTION, false);
	if(($last === false) || ($last < (time() - CONTINUE_INTERVAL_DELAY))) {
		global $wpdb;
		update_option(CONTINUE_INTERVAL_OPTION, time(),false);
    $args=array(
      'posts_per_page'=>20,
      'post_type'=>'any',
      'post_status'=>'future',
      'orderby'=>'date',
      'order'=>'ASC',
      'date_query'=>array(
        array(
            'column' => 'post_date',
            'before' => 'now',
        ),
      ),
    );
    $pq=new WP_Query($args);
    if ($pq->have_posts()){
      while ($pq->have_posts()){
        $pq->the_post();
				wp_publish_post(get_the_ID());
      }
    }
    wp_reset_postdata();
	}
},1);
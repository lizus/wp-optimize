<?php
//百度资源平台链接主动提交，参考： https://ziyuan.baidu.com/linksubmit/index
add_action( "save_post", function ($pid,$post){
  if (defined('BAIDU_PUSH_API') && !empty(BAIDU_PUSH_API)) {
    if($post->post_status != 'publish') return;
    $urls=[get_permalink($pid)];
    $ch = curl_init();
    $options =  array(
      CURLOPT_URL => BAIDU_PUSH_API,
      CURLOPT_POST => true,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_POSTFIELDS => implode("\n", $urls),
      CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
    );
    curl_setopt_array($ch, $options);
    $result = curl_exec($ch);
  }
},10,2);

//在页面底部添加自动推送百度索引的代码
add_action('wp_footer',function (){
  if (defined('BAIDU_PUSH_API') && !empty(BAIDU_PUSH_API)) {
  ?>
  <script>
  (function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https'){
      bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else{
      bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
  })();
  </script>
  <?php
  }
},99);

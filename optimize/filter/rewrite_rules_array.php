<?php
/*
rewrite规则过滤，在执行flush_rewrite_fules();时会生效
*/
add_filter( 'rewrite_rules_array', function ($rules){
  foreach ($rules as $rule => $rewrite) {
    //if ( false !== strpos( $rewrite, 'feed=' ) ) unset( $rules[ $rule ] );
    if ( false !== strpos( $rewrite, 'attachment=' ) ) unset( $rules[ $rule ] );
    if ( false !== strpos( $rewrite, 'post_format=' ) ) unset( $rules[ $rule ] );
    if ( false !== strpos( $rewrite, 'comment=' ) ) unset( $rules[ $rule ] );
    if ( false !== strpos( $rewrite, 'trackback=' ) ) unset( $rules[ $rule ] );
    if ( false !== strpos( $rewrite, 'embed=true' ) ) unset( $rules[ $rule ] );//清除所有ebed相关的地址
    if ( false !== strpos( $rewrite, 'tb=1' ) ) unset( $rules[ $rule ] );//清除所有trackback地址
  }
  return $rules;
});

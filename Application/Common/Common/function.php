<?php
/*
 *公用函数库
 */
  function show($status,$message,$data = array()){
       $result = array(
          'status' => $status,
          'message' => $message,
          'data' => $data,
       );
     exit(json_encode($result)); 
  }
  function getMd5Password($password) {
      return md5($password . C('MD5_PRE'));
  }
  function getMenuType($type){
      return $type == 1 ? '后台栏目' : '前台导航' ;
  }
  function Status($status){
      if($status == 0){
            $str = '关闭';
      }elseif($status == 1){
            $str = '开启';
      }elseif($status == -1){
           $str = '删除';
      }
      return $str;
  }
?>
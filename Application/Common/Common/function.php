<?php
/*
 *公用函数库
 */



//show方法返回值为JSON数据
  function show($status,$message,$data = array()){
       $result = array(
          'status' => $status,
          'message' => $message,
          'data' => $data,
       );
     exit(json_encode($result)); 
  }

//MD5+随机数加密 密码
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

  //获取栏目路径
  function getAdminMenusUrl($nav){
    $url = '/admin.php?c='.$nav['c'].'&a='.$nav['a'];
    if($nav['f'] == 'index'){
      $url = 'admin.php?c='.$nav['c'];
    }
    return $url;
  }


  //优化导航高亮
  function getActive($nav){
      $c = strtolower(CONTROLLER_NAME);
      if(strtolower($nav) == $c){
        return 'class="active"';
      }
        return '';
  }


  function showKind($status,$data){
    header('Content-type:application/json;charset=UTF-8');
       if($status == 0){
            exit(json_encode(array('error'=>0,'url'=>$data)));
       }
            exit(json_encode(array('error'=>1,'message'=>'上传失败')));
  }


  function getLoginUserName(){
       return $_SESSION['adminUser']['userName'] ? $_SESSION['adminUser']['userName'] : '';
  }
?>
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
?>
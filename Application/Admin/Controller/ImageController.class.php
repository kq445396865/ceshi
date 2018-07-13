<?php 
/*
图片相关
 */
namespace Admin\Controller;
use Think\Controller;




/*
文章内容管理
 */


class ImageController extends CommonController{

    private $_uploadObj;

    public function __construct(){

    } 

//缩略图上传
    public function ajaxuploadimage(){

          $res = D("UploadImage")->imageUpload();
          if($res===false) {
              return show(0,'上传失败','');
          }else{
              return show(1,'上传成功',$res);
          }


    }

//编辑器图片上传
    public function kindupload(){

        $res = D("UploadImage")->imageUpload();

        if($res == false){
            return showKind(1,'上传失败');
        }
            return showKind(0,$res);

    }



}










 ?>
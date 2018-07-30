<?php 
namespace Common\Model;
use Think\Model;





/**
 * 上传图片类
 * @author 康琦
 */


class UploadImageModel extends Model{

	private $_uploadObj = '';
	private $_uploadImageDate = '';

    const UPLOAD ='Upload';

    public function __construct(){
    	$this->_uploadObj = new \Think\Upload();
    	$this->_uploadObj->rootPath = './'.self::UPLOAD.'/';
    	$this->_uploadObj->subName = date(Y) . '/' . date(m) . '/' . date(d);
    }


    public function imageUpload(){
    	$res = $this->_uploadObj->upload();

    	if($res){
            if(array_key_exists("file", $res)){

                 return '/' . self::UPLOAD . '/' . $res['file']['savepath'] . $res['file']['savename'];

            }else if(array_key_exists("imgFile", $res)){

                return '/' .self::UPLOAD . '/' . $res['imgFile']['savepath'] . $res['imgFile']['savename'];
            }
              
    	}else{

    		  return false;
              
    	}

    	      
    }
}




 ?>
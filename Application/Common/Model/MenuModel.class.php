<?php 
namespace Common\Model;
use Think\Model;





/**
 * 
 */
class MenuModel extends Model
{
	  private $_db = '';
    public function __construct() {
    	$this->_db = M("menu");
    }
    //新增数组
    public function insert($data = array()){
       //判断数组是否存在
       if(!$data || !is_array($data)){
           return 0;
       }
       return $this->_db->add($data);
    }


    public function getMenus($data,$page,$pageSize=10){
       $data['status'] = array('neq',-1);
       $offset = ($page - 1) * $pageSize;
       $list = $this->_db->where($data)->order('menu_id desc')->limit($offset,$pageSize)->select();
       return $list;
    }


    public function getMenusCount($data = array()){
      $data['status'] = array('neq',-1);
      return $this->_db->where($data)->count();
    }


}
 ?>
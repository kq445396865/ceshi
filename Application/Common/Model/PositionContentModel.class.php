<?php 
namespace Common\Model;
use Think\Model;





class PositionContentModel extends Model{
	
	private $_db = '';

	public function __construct(){

         $this->_db = M('position_content');

	}


    public function select($data=array()){
         if($data['title']){

               $data['title'] = array('like','%'.$data['title'].'%');
         }

         return $this->_db->where($data)->order('id desc')->select();

    }


	public function insert($res=array()){

         if(!is_array($res) || !$res){
             return 0;
         }
         if(!$res['create_time']) {
    		$res['create_time'] = time();
    	}


         return $this->_db->add($res);
	}


	public function getPositionById($id,$positionId){
         if(!$id || !is_numeric($id)){
            throw_exception('ID不合法');
         }
         return $this->_db->where('news_id='.$id.' and position_id='.$positionId)->find();
	}

}

 ?>
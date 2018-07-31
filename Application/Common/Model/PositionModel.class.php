<?php 
namespace Common\Model;
use Think\Model;

class PositionModel extends Model{

	private $_db = '';
	public function __construct(){
		$this->_db = M("position");
	}

	public function insert($data=array()){

		if(!is_array($data) || !$data){

            return 0;
		}

		$data['create_time'] = time();

		return $this->_db->add($data);
	}


	public function getPositions($data,$page,$pageSize=10){

		$data['status'] = array('neq',-1);
        
        $offset = ($page - 1) * $pageSize;

        return $this->_db->where($data)->order('id desc')->limit($offset,$pageSize)->select();

	}

	public function getPositionsCount($data=array()){

       $data['status'] = array('neq',-1);

       return $this->_db->where($data)->count();
	}
}


 ?>
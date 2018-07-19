<?php 
namespace Common\Model;
use Think\Model;




class NewsModel extends Model{

	private $_db = '';
	public function __construct(){
		$this->_db = M("news");
	}

	public function insert($data = array()){
         if(!$data || !is_array($data)){
             return 0;
         }

         $data['create_time'] = time();
         $data['username'] = getLoginUserName();

         return $this->_db->add($data);
	}

    //获取文章列表
	public function getNews($data,$page,$pageSize=10){
		$conditions = $data;
		if(isset($data['title']) && $data['title']){
              $conditions['title'] = array('like','%'.$data['title'].'%');
		}
		if(isset($data['catid']) && $data['catid']){
              $conditions['caiid'] = intval($data['catid']);
		}
        $conditions['status'] = array('neq',-1);
		$offset = ($page - 1) * $pageSize;
        return $this->_db->where($conditions)->order('news_id desc')->limit($offset,$pageSize)->select();

	}
    //获取文章总数
	public function getNewsCount($data=array()){
		$conditions = $data;
		if(isset($data['title']) && $data['title']){
              $conditions['title'] = array('like','%'.$data['title'].'%');
		}
		if(isset($data['catid']) && $data['catid']){
              $conditions['caiid'] = intval($data['catid']);
		}

		$conditions['status'] = array('neq',-1);
		return $this->_db->where($conditions)->count();
         
	}


	public function find($id){

		if(!$id || !is_numeric($id)){

              return array();
		}

		return $this->_db->where('news_id='.$id)->find();
	}


	public function UpdataNewsById($id,$data){

		if(!$id || !is_numeric($id)){
              
              throw_exception("ID不合法");

		}
		if(!$data || !is_array($data)){
              
              throw_exception("更新数据不合法");

		}

		return $this->_db->where('news_id='.$id)->save($data);

	}
}


 ?>
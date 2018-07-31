<?php 
namespace Admin\Controller;
use Think\Controller;
class PositionController extends CommonController{
      

      public function index(){
      	/**
      	 * 分页操作
      	 * @var [type]
      	 */
        $page = $_REQUEST['page'] ? $_REQUEST['page'] : 1;
        $pageSize = $_REQUEST['pageSize'] ? $_REQUEST['pageSize'] : 3;
        $poss = D("Position")->getPositions($data,$page,$pageSize);
        $posCount = D("Position")->getPositionsCount($data);

        $res = new \Think\Page($posCount,$pageSize);
        $pageRes = $res->show();
        $this->assign('pageRes',$pageRes);
        $this->assign('poss',$poss);
      	$this->display();
      }


      public function add(){

      	if($_POST){

      		if(!isset($_POST['name']) || !$_POST['name']){

                  return show(0,'推荐位名称不能为空!');
      		}

      		if(!isset($_POST['description']) || !$_POST['description']){

                  return show(0,'描述不能为空!');
      		}

      		$posId = D("Position")->insert($_POST);

      		if(!$posId){

                  return show(0,'新增推荐位失败!');
      		}
      		
      		      return show(1,'新增推荐位成功!');
      	}else{

      		$this->display();
      	}

      	

      }

      public function edit(){
      	  $id = $_GET['id'];
      }
} 

 ?>
<?php 
namespace Admin\Controller;
use Think\Controller;
class PositionController extends CommonController{
      

      public function index(){
      	
        $data['status'] = array('neq',-1);
        $positions = D("Position")->select($data);

        $this->assign('positions',$positions);
      	$this->display();

      }


      public function add(){

      	if(IS_POST){

      		if(!isset($_POST['name']) || !$_POST['name']){

                  return show(0,'推荐位名称不能为空!');
      		}

      		if(!isset($_POST['description']) || !$_POST['description']){

                  return show(0,'描述不能为空!');
      		}
            if($_POST['id']){

            	return $this->save($_POST);

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

      	  $posId = $_GET['id'];

      	  $positions = D("Position")->find($posId);

      	  $this->assign('positions',$positions);

      	  $this->display();


      }

      public function save($data){
          
          $posId = $data['id'];
          unset($data['id']);
          
          try {

          	  $id = D("Position")->UpdataPositionById($posId,$data);
	          if($id===false){
	          	return show(0,'更新失败!');
	          }
	          	return show(1,'更新成功!');


          } catch (Exception $e) {
          	  
          	  return show(0,$e->getMessage());
          }
          
      }



      public function setStatus(){
          
          try {
          	
          	      if($_POST){
		      	  	  $posId = $_POST['id'];
		      	  	  $status = $_POST['status'];
		      	  	  $res = D("Position")->UpadtaStatusById($posId,$status);
		      	  	  if($res){
		      	  	  	  return show(1,'操作成功');
		      	  	  }else{
		      	  	  	  return show(0,'操作失败');
		      	  	  }

		      	  }

          } catch (Exception $e) {
          	
              return show(0,$e->getMessage());

          }

          return show(0,'没有数据传输');

      }
} 

 ?>
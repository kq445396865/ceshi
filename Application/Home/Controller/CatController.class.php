<?php 
namespace Home\Controller;
use Think\Controller;



class CatController extends CommonController{

	public function index(){
		$id = intval($_GET['id']);
        if(!$id){
            return $this->error('ID不存在');
        }
        $nav = D("Menu")->find($id);
        if(!$nav || $nav['status']!=1){
        	return $this->error('栏目ID不存在或者状态不合法');
        }

        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = $_REQUEST['pageSize'] ? $_REQUEST['pageSize'] : 2;
        $conds = array(
           'status' => 1,
           'catid' => $id,
        );

		$news = D("News")->getNews($conds,$page,$pageSize);
		
		$newsCount = D("News")->getNewsCount($conds);

		$res = new \Think\Page($newsCount,$pageSize);

		$pageRes = $res->show();
        
        $this->assign('result',array(
               'catid' => $id,
               'listNews' => $news,
               'pageres' => $pageRes,
        ));

		$this->display();
	}
}

 ?>
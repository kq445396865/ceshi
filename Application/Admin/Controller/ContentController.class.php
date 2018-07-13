<?php 
namespace Admin\Controller;
use Think\Controller;


/**
 * 文章类
 */
class ContentController extends CommonController
{
	public function index(){
		$this->display();
	}





	//添加文章
	public function add(){
		

		if($_POST){

			if(!isset($_POST['title']) || !$_POST['title']){
				 return show(0,'文章标题不能为空');
			}
			if(!isset($_POST['content']) || !$_POST['content']){
                 return show(0,'文章内容不能为空');
			}
			$newsId = D("News")->insert($_POST);
			if($newsId){
                 $newsContentData['content'] = $_POST['content'];
                 $newsContentData['news_id'] = $newsId;
                 $contentId = D("NewsContent")->insert($newsContentData);
                 if($contentId){
                       show(1,'新增成功');
                 }else{
                 	   show(1,'主表插入成功,副标插入失败');
                 }
			}else{
				show(0,'插入失败');
			}
		}else{

            $webSiteMenu = D("Menu")->getNavMenus();
			$this->assign('webSiteMenu',$webSiteMenu);
			$this->display();
		}
		
	}

}


 ?>
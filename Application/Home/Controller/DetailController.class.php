<?php 
namespace Home\Controller;
use Think\Controller;



class DetailController extends CommonController{

	public function index(){
        
        $id = intval($_GET['id']);
        if(!$id){
        	return $this->error('ID不存在');
        }
        $news = D("News")->find($id);
        if(!$news || $news['status']!=1){
        	return $this->error('文章ID不存在或者状态不合法');
        }
        $count = intval($news['count']) + 1;
        D("News")->UpdataCount($id,$count);

        $content = D("NewsContent")->find($id);

        $news['content'] = htmlspecialchars_decode($content['content']);

        $this->assign('result',array(
            'catid' => $news['catid'],
            'news' => $news,
        ));

		$this->display();
	}
}


 ?>
<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       //获取首页案例数据
       $pronewslist = D("News")->select(array('status'=>1,'catid'=>5,'thumb'=>array('neq','')),8);
       //获取首页文章数据
       $newslist = D("News")->select(array('status'=>1,'catid'=>2),8);

       $this->assign('result',array(
           'pronewslist' => $pronewslist,
           'newslist' => $newslist,
       ));


       $this->display();
    }
}
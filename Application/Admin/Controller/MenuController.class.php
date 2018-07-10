<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends CommonController {

    public function add(){
        if($_POST){
            if(!isset($_POST['name']) || !$_POST['name']){
                   show(0,'栏目名称不能为空');
            }
            if(!isset($_POST['m']) || !$_POST['m']){
                   show(0,'模块名称不能为空');
            }
            if(!isset($_POST['c']) || !$_POST['c']){
                   show(0,'控制器名称不能为空');
            }
            if(!isset($_POST['f']) || !$_POST['f']){
                   show(0,'方法名称不能为空');
            }
            $menuId = D("Menu")->insert($_POST);
            if(!$_POST){
                return show(0,'新增栏目失败');
            }
             return show(1,'新增栏目成功');          
        }else{
        	$this->display();
        }
    }
        public function index(){
         $data = array();
    	/*
    	分页操作逻辑
    	 */
    	 $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
    	 $pageSize = $_REQUEST['pageSize'] ? $_REQUEST['pageSize'] : 3;
    	 $menus = D("Menu")->getMenus($data,$page,$pageSize);
    	 $menusCount = D("Menu")->getMenusCount($data);

    	 
    	 $res = new \Think\Page($menusCount, $pageSize);
         $pageRes = $res->show();
         $this -> assign('pageRes', $pageRes);
         $this -> assign('menus', $menus);
         $this -> display();
    }
}
<?php 
namespace Admin\Controller;
use Think\Controller;

/*
公共控制器

 */
class CommonController extends Controller {
       

       public function __construct() {
         
            parent::__construct();
            $this -> _init();

       }
       /*
       获取用户登录信息
        */
       public function getLoginUser(){
             return session('adminUser');
       }
       /*
       判断是否登录
        */
       public function isLogin(){
            
            $user = $this->getLoginUser();
            if($user && is_array($user)){
                  
                  return true;
            }

            return false;

       }




       private function _init() {
            $isLogin = $this->isLogin();
            //如果未登录
            if(!$isLogin){
                //跳转到登陆页面
                $this->redirect('/admin.php?c=login');
            }
       }
}
 ?>

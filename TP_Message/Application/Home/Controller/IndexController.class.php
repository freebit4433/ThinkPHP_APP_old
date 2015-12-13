<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize(){
        if (session('?isLogin')) {
            if (session('isLogin')) {
                return true;
            }
        }else{
            $this->error('请登陆！','Login/index',1);
        }
    }

    public function index(){
        $this->display();
    }

}
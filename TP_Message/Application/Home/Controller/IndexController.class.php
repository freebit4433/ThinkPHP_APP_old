<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize(){
        if (session('?isLogin')) {
            if (session('isLogin')) {
                return true;
            }else{
                $this->redirect('Login/index');
            }
        }else{
            $this->redirect('Login/index');
        }
    }

    public function index(){
        $this->display();
    }

    public function logout(){
        session('[destroy]');
        $this->redirect('Login/index');
    }

}
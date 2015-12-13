<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize(){
        $this->redirect('Login/index');
    }

    public function index(){
        $this->display();
    }

}
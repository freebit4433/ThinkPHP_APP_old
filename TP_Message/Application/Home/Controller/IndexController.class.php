<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        $this->display();
    	
    }

    public function test(){
        //dump($_POST);
        //$this->display();
        $table1 = D('table1');
        if(!$table1->create()){
            exit($table1->getError());
        }else{
            $res = $table1->add();
        }
        
        $this->assign('res',$res);
        $this->display();
        

    }
}
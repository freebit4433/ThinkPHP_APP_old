<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller{
	public function index(){
		$this->display();
	}

	public function submit(){
		if (!IS_POST) {
			$this->error('拒绝访问!','../Login/index',1);
		}else{
			$userTable = D('Register');
			if($data = $userTable->create()){
				dump($data);
			}else{
				$this->error($userTable->getError(),'index',1);
			}

		}
	}

}






?>
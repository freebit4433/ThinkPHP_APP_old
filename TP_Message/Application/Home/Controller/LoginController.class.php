<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class LoginController extends Controller{
	public function index(){
		/*$userTable = D('Login');
		$data = $userTable->where('id=8')->select();
		$str = $data[0]['username'];
		$this->assign('str',$str);*/
		$this->display();
	}

	public function submit(){
		if (!IS_POST) {
			$this->error('页面不存在！','index',1);
		}
		$userTable = D('Login');
		if ($data = $userTable->field('username,password')->create($_POST,Model::MODEL_INSERT)) {
			//创建成功
			dump($data);
		}else{
			//创建失败
		}
	}

	public function registerClick(){
		$this->redirect('Register/index');
	}
}




?>
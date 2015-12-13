<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class LoginController extends Controller{
	public function index(){
		$this->display();
	}

	public function submit(){
		if (!IS_POST) {
			$this->error('页面不存在！','index',1);
		}
		$userTable = D('Login');
		if ($condition = $userTable->field('username,password')->create($_POST,Model::MODEL_INSERT)) {
			//创建数据成功
			if($result = $userTable->where($condition)->select()){
				//查询成功，用户登陆成功
				//写入session
				session('username',$result[0]['username']);
				session('isLogin',true);
				$this->redirect('Index/index');
			}else{
				$this->error('用户名或密码不正确！','index',1);
			}
		}else{
			//创建失败
			$this->error($userTable->getError(),'index',1);
		}
	}

	public function registerClick(){
		$this->redirect('Register/index');
	}
}




?>
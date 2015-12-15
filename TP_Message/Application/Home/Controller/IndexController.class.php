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
        $userName = session('username');
        $this->assign('username',$userName);
        $this->display();
    }

    public function logout(){
        session('[destroy]');
        $this->redirect('Login/index');
    }

    public function submit(){
        if (!IS_POST) {
            $this->error('拒绝访问！','../Login/index',1);
        }else{
            //add数据
            $commentTable = M('table2comment');
            $data['username'] = session('username');
            $data['comment'] = I('post.comment','');
            $data['commenttime'] = time();
            $res = $commentTable->data($data)->add();
            if ($res) {
                $txData['flag'] = true;
                $txData['id'] = $res;
                
            }else{
                $txData['flag'] = false;
            }
            $this->ajaxReturn($txData,'json');
        }
    }

    public function refresh(){
        if (!IS_POST) {
            $this->error('拒绝访问！','../Login/index',1);
        }else{
            $commentData = M('table2comment')->select();
            foreach ($commentData as $rowNum => $rowData) {
                date_default_timezone_set('PRC');
                $commentData[$rowNum]['commenttime'] = date("Y年m月d日 H:i:s",$commentData[$rowNum]['commenttime']);

                $condition['username'] = $commentData[$rowNum]['username'];
                $userData = M('table2user')->field('imgnum,webpage')->where($condition)->select();
                $commentData[$rowNum]['imgnum'] = $userData[0]['imgnum'];
                $commentData[$rowNum]['webpage'] = $userData[0]['webpage'];
            }
            
            $this->ajaxReturn($commentData,'json');
        }
    }

    public function delete(){
        if (!IS_POST) {
            $this->error('拒绝访问！','../Login/index',1);
        }else{
            $deleteId = I('post.deleteid',null);
            $condition['id'] = $deleteId;
            $res = M('table2comment')->where($condition)->delete();
            $txData['flag'] = $res;
            $this->ajaxReturn($txData,'json');
        }
    }

}
<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller{
    public function loginAction(){

	$admin=D('admin');//实例化

	$arr=I('post.','',htmlspecialchars);
	if(!empty($arr)){
		$username=$arr['username'];
		$password=md5($arr['password']);

		$one=$admin->where("username='$username' and password='$password'")->fide();
		if($one){
			session('admin',$one);
			$this->success('登陆成功',U('admin/index/index'),3);
			die();

			}
		}






















	$this->display();
    }
	public function indexAction(){


		$this->display();
	}
}
<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {


   
	public function indexAction() {

	
    $this->display();
    }

    public function loginAction() {

    if($_POST){

    	$username = $_POST['u'];
        $pwd = md5($_POST['p']);

        $Sysuser = M("Sysuser"); // 实例化对象
	    $list = $Sysuser->where(" username = '$username' AND pwd = '$pwd'")->find();

	    if(!$list){

                 $this->error('帐号密码错误登录失败');

	    }else{

	    	//帐号密码都正确跳转
	    	session_start();
	    	$_SESSION["id"]=$list['id'];
	    	header("Location:http://localhost/lottery/admin/Index/index?id=1");
           // $this->success('登录成功', 'Index/index?id=1');
	    	}
	    }

       $this->display();
    }
	public function exitAction() {

     unset($_SESSION['id']);
     header("Location:http://localhost/lottery/admin/Login");

	}

}
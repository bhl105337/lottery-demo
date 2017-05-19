<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {


    public function indexAction() {
    	//
        $admin_id = $_SESSION["id"];
        
    	$Sysuser = M("Sysuser"); // 实例化对象
	    
	    $data = $Sysuser->where("id = '$admin_id'")->find();
	    //print_r($data);exit;
        if(!$data){
        	header("Location:http://localhost/lottery/admin/Login");
        } 



     $this->display();
    }
	
	public function userAction() {

     $this->display();
    }
	
	public function tableAction() {

     $this->display();
    }
	
	public function typographyAction() {

     $this->display();
    }
	
	public function iconsAction() {

     $this->display();
    }
	
	public function mapsAction() {

     $this->display();
    }
	
	
	
	

}




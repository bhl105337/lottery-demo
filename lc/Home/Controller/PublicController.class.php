<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
 



  

    


   



 protected function view($view=''){

		$content = $this->fetch($view);//获取文件内容并返回字符串
		$this->assign('content',$content);
		$this->display('Layout:layout');
		}

}







?>
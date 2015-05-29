<?php
namespace Home\Controller;
use Think\Controller;
import('.ORG.Mail');
class ContactController extends Controller {
    public function index(){
//     	print  L('add_user_error');　
        $this->display();
    }
    public function contact(){
    	$list = S('contact-data');
    	if (!$list) {
    		$salers = M("salers");
    		$list = $salers->where("status ='true'")->select();
    		S('contact-data', $list, 7000);
    	}
    	$this->assign('list',$list);
    	$this->display();
    }
    public function code(){
    	$Verify = new \Think\Verify();
    	$Verify->fontSize = 12;
    	$Verify->length   = 4;
    	$Verify->useNoise = false;
		$Verify->entry();
    }
    public function checkVerify($code, $id = ''){
    	$Verify = new \Think\Verify();
    	return $Verify->check($code, $id);
    }
    public function test(){
    	$code = I('get.code');
		var_dump($this->checkVerify($code));
    }
    public function sendEmail(){
    	$name = I('get.name');
    	$company = I('get.company');
    	$phone = I('get.phone');
    	$email = I('get.email');
    	$content = I('get.content');
    	$code = I('get.code');
    	SendMail("494886251@qq.com","邮件标题","邮件正文");
    	//$code = I('get.code');
    	var_dump($name,$company,$phone,$email);
    }
}
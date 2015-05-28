<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
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
    function check_verify($code, $id = ''){
    	$verify = new \Think\Verify();
    	return $verify->check($code, $id);
    }
}
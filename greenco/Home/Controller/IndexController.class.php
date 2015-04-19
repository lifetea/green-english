<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
//     	print  L('add_user_error');　
        $this->display();
    }
    public function about_us(){
    	//     	print  L('add_user_error');　
    	$this->display();
    }
    public function download(){
    	//     	print  L('add_user_error');　
    	$this->display();
    }
    public function contact(){
    	//     	print  L('add_user_error');　
    	$list = S('list');
    	if (!$list) {
    		$salers = M("salers");
    		$list = $salers->where("status ='true'")->select();
    		S('list', $list, 7000);
    	}
    	$this->assign('list',$list);
    	$this->display();
    }
    public function code(){
    	//     	print  L('add_user_error');　
    	$Verify = new \Think\Verify();
    	$Verify->fontSize = 12;
    	$Verify->length   = 4;
    	$Verify->useNoise = false;
		$Verify->entry();
    }    
}
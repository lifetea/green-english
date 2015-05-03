<?php
namespace Home\Controller;
use Think\Controller;
class PRODController extends Controller {
    public function index(){
        $this->display();
    }
    public function get2RBList(){
    	//product  type like '%2RB {$_GET['series']}%' 
    	//$list = S('contact-data');
    	//if (!$list) {
    		$prod = M("product");
    		$list = $prod->where("type like '%2RB {$_GET['series']}%'")->order('id ASC')->select();
    		//S('contact-data', $list, 7000);
    	//}
    	$this->assign('list',$list);
    	$this->display();
    }
    public function get3RBList(){
    	//product  type like '%2RB {$_GET['series']}%'
    	//$list = S('contact-data');
    	//if (!$list) {
    	$prod = M("product");
    	$list = $prod->where("type like '%3RB {$_GET['series']}%'")->order('id ASC')->select();
    	//S('contact-data', $list, 7000);
    	//}
    	$this->assign('list',$list);
    	$this->display();
    }
    public function get4RBList(){
    	//product  type like '%2RB {$_GET['series']}%'
    	//$list = S('contact-data');
    	//if (!$list) {
    	$prod = M("product");
    	$list = $prod->where("type like '%4RB {$_GET['series']}%'")->order('id ASC')->select();
    	//S('contact-data', $list, 7000);
    	//}
    	$this->assign('list',$list);
    	$this->display();
    }

    public function getIE2List(){
    	//product  type like '%2RB {$_GET['series']}%'
    	//$list = S('contact-data');
    	//if (!$list) {
    	$prod = M("ie2");
    	$list = $prod->where("type like '%2RB {$_GET['series']}%'")->order('id ASC')->select();
    	//S('contact-data', $list, 7000);
    	//}
    	$this->assign('list',$list);
    	$this->display();
    }
    
}
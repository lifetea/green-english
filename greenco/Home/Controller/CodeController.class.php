<?php
namespace Home\Controller;
use Think\Controller;
class CodeController extends Controller {
    public function index(){
        //$this->display();
        $Verify =     new \Think\Verify();
		$Verify->fontSize = 15;
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$Verify->entry();
    }
}
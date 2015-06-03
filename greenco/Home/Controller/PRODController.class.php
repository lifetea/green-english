<?php
namespace Home\Controller;
use Think\Controller;
class PRODController extends Controller {
    public function index(){
        $this->display();
    }
    public function getProd(){
    	$model = I('get.model');
    	$type = I('get.type');
    	$stage = I('get.stage');
    	$prod = M("pandect");
    	$blower = "";
    	$dsc = "";
    	$list = $prod->where("model like '%".$model."%' and blower_type='".$type."' and stage='".$stage."' ")->order('id ASC')->select();
    	if($stage =="Single"){
    		$stage = L('PROD_SINGLE_STAGE');
    	}elseif($stage =="Double"){
    		$stage = L('PROD_DOUBLE_STAGE');
    	}else{
    		$stage = L('PROD_THREE_STAGE');
    	}
    	switch($model){
    		case "2RB" : $blower =L('2RB_SIDE_CHANNEL_BLOWER');
    		break;
    		case  "3RB" : $blower =L('3RB_SIDE_CHANNEL_BLOWER');
    		$dsc = L('3RB_DSC');
    		break;
    		case  "4RB" : $blower =L('4RB_SIDE_CHANNEL_BLOWER');
    		break;
    		case  "Belt" : $blower =L('Belt_2RB_REGENERATIVE_BLOWER');
    		break;
    		case "IE2" : $blower = L('IE2_2RB_REGENERATIVE_BLOWER');
    		break;
    		case "cover" : $blower =L('COVER_SUCTION_RING_BLOWER');
    		break;
    	}
    	$this->assign('blower',$blower);
    	$this->assign('list',$list);
    	$this->assign('model',$model);
    	$this->assign('dsc',$dsc);
    	$this->assign('stage',$stage);
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
    	$this->assign('series',I('get.series'));
    	$this->assign('list',$list);
    	$this->display();
    }    
    public function Search(){
    	$prod = M("product");
    	$airFlow = I('get.airFlow');
    	$pressure = I('get.pressure');
    	$type = I('get.type');
		if($type=="maximum_vacuum"){
			$pressure = -$pressure;
		}    	
    	if(empty($airFlow) && empty($pressure)){
    		E('请添加搜索条件');
    		return false;
    	}elseif (empty($airFlow) && !empty($pressure)){
    		$sql =$type."=".$pressure." ";
    	}elseif (!empty($airFlow) && empty($pressure)){
    		$sql ="maximum_airflow=".$airFlow." " ; 
    	}else{
    		$sql ="maximum_airflow"."=".$airFlow." and ".$type."=".$pressure." " ;
    	}
    	$list = $prod->where($sql)->select();
    	$this->assign('series',I('get.series'));
    	$this->assign('list',$list);
    	$this->display();
    }    
    
    public function Content(){
    	$prod = M("product");
    	$list = $prod->where("type like '%{$_GET['series']}%' and output={$_GET['output']}")->find();
    	$this->assign('series',I('get.series'));
    	$list["subtype"] = substr($list["type"],0,7);
    	if($list["subtype"] =="3RB 350"){
    		$list["subtype"] = substr($list["type"],0,9);
    	}
    	$this->assign('list',$list);
    	$this->display();
    }
    public function BContent(){
    	$prod = M("b_series");
    	$list = $prod->where("type like '%{$_GET['series']}%' and output={$_GET['output']}")->find();
    	$this->assign('series',I('get.series'));
    	$list["subtype"] = substr($list["type"],0,7);
    	if($list["subtype"] =="3RB 350"){
    		$list["subtype"] = substr($list["type"],0,9);
    	}
    	$this->assign('list',$list);
    	$this->display();
    }
    public function IEContent(){
    	//product  type like '%2RB {$_GET['series']}%'
    	//$list = S('contact-data');
    	//if (!$list) {
    	//  like '%{$_GET['series']}%' and output={$_GET['output']}
    	 
    	$prod = M("ie2");
    	$list = $prod->where("type like '%{$_GET['series']}%' and output={$_GET['output']}")->find();
    	//S('contact-data', $list, 7000);
    	//}
    	$this->assign('series',I('get.series'));
    	$list["subtype"] = substr($list["type"],0,7);
    	$this->assign('list',$list);
    	//dump($list);
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
    	$this->assign('series',I('get.series'));
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
    	$this->assign('series',I('get.series'));
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
    	$this->assign('series',I('get.series'));
    	$this->display();
    }
    public function getSuctionList(){
    	//product  type like '%2RB {$_GET['series']}%'
    	//$list = S('contact-data');
    	//if (!$list) {
    	$prod = M("b_series");
    	$list = $prod->where("type like '%2RB {$_GET['series']}%'")->order('id ASC')->select();
    	//S('contact-data', $list, 7000);
    	//}
    	$this->assign('list',$list);
    	$this->assign('series',I('get.series'));
    	$this->display();
    }    
    public function getSilencerContent(){
    	//product  type like '%2RB {$_GET['series']}%'
    	//$list = S('contact-data');
    	//if (!$list) {
    	$prod = M("Silencer");
    	$list = $prod->where("type like '%{$_GET['type']}%'")->find();
//     	S('contact-data', $list, 7000);
    	//}
//     	echo $_GET['type'];
    	$this->assign('list',$list);
    	$this->display();
    }    
    public function filterContent(){
    	//product  type like '%2RB {$_GET['series']}%'
    	//$list = S('contact-data');
    	//if (!$list) {
    	$prod = M("filters");
    	$list = $prod->where("type like '%{$_GET['type']}%'")->find();
    	//S('contact-data', $list, 7000);
    	//}
    	$this->assign('list',$list);
    	$this->assign('type',I('get.type'));
    	$this->display();
    }   
    public function reliefContent(){
    	//product  type like '%2RB {$_GET['series']}%'
    	//$list = S('contact-data');
    	//if (!$list) {
    	$prod = M("Relief");
    	$list = $prod->where("type like '%{$_GET['type']}%'")->find();
    	//S('contact-data', $list, 7000);
    	//}
    	$this->assign('list',$list);
    	$this->assign('type',I('get.type'));
    	$this->assign('subType',substr(I('get.type'),0,2));
    	$this->display();
    }    
    
}
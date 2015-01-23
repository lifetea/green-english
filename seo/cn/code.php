<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date: 2010-8-13
*/
//用到session时  必须开启
session_start();

//随机码的个数
$_rnd_code = 4;

//创建随机码
for ($i=0;$i<$_rnd_code;$i++) {
	$_nmsg.= dechex(mt_rand(0,15));
}

//保存在session中
$_SESSION['code'] = $_nmsg;


//定义一个常量就不会是被恶意调用了
define('feifa',ture);

//引入公共文件
require 'inc\common.php';

//引用code函数
_code();

?>

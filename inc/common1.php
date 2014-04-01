<?php
//这是一个公共文件
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date:2012-6-27
*/

//防止别人非法调用
/*if (!defined('feifa')){
	exit('fei fa diao yong');
}

*/


//把硬路径放在常量里
define('yinglujing', substr(dirname(__FILE__),0,-3)) ;

//检查php版本
if (PHP_VERSION <'4.1.0'){
	exit('php版本过低');
}

//创建一个自动转义状态的常量
define('GPC',get_magic_quotes_gpc());


//引入函数
require 'global.func.php';
require 'mysql.func.php';

//执行耗时  网站打开要几秒
define('START_TIME',_runtime());
//$GLOBALS['start_time'] = _runtime();

//数据库连接
define('DB_HOST','mysql.sql26.eznowdata.com');//地址
define('DB_USER','sq_greenco');//帐号
define('DB_PWD','mhm123456');//密码
define('DB_NAME','sq_greenco');//数据库名称

//初始化数据库
_connect();   //连接MYSQL数据库
_select_db();   //选择指定的数据库
_set_names();   //设置字符集

?>

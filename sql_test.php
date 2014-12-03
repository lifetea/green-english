<?php

define('DB_HOST','113.10.181.114');//地址mysql.sql26.eznowdata.com
define('DB_USER','sq_greenco');//帐号
define('DB_PWD','mhm123456');//密码
define('DB_NAME','sq_greenco');//数据库名称

function _connect() {
	//global 表示全局变量的意思，意图是将此变量在函数外部也能访问
	global $_conn;
	if (!$_conn = @mysql_connect(DB_HOST,DB_USER,DB_PWD)) {
		exit('数据库连接失败');
	}
}
_connect()
//$_result=mysql_query("select type,Fre_quency,output,maximum_airflow,maximum_vacuum,maximum_pressure  from IE2 where  type like '%2RB {$_GET['series']}%' ");
?>
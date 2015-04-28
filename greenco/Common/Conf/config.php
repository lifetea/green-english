<?php
return array(
	//'配置项'=>'配置值'
		//数据库配置信息
		'DB_TYPE'   => 'mysql', // 数据库类型
		'DB_HOST'   => 'greenco3306.mysql.rds.aliyuncs.com', // 服务器地址
		'DB_NAME'   => 'greenco', // 数据库名
		'DB_USER'   => 'lsy', // 用户名
		'DB_PWD'    => '1isongyang', // 密码
		'DB_PORT'   => 3306, // 端口
		'DB_PREFIX' => '', // 数据库表前缀
			
		'SRC_ROOT'=>'http://192.168.10.42',
		'IMG_ROOT'=>'http://192.168.10.42/src/img',
		'JS_ROOT'=>'src/js',
		'COM_TP'=>'../Public',
	//多语言网址
		'ZH_URL'=>'http://www.greenco.com.cn',
		'EN_URL'=>'http://www.greenco.cn',
		'ES_URL'=>'http://spanish.greenco.cn',
		'ABOUT_ROOT'=>'http://'.$_SERVER['HTTP_HOST'].'/Index',
		
);

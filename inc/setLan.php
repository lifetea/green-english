<?php

switch ($_SERVER['HTTP_HOST']){
	case '192.168.1.2' : 
	putenv('LANG=en_US'); 
	setlocale(LC_ALL, 'en_US'); 
	//ָ��Ҫ�õ���ϵ���磺en_US��zh_CN��zh_TW//en_us www.greenco.cn
	break;
	case 'greenco.cn' : include_once './index.php';
	break;
	case 'localhost' :
	putenv('LANG=zh_CN');
	setlocale(LC_ALL, 'zh_CN'); 
	//ָ��Ҫ�õ���ϵ���磺en_US��zh_CN��zh_TW chinese.greenco.cn
	break;
	case 'www.greenco.cn' : include_once './index.php';
	break;
	default : break;

}
?>
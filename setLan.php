<?php
$domain = 'lan';
Global $lan;
bind_textdomain_codeset($domain, 'UTF-8');
textdomain($domain);
switch ($_SERVER['HTTP_HOST']){
	case 'www.greenco.com.cn' :
		bindtextdomain($domain, dirname(__FILE__).'/lan');
			putenv('LANG=zh_CN');
			setlocale(LC_MESSAGES, 'zh_CN.utf8');
			$lan="zh_CN";
			break;
	case '127.0.0.1' : 
	putenv('LANG=en_US'); 
	setlocale(LC_ALL, 'en_US'); 
	break;
	case '192.168.1.2' :
		putenv('LANG=zh_CN');
		setlocale(LC_ALL, 'zh_CN'); 
		$lan="zh_CN";
		break;
	case 'greenco.cn' : include_once './index.php';
	break;
	case 'localhost' :
		bindtextdomain($domain, dirname(__FILE__).'\language');
		putenv('LANG=zh_CN');
		setlocale(LC_ALL, 'zh_CN'); 
		$lan="zh_CN";
		break;
	default : break;

}
?>
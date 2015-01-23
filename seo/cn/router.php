<?php
	switch ($_SERVER['HTTP_HOST']){
		case 'spanish.greenco.cn' : include_once './spanish/index.php';
		break;
		case 'localhost' : include_once './index.php';
		break;
		case 'greenco.cn' : include_once './index.php';
		break;
		case 'chinese.greenco.cn' : include_once './index.php';
		break;
		case 'www.greenco.cn' : include_once './index.php';
		break;
		default : break;
	}


?>
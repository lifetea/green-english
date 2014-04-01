<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date:2012-7-9
*/
//防止恶意调用
if (!defined('feifa')){
	exit('fei fa diao yong');
}
//检查这个自定义函数是否存在
if (!function_exists('artdialog_back')) {
	exit('artdialog_back()函数不存在，请检查!');
}
//同上
if (!function_exists('_mysql_string')) {
	exit('_mysql_string()函数不存在，请检查!');
}



//检查唯一标识符的函数
function _check_uniqid($_first_uniqid,$_end_uniqid) {

	if ((strlen($_first_uniqid) != 40) || ($_first_uniqid != $_end_uniqid)) {
		artdialog_back('唯一标识符异常');
	}

	return _mysql_string($_first_uniqid);
}


//下面全是检查注册页面的函数
/**
 * 检查用户名
 * _check_username表示检测并过滤用户名
 * @access public
 * @param string $_string 受污染的用户名
 * @param int $_min_num  最小位数
 * @param int $_max_num 最大位数
 * @return string  过滤后的用户名
 */
function _check_username($_string,$_min_num,$_max_num) {
	//去掉两边的空格
	$_string = trim($_string);
   
	
	
	//限制敏感字符
	$_char_pattern = '/[<>\'\"\ \()]/';
	if (preg_match($_char_pattern,$_string)) {
		artdialog_back('用户名不得包含敏感字符');
	}
	
	//长度不得小于两位或者大于20位
	if (mb_strlen($_string,'utf-8') < $_min_num || mb_strlen($_string,'utf-8') > $_max_num) {
		artdialog_back('用户名长度不得小于'.$_min_num.'位或者大于'.$_max_num.'位');
	}



	//限制敏感用户名
	$_mg[0] = '李炎恢';
	$_mg[1] = '胡心鹏';
	$_mg[2] = '吴祁';
	//告诉用户，有哪些不能够注册
	foreach ($_mg as $value) {
		$_mg_string .= '[' . $value . ']' . '\n';
	}
	//这里采用的绝对匹配
	if (in_array($_string,$_mg)) {
		artdialog_back($_mg_string.'以上敏感用户名不得注册');
	}

	//将用户名转义输入
	return _mysql_string($_string);
}
/**
 * _check_password 验证密码和确认密码
 * @access public
 * @param string $_first_pass
 * @param string $_end_pass
 * @param int $_min_num
 * @return string $_first_pass 返回一个加密后的密码
 */

function _check_password($_first_pass,$_end_pass,$_min_num) {
	//判断密码
	if (strlen($_first_pass) < $_min_num) {
		artdialog_back('密码不得小于'.$_min_num.'位！');
	}

	//密码和密码确认必须一致
	if ($_first_pass != $_end_pass) {
		artdialog_back('密码和确认密码不一致！');
	}

	//将密码返回  sha1是加密方式 跟md5差不多
	return sha1($_first_pass);
}

/**
 * _check_question  密码提示
 * @access public
 * @param string $_string
 * @param int $_min_num
 * @param int $_max_num
 * @return string $_string 返回密码提示
 */

function _check_question($_string,$_min_num,$_max_num) {
	$_string=trim($_string);
	//长度小于4位或者大于20位
	if (mb_strlen($_string,'utf-8') < $_min_num || mb_strlen($_string,'utf-8') > $_max_num) {
		artdialog_back('密码提示不得小于'.$_min_num.'位或者大于'.$_max_num.'位');
	}

	//返回密码提示
	return _mysql_string($_string);
}

/**
 *_check_answer()  检查密码回答
 *@access public
 * @param string $_ques
 * @param string $_answ
 * @param int $_min_num
 * @param int $_max_num
 * @return $_answ
 */
function _check_answer($_ques,$_answ,$_min_num,$_max_num) {
	$_answ=trim($_answ);
	//长度小于4位或者大于20位
	if (mb_strlen($_answ,'utf-8') < $_min_num || mb_strlen($_answ,'utf-8') > $_max_num) {
		artdialog_back('密码回答不得小于'.$_min_num.'位或者大于'.$_max_num.'位');
	}

	//密码提示与回答不能一致
	if ($_ques == $_answ) {
		artdialog_back('密码提示与回答不得相同');
	}

	//加密返回
	return _mysql_string(sha1($_answ));
}



//头像过滤函数
function _check_face($_string){
	return _mysql_string($_string);
}


//邮件过滤函数
function _check_email($_string,$_min_num,$_max_num) {
	//参考bnbbs@163.com
	//[a-zA-Z0-9_] => \w
	//[\w\-\.] 16.3.
	//\.[\w+] .com.com.com.net.cn
	//正则听起来比较麻烦，但是你理解了，就很简单了。
	//如果听起来比较麻烦，就直接套用
	if (empty($_string)) {
		return null;
	} else {
		if (!preg_match('/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/',$_string)) {
			artdialog_back('邮件格式不正确！');
		}
	}
     if(strlen($_string)<$_min_num){
   	artdialog_back('邮件长度不正确！');
     }
	return _mysql_string($_string);
}

/**
 * _check_qq ....
 * @access public
 * @param int $_string
 * @return int $_string  QQ号码
 */
function _check_qq($_string) {
	//去掉两边的空格
	$_string = trim($_string);
	if (empty($_string)) {
		return null;
	} else {
		//123456
		if (!preg_match('/^[1-9]{1}[\d]{4,9}$/',$_string)) {
			artdialog_back('QQ号码长度不正确或输入有误！');
		}
	}

	return _mysql_string($_string);
}

/**
 * _check_url 网址验证  主页
 * @access public
 * @param string $_string
 * @return string $_string 返回验证后的网址
 */

function _check_url($_string,$_max_num) {
	//去掉两边的空格
	$_string = trim($_string);
	if (empty($_string) || ($_string == 'http://')) {
		return null;
	} else {
		//http://ww.yc60.com
		//?表示0次或者一次
		if (!preg_match('/^https?:\/\/(\w+\.)?[\w\-\.]+(\.\w+)+$/',$_string)) {
			artdialog_back('网址不正确！');
		}
		if(strlen($_string)>$_max_num){
			artdialog_back('网址太长,本站不收录');
		}
	}

	return _mysql_string($_string);
}
?>
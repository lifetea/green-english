<?php
//这整个文件是放函数的
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date:2012-6-27
*/
/**
 *_runtime()是用来获取执行耗时
 * @access public  表示函数对外公开
 * @return float 表示返回出来的是一个浮点型数字
 */
//防止恶意调用
if (!defined('feifa')){
	exit('fei fa diao yong');
}

//这个是运行时间的函数  网页运行了几秒   这个函数没有参数
  function  _runtime(){
  $_mtime = explode(' ',microtime());
	return $_mtime[1] + $_mtime[0];
  }

 //出现提示框并关闭页面
  function  artdialog_close($info){
  	echo  "<script type='text/javascript'>
  	$(document).ready(function(){
	        art.dialog({
  	                   content: '$info',
  	                   ok: function () {
  	                             art.dialog.close();


                                }

              })
     })
  </script>";
  exit();
}

//artdialog样式的警告框   关闭并返回原来点击的地方
function  artdialog_back($info){
  	echo  "<script type='text/javascript'>
  	            $(document).ready(function(){

                                    art.dialog({
                                    content: '$info',
                                    ok: function () {
    	                                  this.close();
    	                                  history.back();


                                     }

                            })
  	              })
  	            </script>";
    exit();
  }


//提示并跳转
function  artdialog_location($info,$_location){
  	echo  "<script type='text/javascript'>
  	                 $(document).ready(function(){
						  	art.dialog({
						  	content: '$info',
						  	ok: function () {
						  	      this.close();
  	                              location.href='$_location';
						  }

						  })
						  })
                         </script>";
         exit();
  }


//出现对话框  几秒后消失
  function  artdialog_info_time($_info,$_time){

  	echo  "<script type='text/javascript'>
  	             $(document).ready(function(){
					  	art.dialog.tips('$_info', $_time)

  	              })
  	</script>";


  }


//出现对话框  关闭后回调函数   callback
function   artdialog_alert($_info,$_location){
 	echo  "<script type='text/javascript'>
 	$(document).ready(function(){
 	    art.dialog.alert('$_info', function () {location.href='$_location'});
 	    return false;
 	})
 	</script>";
 	exit();
 }

//验证码的函数
function _check_code($first_code,$end_code){
 	if($first_code!==$end_code){
 		artdialog_alert('验证码错误','feedback.php');
 		return false;
 	}
 }

//唯一标识符函数
 function _sha1_uniqid() {
 	return _mysql_string(sha1(uniqid(rand(),true)));
 }


/**
   * _mysql_string
   * @param string $_string
   * @return string $_string
 */
 //转义的函数  要写入数据库的最好全部都进行转义
 function _mysql_string($_string) {
  	//get_magic_quotes_gpc()如果是开启状态，那么就不需要转义  默认是开启的 放在了GPC这个常量里
  	if (!GPC) {
  		//mysql_real_escape_string 这是一个转义的函数
  		return mysql_real_escape_string($_string);
  	}else{
  		return $_string;
  	}

  }


//生成验证码的函数 (有4个参数 )
 function _code($_width =75,$_height =30,$_rnd_code = 4,$_flag = false) {

  		//创建随机码
  		for ($i=0;$i<$_rnd_code;$i++) {
  			$_nmsg .= dechex(mt_rand(0,15));
  		}

  		//保存在session
  		$_SESSION['code'] = $_nmsg;

  		//创建一张图像
  		$_img = imagecreatetruecolor($_width,$_height);

  		//白色
  		$_white = imagecolorallocate($_img,255,255,255);

  		//填充
  		imagefill($_img,0,0,$_white);

  		if ($_flag) {
  			//黑色,边框
  			$_black = imagecolorallocate($_img,0,0,0);
  			imagerectangle($_img,0,0,$_width-1,$_height-1,$_black);
  		}

  		//随即画出6个线条
  		for ($i=0;$i<6;$i++) {
  			$_rnd_color = imagecolorallocate($_img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
  			imageline($_img,mt_rand(0,$_width),mt_rand(0,$_height),mt_rand(0,$_width),mt_rand(0,$_height),$_rnd_color);
  		}

  		//随即雪花
  		for ($i=0;$i<100;$i++) {
  			$_rnd_color = imagecolorallocate($_img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
  			imagestring($_img,1,mt_rand(1,$_width),mt_rand(1,$_height),'*',$_rnd_color);
  		}

  		//输出验证码
  		for ($i=0;$i<strlen($_SESSION['code']);$i++) {
  			$_rnd_color = imagecolorallocate($_img,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));
  			imagestring($_img,5,$i*$_width/$_rnd_code+mt_rand(1,10),mt_rand(1,$_height/2),$_SESSION['code'][$i],$_rnd_color);
  		}

  		//输出图像
  		header('Content-Type: image/png');
  		imagepng($_img);

  		//销毁
  		imagedestroy($_img);
 }


//销毁session 就是删除
function _session_destroy(){

	  session_destroy();

}

//删除cookie    就是退出
function  _unsetcookie(){
	setcookie('username','');
	_session_destroy();
	header('location:index.php');
}


//登录状态的判断
function  _login_state(){
	if(isset($_COOKIE['username'])){
		artdialog_back('登录状态无法进行本操作');

	}

}

//分页模块
function _page($_sql,$_size) {
	//将里面的所有变量取出来，外部可以访问
	global $_page,$_pagesize,$_pagenum,$_pageabsolute,$_num;
	if (isset($_GET['page'])) {
		$_page = $_GET['page'];
		if (empty($_page) || $_page < 0 || !is_numeric($_page)) {
			$_page = 1;
		} else {
			$_page = intval($_page);
		}
	} else {
		$_page = 1;
	}
	$_pagesize = $_size;
	$_num = _num_rows(_query($_sql));
	if ($_num == 0) {
		$_pageabsolute = 1;
	} else {
		$_pageabsolute = ceil($_num / $_pagesize);
	}
	if ($_page > $_pageabsolute) {
		$_page = $_pageabsolute;
	}
	$_pagenum = ($_page - 1) * $_pagesize;
}


/**
 * _paging分页函数
 * @param $_type
 * @return 返回分页
 */
function _paging($_type,$info) {
	global $_page,$_pageabsolute,$_num;
	if ($_type == 1) {
		echo '<div id="page_num">';
		echo '<ul>';
		for ($i=0;$i<$_pageabsolute;$i++) {
			if ($_page == ($i+1)) {
				echo '<li><a href="'.script.'.php?page='.($i+1).'" class="selected">'.($i+1).'</a></li>';
			} else {
				echo '<li><a href="'.script.'.php?page='.($i+1).'">'.($i+1).'</a></li>';
			}
		}
		echo '</ul>';
		echo '</div>';
	} elseif ($_type == 2) {
		echo '<div id="page_text">';
		echo '<ul>';
		echo '<li>'.$_page.'/'.$_pageabsolute.'页 | </li>';
		echo '<li>共有<strong>'.$_num.'</strong>'.$info.' | </li>';
		if ($_page == 1) {
			echo '<li>首页 | </li>';
			echo '<li>上一页 | </li>';
		} else {
			echo '<li><a href="'.script.'.php">首页</a> | </li>';
			echo '<li><a href="'.script.'.php?page='.($_page-1).'">上一页</a> | </li>';
		}
		if ($_page == $_pageabsolute) {
			echo '<li>下一页 | </li>';
			echo '<li>尾页</li>';
		} else {
			echo '<li><a href="'.script.'.php?page='.($_page+1).'">下一页</a> | </li>';
			echo '<li><a href="'.script.'.php?page='.$_pageabsolute.'">尾页</a></li>';
		}
		echo '</ul>';
		echo '</div>';
	}
}



//检查发送texterea文件里的内容
function  _check_content($_string){

	if (mb_strlen($_string,'utf-8') < 5 || mb_strlen($_string,'utf-8') >200 ) {

		       artdialog_back('发送内容不得小于5位或大于200位');
	}
	return     _mysql_string($_string);
}



//限制内容显示页面的字数
function _title($_string) {
	if (mb_strlen($_string,'utf-8') >25) {
	 	$_string = mb_substr($_string,0,210,'utf-8');
	 	return  $_string.'...';
	}
	return $_string;
}

?>
<?php
//�������ļ��Ƿź�����
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
 *_runtime()��������ȡִ�к�ʱ
 * @access public  ��ʾ�������⹫��
 * @return float ��ʾ���س�������һ������������
 */
//��ֹ�������
if (!defined('feifa')){
	exit('fei fa diao yong');
}

//���������ʱ��ĺ���  ��ҳ�����˼���   �������û�в���
  function  _runtime(){
  $_mtime = explode(' ',microtime());
	return $_mtime[1] + $_mtime[0];
  }

 //������ʾ�򲢹ر�ҳ��
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

//artdialog��ʽ�ľ����   �رղ�����ԭ������ĵط�
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


//��ʾ����ת
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


//���ֶԻ���  �������ʧ
  function  artdialog_info_time($_info,$_time){

  	echo  "<script type='text/javascript'>
  	             $(document).ready(function(){
					  	art.dialog.tips('$_info', $_time)

  	              })
  	</script>";


  }


//���ֶԻ���  �رպ�ص�����   callback
function   artdialog_alert($_info,$_location){
 	echo  "<script type='text/javascript'>
 	$(document).ready(function(){
 	    art.dialog.alert('$_info', function () {location.href='$_location'});
 	    return false;
 	})
 	</script>";
 	exit();
 }

//��֤��ĺ���
function _check_code($first_code,$end_code){
 	if($first_code!==$end_code){
 		echo "<script type='text/javascript'>
 	$(document).ready(function(){
 	    alert('��֤�����');
 		history.back();
 	})
 	</script>";
 		exit();
 	}
 }

//Ψһ��ʶ������
 function _sha1_uniqid() {
 	return _mysql_string(sha1(uniqid(rand(),true)));
 }


/**
   * _mysql_string
   * @param string $_string
   * @return string $_string
 */
 //ת��ĺ���  Ҫд�����ݿ�����ȫ��������ת��
 function _mysql_string($_string) {
  	//get_magic_quotes_gpc()����ǿ���״̬����ô�Ͳ���Ҫת��  Ĭ���ǿ����� ������GPC���������
  	if (!GPC) {
  		//mysql_real_escape_string ����һ��ת��ĺ���
  		return mysql_real_escape_string($_string);
  	}else{
  		return $_string;
  	}

  }


//������֤��ĺ��� (��4������ )
 function _code($_width =60,$_height =30,$_rnd_code = 4,$_flag = false) {

  		//���������
  		for ($i=0;$i<$_rnd_code;$i++) {
  			$_nmsg .= dechex(mt_rand(0,15));
  		}

  		//������session
  		$_SESSION['code'] = $_nmsg;

  		//����һ��ͼ��
  		$_img = imagecreatetruecolor($_width,$_height);

  		//��ɫ
  		$_white = imagecolorallocate($_img,255,255,255);

  		//���
  		imagefill($_img,0,0,$_white);

  		if ($_flag) {
  			//��ɫ,�߿�
  			$_black = imagecolorallocate($_img,0,0,0);
  			imagerectangle($_img,0,0,$_width-1,$_height-1,$_black);
  		}

  		//�漴����6������
  		for ($i=0;$i<6;$i++) {
  			$_rnd_color = imagecolorallocate($_img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
  			imageline($_img,mt_rand(0,$_width),mt_rand(0,$_height),mt_rand(0,$_width),mt_rand(0,$_height),$_rnd_color);
  		}

  		//�漴ѩ��
  		for ($i=0;$i<100;$i++) {
  			$_rnd_color = imagecolorallocate($_img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
  			imagestring($_img,1,mt_rand(1,$_width),mt_rand(1,$_height),'*',$_rnd_color);
  		}

  		//�����֤��
  		for ($i=0;$i<strlen($_SESSION['code']);$i++) {
  			$_rnd_color = imagecolorallocate($_img,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));
  			imagestring($_img,5,$i*$_width/$_rnd_code+mt_rand(1,10),mt_rand(1,$_height/2),$_SESSION['code'][$i],$_rnd_color);
  		}

  		//���ͼ��
  		header('Content-type: image/x-png');
  		imagepng($_img);

  		//����
  		imagedestroy($_img);
 }


//����session ����ɾ��
function _session_destroy(){

	  session_destroy();

}

//ɾ��cookie    �����˳�
function  _unsetcookie(){
	setcookie('username','');
	_session_destroy();
	header('location:index.php');
}


//��¼״̬���ж�
function  _login_state(){
	if(isset($_COOKIE['username'])){
		artdialog_back('��¼״̬�޷����б�����');

	}

}

//��ҳģ��
function _page($_sql,$_size) {
	//����������б���ȡ�������ⲿ���Է���
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
 * _paging��ҳ����
 * @param $_type
 * @return ���ط�ҳ
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
		echo '<li>'.$_page.'/'.$_pageabsolute.'ҳ | </li>';
		echo '<li>����<strong>'.$_num.'</strong>'.$info.' | </li>';
		if ($_page == 1) {
			echo '<li>��ҳ | </li>';
			echo '<li>��һҳ | </li>';
		} else {
			echo '<li><a href="'.script.'.php">��ҳ</a> | </li>';
			echo '<li><a href="'.script.'.php?page='.($_page-1).'">��һҳ</a> | </li>';
		}
		if ($_page == $_pageabsolute) {
			echo '<li>��һҳ | </li>';
			echo '<li>βҳ</li>';
		} else {
			echo '<li><a href="'.script.'.php?page='.($_page+1).'">��һҳ</a> | </li>';
			echo '<li><a href="'.script.'.php?page='.$_pageabsolute.'">βҳ</a></li>';
		}
		echo '</ul>';
		echo '</div>';
	}
}



//��鷢��texterea�ļ��������
function  _check_content($_string){

	if (mb_strlen($_string,'utf-8') < 5 || mb_strlen($_string,'utf-8') >200 ) {

		       artdialog_back('�������ݲ���С��5λ�����200λ');
	}
	return     _mysql_string($_string);
}



//����������ʾҳ�������
function _title($_string) {
	if (mb_strlen($_string,'utf-8') > 25) {
	 	$_string = mb_substr(strip_tags($_string),0,210,'utf-8');
	 	return  $_string.'...';
	}
	return $_string;
}

function _content($_string,$_len) {
	if (mb_strlen($_string,'utf-8') > $_len) {
		$_string = mb_substr(strip_tags($_string),0,$_len,'utf-8');
		return  $_string.'...';
	}
	return $_string;
}
?>
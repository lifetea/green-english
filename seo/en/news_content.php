<?php
//让这个常量存在就能调用
@define('feifa',ture);
//引入公共文件

$domain = 'lan';
bindtextdomain($domain, dirname(__FILE__).'\language');
require 'inc/setLan.php';
require 'inc/common.php';
if($lan == "zh_CN"){
	$_result=mysql_query("select id,time,title,content  from chinese_news  where id={$_GET['id']} ");
	
}else{
	$_result=mysql_query("select id,time,title,content  from english_news  where id={$_GET['id']} ");
// 	$_result=mysql_query("select id,time,title,content  from english_news where 1=1 order by time desc limit $_pagenum,$_pagesize ");
}
$_rows=mysql_fetch_array($_result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title><?php echo _('News|blower news|side channel blower news') ?></title>
<meta name="keywords" content="<?php echo _('News,Blower news,side channel blower news,Industry News,GREENCO')?>" />
<meta name="description" content="<?php echo _('GREENCO_The world leader manufacturer in side channle blower,regenerative blower,ring blower,air blower in China,side channel pumps can be used as vacuum pumps or compressors and are a highly efficient dry running technology for numerous applications.') ?>" />
<script src="js/menu.js" type="text/javascript"></script>
<link href="css/main.css" media="screen" rel="stylesheet" type="text/css" />
<link href="favicon.ico" rel="shortcut icon" />
<script src="js/jquery-1.7.2.js"></script>
<script type="text/javascript">
	$(function(){
		var a=$("#Side_Channel_Blower_2RB_Single_Stage .right").height();
		if($.browser.mozilla) {
			$("#Side_Channel_Blower_2RB_Single_Stage").height(a+160);
	    }else{
	    	$("#Side_Channel_Blower_2RB_Single_Stage").height(a+235);
		    }
	})
</script>
<style>
  	.info-nav li a{margin-left:5px;color:#333;}
  	.info-nav li a:hover{margin-left:5px;}
	ul.main-nav li{margin-left:12px;}
	ul.main-nav li a{font-size:13px;}
  	ul.main-nav li a:hover{background:#555;}
  	h1,h2,h3,h4,h5,h6{font-weight:600;}
  	.dropdown{border:1px solid #ccc;}
    #Side_Channel_Blower_2RB_Single_Stage_all{background:#ccc;}
  	#Side_Channel_Blower_2RB_Single_Stage{width:1000px;margin:0 auto;background:#fff;border:1px solid #999;border-top:none;}
    #Side_Channel_Blower_2RB_Single_Stage .left{float:left;width:265px;margin:5px 0 0 10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left H2{text-indent:10px;background:#666;font-size:14px;font-weight:600;width:250px;height:32px;color:#fff;line-height:32px;border:1px solid  #555;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul{margin-top:8px;list-style:none;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li {margin-top:13px;background:url(image/jiantou.png) no-repeat 0 2px;padding-left:18px;}
    #Side_Channel_Blower_2RB_Single_Stage .left form p{margin-top:10px;width:240px;padding-left:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li  a{color:#333;}
  	#Side_Channel_Blower_2RB_Single_Stage .left .text{border-radius:0px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left select{margin-left:8px;border-radius:0px;}
	#Side_Channel_Blower_2RB_Single_Stage .right{float:left;width:700px;border-left:1px solid #ccc;padding:0 0 20px 15px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right h5{color:#444;font-weight:600;font-size:14px;text-indent:250px;height:15px;line-height:15px;font-family:microsoft yahei;}
  	#Side_Channel_Blower_2RB_Single_Stage .right  #mypage{float:left;margin:0 0 20px 22px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right  #mypage img:hover{filter:alpha(opacity=90);opacity=0.9;}
  	#Side_Channel_Blower_2RB_Single_Stage .right h4 a{font-size:13px;color:#333;display:block;width:200px;text-indent:70px;height:20px;line-height:20px;font-weight:500;background:url(image/arrow04.gif) no-repeat 70px 6px;padding-left:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right ul{list-style:none;}
  	#Side_Channel_Blower_2RB_Single_Stage .right img{padding:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right  p{margin-top:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right  table{margin:15px 0 0 20px;float:left;border:1px solid #bbb;}
  	#Side_Channel_Blower_2RB_Single_Stage .right  table td{padding:5px 25px 5px 25px;border:1px solid #bbb;border-top:none;border-left:none;}
   #Side_Channel_Blower_2RB_Single_Stage .right  a{color:#85150c;text-decoration:underline;}
 #Side_Channel_Blower_2RB_Single_Stage .right  h3{font-size:13px;color:#333;margin-top:20px;clear:both;font-family:tahoma;}
   /*文字分页*/
	#page_text{
		margin-top:25px;
		clear:both;
		text-align:center;
		font-size:16px;
		color:#333;
		height:40px;
	}
	#page_text ul{
		width:300px;
		list-style:none;
	}
	#page_text ul  li{
		display:inline;
	}
	#page_text ul  li a{
		text-decoration:none;
		color:#145183;
	}
  	#copyright a{color:#999;font-variant:normal;}
	#copyright p{font-variant:normal;}
    #copyright ul li{margin-top:5px;}
</style>
</head>
<body id="homepage" >

<?php require 'inc/header_inc.php';?>


<!-- 应用内容 -->
<div id="Side_Channel_Blower_2RB_Single_Stage_all" >
   <div id="Side_Channel_Blower_2RB_Single_Stage">
       <img src="image/<?php echo _('news_banner.jpg'); ?>" style="margin:10px 0 0 10px;border:1px solid #bbb;" alt="Greenco side channel blower news"/>
       <div class="left">
             <h2 style="margin-top:5px;font-family:tahoma;"><?php echo _('NEWS');?></h2>
                 <ul>
	                  <li style="margin-top:-2px;"><a href="news_company.php"><?php echo _('Company News');?></a></li>
	                  <li><a href="news_Industry.php"><?php echo _('Industry news');?></a></li>
                  </ul>

       </div>
       <div class="right">
       <h4 style="margin-top:13px;color:#1a3d77;font-size:14px;font-family:tahoma;"><?php  echo $_rows['title'];?></h4>
       <p style="text-indent:0px;border-bottom:1px solid #bbb;height:30px;line-height:30px;"><strong><?php echo _('Author');?>:</strong>greenco<SPAN style="float:right;"><?php echo $_rows['time'];?></SPAN></p>
       <?php echo $_rows['content'];?>
       </div>
   </div>
</div>
<!-- 应用内容end -->

<?php require 'inc/footer_inc.php';?>


<script src="js/swfobject.js"></script>
<script  type="text/javascript" src="layer/layer.js"></script>
<script  src="js/application.js"></script>
<script>
$(function(){
    $(" div.dropdown ul li a").css('color','#444');
    $('table tr.one').css('background','#faf09c').css('color','#444');
    $('table tr.one td').css('border-top','#bbb');
	$("ul.main-nav li a").hover(
	 function(){
	        $(this).css('background','#666');
	 },
	 	 function(){
	        $(this).css('background','#333');
	 }
	 );

	 $(" div.dropdown ul li a").hover(
	 function(){
	        $(this).css('background','#fff').css('text-decoration','underline').css('color','#222');
	 },
	 	 function(){
	        $(this).css('background','#fff').css('text-decoration','none').css('color','#444');
	 }
	 )
})

</script>
</body>
</html>


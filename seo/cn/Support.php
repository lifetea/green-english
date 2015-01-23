<?php
//让这个常量存在就能调用
define('feifa',ture);
//引入公共文件
require 'inc/common.php';
$_result=mysql_query("select id,time,title,content  from english_news where type='support' order by time desc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title>技术支持|技术参数|高压风机技术|漩涡气泵维护|气泵保养|旋涡风机|真空泵|浙江格凌实业有限公司</title>
<meta name="description" content="浙江格凌实业有限公司是一家专业从事空气流体设备）（压缩、真空）的国家高新技术企业，公司形成了以高压风机，漩涡气泵，旋涡风机，高压鼓风机为主，其他空气流体设备（真空泵和压缩机）为辅，集研发、生产、销售、服务于一体的发展格局，公司已经成为中国乃至全球真空和压缩领域的领导者." />
<meta name="keywords" content="高压风机,漩涡气泵,旋涡气泵,气环风机,漩涡风机,旋涡风机,气环风机,真空泵,单段,双段,三段,多段式2RB,3RB,4RB 系列,GREENCO，格凌，格凌风机，浙江格凌实业有限公司," />
<script src="js/menu.js" type="text/javascript"></script>
<link href="css/main.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet"  type="text/css"  href="uniform/css/uniform.default.css"/>
<link href="favicon.ico" rel="shortcut icon" />
<script src="js/jquery-1.7.2.js"></script>
<!-- 无刷新分页 -->
<script src="js/jquery.quickpaginate.js" type="text/javascript" ></script>
<script type="text/javascript">
	$(function(){
		$(".mypagination").quickpaginate({
			perpage: 5,//每页显示条数,
			pager : $("#page_text") //div的ID
		})
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
  	#Side_Channel_Blower_2RB_Single_Stage{height:1070px;width:1000px;margin:0 auto;background:#fff;border:1px solid #999;border-top:none;}
    #Side_Channel_Blower_2RB_Single_Stage .left{float:left;width:265px;margin:5px 0 0 10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left H2{text-indent:10px;background:#666;font-size:14px;font-weight:600;width:250px;height:28px;color:#fff;line-height:28px;border:1px solid  #555;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul{margin-top:8px;list-style:none;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li {margin-top:13px;background:url(image/jiantou.png) no-repeat 0 2px;padding-left:18px;}
    #Side_Channel_Blower_2RB_Single_Stage .left form p{margin-top:10px;width:240px;padding-left:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li  a{color:#333;}
  	#Side_Channel_Blower_2RB_Single_Stage .left .text{border-radius:0px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left select{margin-left:8px;border-radius:0px;}
	#Side_Channel_Blower_2RB_Single_Stage .right{height:770px;float:left;width:700px;border-left:1px solid #ccc;padding:0 0 0 15px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right h5{color:#444;font-weight:600;font-size:14px;margin-top:10px;text-align:center;height:15px;line-height:15px;font-family:microsoft yahei;}
  	#Side_Channel_Blower_2RB_Single_Stage .right  #mypage{float:left;margin:0 0 20px 22px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right  #mypage img:hover{filter:alpha(opacity=90);opacity=0.9;}
  	#Side_Channel_Blower_2RB_Single_Stage .right h4 a{font-size:13px;color:#333;display:block;width:200px;text-indent:70px;height:20px;line-height:20px;font-weight:500;background:url(image/arrow04.gif) no-repeat 70px 6px;padding-left:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right ul{list-style:none;}
  	#Side_Channel_Blower_2RB_Single_Stage .right ul li{padding-left:7px;margin-top:5px;border-bottom:1px solid  #ccc;line-height:30px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right ul li p{font-family:tahoma;}
  	#Side_Channel_Blower_2RB_Single_Stage .right ul li p.more{text-indent:610px;color:#666;}
  	#Side_Channel_Blower_2RB_Single_Stage .right ul li p strong{color:#273a74;font-size:13px;background:url(image/arrows.png) no-repeat -2px 1px;padding-left:15px;}
    #Side_Channel_Blower_2RB_Single_Stage .right ul li p strong span{float:right;margin-right:15px;color:#777;font-weight:500;font-size:13px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right ul li p strong a{color:#555;}
#Side_Channel_Blower_2RB_Single_Stage .right ul li p strong a:hover{color:#263c73;}
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
       <img src="image/support.jpg" style="margin:10px 0 0 10px;border:1px solid #bbb;" alt="Greenco side channel blower news"/>
       <div class="left">
             <h2 style="margin-top:8px;font-family:tahoma;">Support</h2>
                 <ul>

	                  <li style="margin-top:-2px;"><a href="Support.php">Technical Support</a></li>

                  </ul>

       </div>
       <div class="right">
       <h4 style="margin:15px 0 10px 0;height:30px;line-height:30px;color:#eee;text-indent:5px;font-size:14px;font-family:tahoma;background:#666;">Technical Support</h4>
       <ul>
       <?php  while($_rows=mysql_fetch_array($_result)){?>
            <li class="mypagination"><p></p><p><strong><a href="support_content.php?id=<?php echo $_rows['id'];?>"><?php echo $_rows['title'];?></a></strong></p><p><?php echo strip_tags(_title($_rows['content']));?></p><p class="more"><?php echo $_rows['time'];?></p></li>
       <?php }?>
       </ul>
       <div  id="page_text"></div>
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


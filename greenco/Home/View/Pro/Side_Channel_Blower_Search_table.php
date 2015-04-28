<?php

//让这个常量存在就能调用
define('feifa',ture);
require 'setLan.php';
//引入公共文件
require 'inc/common.php';
$search=trim($_POST['term']);
$_result=mysql_query("select type,Fre_quency,output,maximum_airflow,maximum_vacuum,maximum_pressure  from product  where type like '%{$search}%' order by id asc ");
$_result1=mysql_query("select type,Fre_quency,output,maximum_airflow,maximum_vacuum,maximum_pressure  from ie2 where type like '%{$search}%' order by id asc ");
if($_POST['term']=='' or $_POST['term']=='You bastard!' or $_POST['term']=='You bastard!'){echo  "<script type='text/javascript'>
  	           window.history.back(-1);
  	            </script>";
    exit();}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title><?php echo $search;?> Search Results of Side Channel Blower</title>
<meta name="description" content="Search Results FOR Greenco Side channel blower,Regenerative blower,Ring blower,Air blower." />
<meta name="keywords" content="Side channel blower,Regenerative blower,Ring blower,Air blower,Vacuum pump,single stage,double stage,multi stage blower,2RB,3RB,4RB series,GREENCO" />
<script src="js/menu.js" type="text/javascript"></script>
<link  type="text/css" rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet"  type="text/css"  href="uniform/css/uniform.default.css"/>
<link href="favicon.ico" rel="shortcut icon" />
<script src="js/jquery-1.7.2.js"></script>
<!-- 无刷新分页 -->
<script src="js/jquery.quickpaginate.js" type="text/javascript" ></script>
<script type="text/javascript">
	$(function(){
		$(".content").quickpaginate({
			perpage: 19,//每页显示条数,
			pager : $("#page_text") //div的ID
		})

	    $('table tr.content ').hover(//表格单行经过
			  function(){
               $(this).css('background','#2459A2').css('color','#eee').css('cursor','pointer');
               $(this).find('a').css('color','#fff');
	         },
			  function(){
	               $(this).css('background','#fff').css('color','#333');
	               $(this).find('a').css('color','#333');
		         }

	   )
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
  	#Side_Channel_Blower_2RB_Single_Stage{height:1200px;width:1000px;margin:0 auto;background:#fff;border:1px solid #999;border-top:none;box-shadow:0px 5px 7px 5px #ccc;}
    #Side_Channel_Blower_2RB_Single_Stage .left{float:left;width:265px;margin:5px 0 0 10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left H2{text-indent:10px;background:#666;font-size:14px;font-weight:600;width:250px;height:32px;color:#fff;line-height:32px;border:1px solid  #555;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul{margin-top:8px;list-style:none;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li {margin-top:13px;background:url(image/jiantou.png) no-repeat 0 2px;padding-left:18px;}
    #Side_Channel_Blower_2RB_Single_Stage .left form p{margin-top:10px;width:240px;padding-left:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li  a{color:#333;}
  	#Side_Channel_Blower_2RB_Single_Stage .left .text{border-radius:0px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left select{margin-left:8px;border-radius:0px;}
	#Side_Channel_Blower_2RB_Single_Stage .right{height:980px;float:left;width:700px;border-left:1px solid #ccc;padding:0 0 0 15px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right h5{background:url(image/arrow04.gif) no-repeat 0px 9px;padding-left:10px;color:#444;font-weight:600;font-size:14px;margin-top:10px;height:25px;line-height:25px;margin-bottom:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right  #mypage{float:left;margin:0 0 20px 22px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right  #mypage img:hover{filter:alpha(opacity=90);opacity=0.9;}
  	#Side_Channel_Blower_2RB_Single_Stage .right h4 a{font-size:13px;color:#333;display:block;width:200px;text-indent:70px;height:20px;line-height:20px;font-weight:500;background:url(image/arrow04.gif) no-repeat 70px 6px;padding-left:10px;}
    #Side_Channel_Blower_2RB_Single_Stage .right h3 {margin-top:20px;background:url(image/download.png) no-repeat  150px 9px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right h3 a{font-style:italic;display:block;text-decoration:underline;color:#26428A;font-size:14px;text-indent:170px;font-weight:900;height:35px;line-height:35px;}
  	table{background:#fff;font-size:13px;color:#444;border:1px solid #999;border-right:none;}
    tr,td{width:140px;height:39px;text-align:center;line-height:39px;border-right:1px solid #999;border-bottom:1px solid #999;}
    tr.one td{background:#ddd;color:#333;font-weight:900;font-size:13px;height:35px;}
    tr.two td{color:#444;font-weight:900;font-size:13px;height:35px;}
    table a{color:#333;}
    /*文字分页*/
	#page_text{
		clear:both;
		text-align:center;
		font-size:16px;
		color:#333;
		height:40px;
		margin-top:20px;
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
       <img src="image/product_banner.png" style="margin:10px 0 0 10px;"/>
		<?php require 'inc/prod-left.php';?>
       <div class="right">
             <h5><i><span style="color:#af0a05;"><?php  echo $_POST['term'];?></span> Product Search Result</i> ▪ Side Channel Blower</h5>
             <table  cellspacing="0" cellpadding="0" id="data">
                 <?php require 'inc/date-hd.php';?>
                 <tr class="two"><td>一</td><td style="width:100px;">Hz</td><td style="width:65px;">Kw</td><td>m³/h</td><td>mbar</td><td style="width:150px;">mbar</td></tr>
                   <?php  while($_rows=mysql_fetch_array($_result)){?>
                             <tr class="content" onclick="window.location.href='Side_Channel_Blower_Search_content.php?series=<?php echo $_rows['type'];?>&output=<?php echo $_rows['output'];?>' "><td><strong style="font-size:12px;"><a href="Side_Channel_Blower_Search_content.php?series=<?php echo $_rows['type'];?>&output=<?php echo $_rows['output'];?>"><?php  echo $_rows['type'];?></a></strong></td><td style="width:100px;"><?php  echo $_rows['Fre_quency'];?></td><td style="width:65px;"><?php  echo $_rows['output'];?></td><td><?php  echo $_rows['maximum_airflow'];?></td><td><?php  echo $_rows['maximum_vacuum'];?></td><td><?php  echo $_rows['maximum_pressure'];?></td></tr>
                  <?php }?>
                  <?php  while($_rows=mysql_fetch_array($_result1)){?>
                             <tr class="content" onclick="window.location.href='Side_Channel_Blower_Search_content.php?series=<?php echo $_rows['type'];?>&output=<?php echo $_rows['output'];?>' "><td><strong style="font-size:12px;"><a href="Side_Channel_Blower_Search_content.php?series=<?php echo $_rows['type'];?>&output=<?php echo $_rows['output'];?>"><?php  echo $_rows['type'];?></a></strong></td><td style="width:100px;"><?php  echo $_rows['Fre_quency'];?></td><td style="width:65px;"><?php  echo $_rows['output'];?></td><td><?php  echo $_rows['maximum_airflow'];?></td><td><?php  echo $_rows['maximum_vacuum'];?></td><td><?php  echo $_rows['maximum_pressure'];?></td></tr>
                  <?php }?>
                </table>
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


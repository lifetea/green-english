﻿<?php

//让这个常量存在就能调用
define('feifa',ture);
//引入公共文件
require 'inc/common.php';
$_result=mysql_query("select type,Fre_quency,output,maximum_airflow,maximum_vacuum,maximum_pressure  from IE2 where  type like '%2RB {$_GET['series']}%' ");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title>2RB <?php  echo $_GET['series'];?> IE2 Series Regenerative Blower</title>
<meta name="description" content="IE2 blower,EFF1 blower,IE3,Regenerative blower,Ring blower with NSK,SKF bearing high temperaturer grease,The world leader in manufacturer,export to more than 100 countries by Greenco." />
<meta name="keywords" content="IE2,IE3,EFF1,EFF2,Side channel blower,Regenerative blower,Ring blower,single stage,double stage,multi stage blower,high efficiency blower,2RB,3RB,4RB series,GREENCO" />
<script src="js/menu.js" type="text/javascript"></script>
<link  type="text/css" rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet"  type="text/css"  href="uniform/css/uniform.default.css"/>
<link href="favicon.ico" rel="shortcut icon" />
<script src="js/jquery-1.7.2.js"></script>
<!-- 无刷新分页 -->
<script src="js/jquery.quickpaginate.js" type="text/javascript" ></script>
<script type="text/javascript">
	$(function(){
		$(".mypagination").quickpaginate({
			perpage: 15,//每页显示条数,
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
       <div class="left">
             <h2 style="margin-top:5px;">Side Channel Blower</h2>
                 <ul>
	                  <li style="margin-top:-2px;"><a href="Side_Channel_Blower_2RB_Single_Stage.php">2RB Single Stage Side Channel Blower</a></li>
	                  <li><a href="Side_Channel_Blower_2RB_Double_Stage.php">2RB Double Stage Side Channel Blower</a></li>
	                  <li><a href="Side_Channel_Blower_4RB_Single_Stage.php">4RB Single Stage Side Channel Blower</a></li>
	                  <li><a href="Side_Channel_Blower_4RB_Double_Stage.php">4RB Double Stage Side Channel Blower</a></li>
	                  <li><a href="Side_Channel_Blower_4RB_Three_Stage.php">4RB Three Stage Side Channel Blower</a></li>
	                  <li><a href="Belt_Drive_Air_Blower_2RB_Single_Stage.php">2RB Single Stage Belt Drive Air Blower</a></li>
	                  <li><a href="Belt_Drive_Air_Blower_2RB_Double_Stage.php">2RB Double Stage Belt Drive Air Blower</a></li>
	                  <li><a href="IE2_Single_Stage_Regenerative_Blower.php">IE2 Single Stage Regenerative Blower</a></li>
	                  <li><a href="IE2_Double_Stage_Regenerative_Blower.php">IE2 Double Stage Regenerative Blower</a></li>
	                  <li><a href="Cover_Suction_Ring_Blower.php" style="background:url(image/new.gif) no-repeat 154px -2px;display:block;">Cover Suction Ring Blower</a></li>
                  </ul>
             <h2 style="margin-top:13px;">Accessories</h2>
                  <ul>
	                  <li style="margin-top:-2px;"><a href="Silencer.php">Silencer</a></li>
	                  <li><a href="Inlet Vacuum Filter.php">Inlet Vacuum Filter</a></li>
	                  <li><a href="Relief_Valve.php">Relief Valve</a></li>
                  </ul>
              <h2 style="margin-top:13px;">Liquid Ring Vacuum Pump</h2>
                  <ul>
              	      <li><a href="Liquid_Ring_Vacuum_Pump_2LV7.php">2LV7 Series</a></li>
              	      <li><a href="Liquid_Ring_Vacuum_Pump_2LV5.php">2LV5 Series</a></li>
                  </ul>
             <h2 style="margin-top:26px;background:#666 url(image/search_top.png) no-repeat 0 2px;padding-left:18px;width:230px;">Search Product</h2>
                 <form mehtod="post"  action="?">

              	      <p>Search a suitable product for your use, on the basis of air flow and pressure.</p>
                      <p>1:Select a Graph:<select><option>Pressure</option><option>Vacuum</option></select></p>
                      <p>2:Air Flow(e.g.120):</p>
                      <p><input type="text" class="text"/><select><option>m³/h</option><option>m³/min</option></select></p>
                      <p>3:Pressure(e.g.200):</p>
                      <p><input type="text" class="text"/><select><option>mbar</option><option>pa</option></select></p>
                      <p><input type="image" src="image/search.gif"/></p>

                 </form>
       </div>
       <div class="right">
             <h5><i>2RB <?php echo  $_GET['series'];?> IE2 Series Ordering Data and Performance Data</i> ▪ Side Channel Blower</h5>
             <table  cellspacing="0" cellpadding="0" id="data">
                 <tr class="one"><td>Order No.</td><td style="width:100px;">Fre-quency</td><td style="width:65px;">Output</td><td>Maximum Airflow</td><td>Maximum Vacuum</td><td style="width:150px;">Maximum Pressure</td></tr>
                 <tr class="two"><td>一</td><td style="width:100px;">Hz</td><td style="width:65px;">Kw</td><td>m³/h</td><td>mbar</td><td style="width:150px;">mbar</td></tr>
                   <?php  while($_rows=mysql_fetch_array($_result)){?>
                             <tr class="content" onclick="window.location.href='IE2_Single_Stage_Regenerative_Blower_content.php?series=<?php echo $_rows['type'];?>&output=<?php echo $_rows['output'];?>' "><td><strong style="font-size:12px;"><a href="IE2_Single_Stage_Regenerative_Blower_content.php?series=<?php echo $_rows['type'];?>&output=<?php echo $_rows['output'];?>"><?php  echo $_rows['type'];?></a></strong></td><td style="width:100px;"><?php  echo $_rows['Fre_quency'];?></td><td style="width:65px;"><?php  echo $_rows['output'];?></td><td><?php  echo $_rows['maximum_airflow'];?></td><td><?php  echo $_rows['maximum_vacuum'];?></td><td><?php  echo $_rows['maximum_pressure'];?></td></tr>
                  <?php }?>
                </table>
                 <h3><a href="upfile/IE2_series/side channel blower 2rb<?php echo substr($_GET['series'],0,3)?>-IE2.pdf" target="_blank" >Download Side Channel Blower 2RB<?php echo substr($_GET['series'],0,3)?> Series(PDF-<?php $type=$_GET['series'];$filename ='upfile/IE2_Series/side channel blower 2RB'.$type.'-IE2.PDF'; echo floor(filesize($filename)/1024);?>KB)</a></h3>
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


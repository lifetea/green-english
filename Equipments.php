﻿<?php require 'setLan.php';?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />

<?php
if($lan == "zh_CN"){
	 require 'seo/cn/Equipments.php';
}else{
	 require 'seo/en/Equipments.php';
}

 ?>
<script src="js/menu.js" type="text/javascript"></script>
<link  type="text/css" rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet"  type="text/css"  href="uniform/css/uniform.default.css"/>
<link href="favicon.ico" rel="shortcut icon" />
<script src="fancybox/jquery-1.10.1.min.js"></script>
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.6.pack.js"></script>

	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" />
    <script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancybox/helpers/jquery.fancybox-buttons.css" />
	<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-buttons.js"></script>


<script>
$(function(){
	//点击图片放大
	$('.fancybox').fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',

		closeBtn		: false,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}

		});
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
   #Equipments _all{background:#ccc;}
  	#Equipments {height:1410px;width:1000px;margin:0 auto;background:#fff;border:1px solid #999;border-top:none;box-shadow:0px 5px 7px 5px #ccc;}
    #Equipments  .left{float:left;width:265px;margin:5px 0 0 10px;padding-bottom:60px;}
  	#Equipments  .left H2{text-indent:8px;background:#666;font-size:14px;font-weight:600;width:250px;height:32px;color:#fff;line-height:32px;border:1px solid  #555;}
  	#Equipments  .left ul{margin-top:8px;list-style:none;}
  	#Equipments  .left ul li {margin-top:13px;background:url(image/jiantou.png) no-repeat 0 2px;padding-left:18px;}
    #Equipments  .left form p{margin-top:10px;width:240px;padding-left:10px;}
  	#Equipments  .left ul li  a{color:#333;}
  	#Equipments  .left .text{border-radius:0px;}
  	#Equipments  .left select{margin-left:8px;border-radius:0px;}
	#Equipments  .right{height:860px;float:left;width:700px;border-left:1px solid #ccc;padding:0 0 30px 15px;}
    #Equipments  .right h5{margin-top:10px;border-bottom:1px solid #ccc;height:30px;line-height:30px;color:#1b347e;}
	#Equipments  .right p{padding:3px;line-height:21px;text-indent:20px;text-align: center;}
 	#Equipments  .right img{width:250px;height:150px;border:1px solid #999;border-bottom:2px solid #666;}
    #Equipments  .right img:hover{filter:alpha(opacity=90);opacity=0.9;}
  	#Equipments .right .Equipments_image{float:left;margin:25px 0 0 90px;}
  	#Equipments .right #Equipments_image1{margin-left:40px;}
  	#Equipments .right .Equipments_image p{text-indent:40px;}
  	#Equipments .right  a{color:#333;}
  	#copyright a{color:#999;font-variant:normal;}
	#copyright p{font-variant:normal;}
    #copyright ul li{margin-top:5px;}
</style>
</head>
<body id="homepage" >

<?php require 'inc/header_inc.php';?>


<!-- 质量认证内容 -->
<div id="Equipments _all" >
   <div id="Equipments">
       <img src="image/about_banner.png" style="margin:8px 0 0 8px;border:1px solid #999;"/>
       <div class="left">
			<?php require 'inc/about-left.php';?>
			<?php require 'inc/search-left.php';?>
       </div>
       <div class="right">
             <h5><?php echo _('Equipments');?><span style="margin-left:440px;font-weight:500;font-size:13px;"><a href="index.php"><?php echo _('Home');?></a> > <a href="Equipments.php"><?php echo _('Equipments');?></a></span></h5>
					<div class="Equipments_image" id="Equipments_image1"><a class="fancybox" href="image/jifang1.jpg" data-fancybox-group="gallery" title="<strong>Sparepart Warehouse</strong>"><img src="image/jifang1_sub.jpg" alt="Sparepart Warehouse GREENCO Side Channel Blower Equipments" /><p><a href="#"><?php echo _('Sparepart Warehouse');?></a></p></a></div>
					<div class="Equipments_image" ><a class="fancybox" href="image/jifang2.jpg" data-fancybox-group="gallery" title="<strong>Precision Production Line</strong>"><img src="image/jifang2_sub.jpg" alt="Precision Production Line GREENCO Side Channel Blower Equipments" /><p><a href="#"><?php echo _('Precision Production Line');?></a></p></a></div>
					<div class="Equipments_image" id="Equipments_image1"><a class="fancybox" href="image/jifang3.jpg" data-fancybox-group="gallery" title="<strong>Die Casting Workshop</strong>"><img src="image/jifang3_sub.jpg" alt="Die Casting Workshop GREENCO Side Channel Blower Equipments" /><p><a href="#"><?php echo _('Die Casting Workshop');?></a></p></a></div>
                    <div class="Equipments_image"><a class="fancybox" href="image/jifang4.jpg" data-fancybox-group="gallery" title="<strong>Assembling Line</strong>"><img src="image/jifang4_sub.jpg" alt="Assembling Line GREENCO Side Channel Blower Equipments" /><p><a href="#"><?php echo _('Assembling Line');?></a></p></a></div>
					<div class="Equipments_image" id="Equipments_image1"><a class="fancybox" href="image/jifang5.jpg" data-fancybox-group="gallery" title="<strong>Carl Zeiss CMM</strong>"><img src="image/jifang5_sub.jpg" alt="Q&C Department GREENCO Side Channel Blower Equipments" /><p><a href="#"><?php echo _('Carl Zeiss CMM');?></a></p></a></div>
				    <div class="Equipments_image"><a class="fancybox" href="image/jifang6.jpg" data-fancybox-group="gallery" title="<strong>Packing Line</strong>"><img src="image/jifang6_sub.jpg" alt="Packing Line GREENCO Side Channel Blower Equipments" /><p><a href="#"><?php echo _('Packing Line');?></a></p></a></div>
				    <div class="Equipments_image" id="Equipments_image1"><a class="fancybox" href="image/jifang7.jpg" data-fancybox-group="gallery" title="<strong>Shipping</strong>"><img src="image/jifang7_sub.jpg" alt="Shipping GREENCO Side Channel Blower Equipments" /><p><a href="#"><?php echo _('Shipping');?></a></p></a></div>
					<div class="Equipments_image"><a class="fancybox" href="image/jifang10.jpg" data-fancybox-group="gallery" title="<strong>Outgoing Inspection</strong>"><img src="image/jifang8_sub.jpg" alt="Outgoing Inspection GREENCO Side Channel Blower Equipments" /><p><a href="#"><?php echo _('Outgoing Inspection');?></a></p></a></div>
					<div class="Equipments_image" id="Equipments_image1"><a class="fancybox" href="image/jifang11.jpg" data-fancybox-group="gallery" title="<strong>AUTO motor winding</strong>"><img src="image/jifang11_sub.jpg" alt="AUTO motor winding GREENCO Side Channel Blower Equipments" /><p><a href="#"><?php echo _('AUTO motor winding');?></a></p></a></div>
					<div class="Equipments_image"><a class="fancybox" href="image/jifang10.jpg" data-fancybox-group="gallery" title="<strong>SCHNEEBERGER Grinder</strong>"><img src="image/jifang10_sub.jpg" alt="SCHNEEBERGER Grinder GREENCO Side Channel Blower Equipments" /><p><a href="#"><?php echo _('SCHNEEBERGER Grinder');?></a></p></a></div>
       </div>
   </div>
</div>
<!-- 质量认证end -->

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


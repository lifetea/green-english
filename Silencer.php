<?php
require 'setLan.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title><?php echo _('Side Channel Blower Silencer'); ?></title>
<meta name="description" content="<?php echo _('Silencers are used for the reduce in positive displacement air blowers and vacuum pumps.'); ?>" />
<meta name="keywords" content="<?php echo _('Silencer,Blower Silencer,Air Silencer,Side channel blower,Regenerative blower,Ring blower,Air blower,Vacuum pump,2BX4 series,GREENCO'); ?>" />
<script src="js/menu.js" type="text/javascript"></script>
<link  type="text/css" rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet"  type="text/css"  href="uniform/css/uniform.default.css"/>
<link href="favicon.ico" rel="shortcut icon" />
<script src="js/jquery-1.7.2.js"></script>
<!-- 无刷新分页 -->
<script src="js/jquery.quickpaginate.js" type="text/javascript" ></script>
<script  type="text/javascript" src="layer/layer.js"></script>
<script type="text/javascript">
	$(function(){
		$(".mypagination").quickpaginate({
			perpage: 15,//每页显示条数,
			pager : $("#page_text") //div的ID
		})

		$('#LV5').on('click', function(){
			layer.tips('Product is under development, please look. thank you!' , this, 10, 220, 0, ['background-color:#205097; color:#eee;','#205097']);
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
    #Silencer_all{background:#ccc;}
  	#Silencer{height:1110px;width:1000px;margin:0 auto;background:#fff;border:1px solid #999;border-top:none;box-shadow:0px 5px 7px 5px #ccc;}
    #Silencer .left{float:left;width:265px;margin:5px 0 0 10px;}
  	#Silencer .left H2{text-indent:10px;background:#666;font-size:14px;font-weight:600;width:250px;height:32px;color:#fff;line-height:32px;border:1px solid  #555;}
  	#Silencer .left ul{margin-top:8px;list-style:none;}
  	#Silencer .left ul li {margin-top:13px;background:url(image/jiantou.png) no-repeat 0 2px;padding-left:18px;}
    #Silencer .left form p{margin-top:10px;width:240px;padding-left:10px;}
  	#Silencer .left ul li  a{color:#333;}
  	#Silencer .left .text{border-radius:0px;}
  	#Silencer .left select{margin-left:8px;border-radius:0px;}
	#Silencer .right{height:870px;float:left;width:700px;border-left:1px solid #ccc;padding:0 0 30px 15px;}
  	#Silencer .right h5{color:#444;font-weight:600;font-size:14px;margin-top:10px;text-Indent:230px;height:25px;line-height:25px;margin-bottom:10px;}
  	#Silencer .right  #mypage{float:left;margin:0 0 20px 22px;}
  	#Silencer .right  #mypage img{border:1px solid #bbb;}
  	#Silencer .right  #mypage img:hover{filter:alpha(opacity=90);opacity=0.9;border:1px solid #666;}
  	#Silencer .right h4 a{font-size:12px;color:#333;display:block;width:200px;text-indent:20px;height:30px;line-height:30px;font-weight:500;background:url(image/arrow04.gif) no-repeat 20px 12px;padding-left:10px;}
  	/*文字分页*/
	#page_text{
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
<div id="Silencer_all" >
   <div id="Silencer">
       <img src="image/product_banner.png" style="margin:10px 0 0 10px;"/>
		<?php require 'inc/prod-left.php';?>
       <div class="right">
             <h5><?php echo _('Silencer for Side Channel Blower');?></h5>
             <div  id="mypage" class="mypagination"><a href="silencer_content.php?type=2BX4 011" target="_blank"><img  src="image/Silencer.png" alt="Side channel blower silencer 2BX4-011"/></a><h4><a href="silencer_content.php?type=2BX4 011" target="_blank"><?php echo _('Silencer');?> 2BX4-011</a></h4></div>
             <div  id="mypage" class="mypagination"><a href="silencer_content.php?type=2BX4 012" target="_blank"><img  src="image/Silencer.png" alt="Side channel blower silencer 2BX4-012"/></a><h4><a href="silencer_content.php?type=2BX4 012" target="_blank"><?php echo _('Silencer');?> 2BX4-012</a></h4></div>
             <div  id="mypage" class="mypagination"><a href="silencer_content.php?type=2BX4 013" target="_blank"><img  src="image/Silencer.png" alt="Side channel blower silencer 2BX4-013"/></a><h4><a href="silencer_content.php?type=2BX4 013" target="_blank"><?php echo _('Silencer');?> 2BX4-013</a></h4></div>
             <div  id="mypage" class="mypagination"><a href="silencer_content.php?type=2BX4 014" target="_blank"><img  src="image/Silencer.png" alt="Side channel blower silencer 2BX4-014"/></a><h4><a href="silencer_content.php?type=2BX4 014" target="_blank"><?php echo _('Silencer');?> 2BX4-014</a></h4></div>
             <div  id="mypage" class="mypagination"><a href="silencer_content.php?type=2BX4 015" target="_blank"><img  src="image/Silencer.png" alt="Side channel blower silencer 2BX4-015"/></a><h4><a href="silencer_content.php?type=2BX4 015" target="_blank"><?php echo _('Silencer');?> 2BX4-015</a></h4></div>
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


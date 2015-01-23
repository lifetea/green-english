<?php
//让这个常量存在就能调用
@define('feifa',ture);
//引入公共文件
require 'setLan.php';
require 'inc/common.php';


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<?php
if($lan == "zh_CN"){
	 require 'seo/cn/IE2_Double_Stage_Regenerative_Blower.php';
}else{
	 require 'seo/en/IE2_Double_Stage_Regenerative_Blower.php';
}

 ?>
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
  	#Side_Channel_Blower_2RB_Single_Stage{height:1410px;width:1000px;margin:0 auto;background:#fff;border:1px solid #999;border-top:none;box-shadow:0px 5px 7px 5px #ccc;}
    #Side_Channel_Blower_2RB_Single_Stage .left{float:left;width:265px;margin:5px 0 0 10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left H2{text-indent:10px;background:#666;font-size:14px;font-weight:600;width:250px;height:32px;color:#fff;line-height:32px;border:1px solid  #555;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul{margin-top:8px;list-style:none;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li {margin-top:13px;background:url(image/jiantou.png) no-repeat 0 2px;padding-left:18px;}
    #Side_Channel_Blower_2RB_Single_Stage .left form p{margin-top:10px;width:240px;padding-left:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li  a{color:#333;}
  	#Side_Channel_Blower_2RB_Single_Stage .left .text{border-radius:0px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left select{margin-left:8px;border-radius:0px;}
	#Side_Channel_Blower_2RB_Single_Stage .right{float:left;height:910px;width:700px;border-left:1px solid #ccc;padding:0 0 0 15px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right h5{color:#444;font-weight:600;font-size:14px;margin-top:10px;text-align:center;height:25px;line-height:25px;margin-bottom:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right  #mypage{float:left;margin:0 0 20px 22px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right  #mypage img:hover{filter:alpha(opacity=90);opacity=0.9;}
  	#Side_Channel_Blower_2RB_Single_Stage .right img{border:1px solid #999;}
  	#Side_Channel_Blower_2RB_Single_Stage .right h4 a{font-size:13px;color:#333;display:block;width:200px;text-indent:55px;height:20px;line-height:20px;font-weight:500;background:url(image/arrow04.gif) no-repeat 55px 6px;padding-left:10px;}
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
<div id="Side_Channel_Blower_2RB_Single_Stage_all" >
   <div id="Side_Channel_Blower_2RB_Single_Stage">
       <img src="image/product_banner.png" style="margin:10px 0 0 10px;"/>
       <?php require 'inc/prod-left.php';?>
       <div class="right">
             <h5><i> IE2 <?php echo _('  Double Stage');?></i><?php echo _('  ▪ Regenerative Blower');?></h5>
		     <div  id="mypage" class="mypagination"><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=220" target="_blank"><img  src="product_image/IE2/2RB220_IE2.jpg"/></a><h4><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=220" target="_blank">2RB 220</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=320" target="_blank"><img  src="product_image/IE2/2RB320_IE2.jpg" /></a><h4><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=320" target="_blank">2RB 320</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=420" target="_blank"><img  src="product_image/IE2/2RB420_IE2.jpg" /></a><h4><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=420" target="_blank">2RB 420</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=520" target="_blank"><img  src="product_image/IE2/2RB520_IE2.jpg"/></a><h4><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=520" target="_blank">2RB 520</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=720" target="_blank"><img  src="product_image/IE2/2RB720_IE2.jpg" /></a><h4><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=720" target="_blank">2RB 720</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=740" target="_blank"><img  src="product_image/IE2/2RB740_IE2.jpg"/></a><h4><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=740" target="_blank">2RB 740</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=820" target="_blank"><img  src="product_image/IE2/2RB820_IE2.jpg"  /></a><h4><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=820" target="_blank">2RB 820</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=840" target="_blank"><img  src="product_image/IE2/2RB840_IE2.jpg" /></a><h4><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=840" target="_blank">2RB 840</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=920" target="_blank"><img  src="product_image/IE2/2RB920_IE2.jpg" /></a><h4><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=920" target="_blank">2RB 920</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=940" target="_blank"><img  src="product_image/IE2/2RB940_IE2.jpg" /></a><h4><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=940" target="_blank">2RB 940</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=943" target="_blank"><img  src="product_image/IE2/2RB943_IE2.jpg" /></a><h4><a href="IE2_Double_Stage_Regenerative_Blower_table.php?series=943" target="_blank">2RB 943</a></h4></div>
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


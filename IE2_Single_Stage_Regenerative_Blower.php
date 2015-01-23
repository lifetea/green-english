<?php
//让这个常量存在就能调用
@define('feifa',ture);
require 'setLan.php';
require 'inc/common.php';


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<?php
if($lan == "zh_CN"){
	 require 'seo/cn/IE2_Single_Stage_Regenerative_Blower.php';
}else{
	 require 'seo/en/IE2_Single_Stage_Regenerative_Blower.php';
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
    #Side_Channel_Blower_2RB_Single_Stage .left{float:left;width:265px;margin:5px 0 0 10px;padding-bottom:60px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left H2{text-indent:10px;background:#666;font-size:14px;font-weight:600;width:250px;height:32px;color:#fff;line-height:32px;border:1px solid  #555;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul{margin-top:8px;list-style:none;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li {margin-top:13px;background:url(image/jiantou.png) no-repeat 0 2px;padding-left:18px;}
    #Side_Channel_Blower_2RB_Single_Stage .left form p{margin-top:10px;width:240px;padding-left:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li  a{color:#333;}
  	#Side_Channel_Blower_2RB_Single_Stage .left .text{border-radius:0px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left select{margin-left:8px;border-radius:0px;}
	#Side_Channel_Blower_2RB_Single_Stage .right{float:left;height:960px;width:700px;border-left:1px solid #ccc;padding:0 0 30px 15px;}
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
             <h5><i> IE2 <?php  echo _(' Single Stage');?></i><?php echo _(' ▪ Regenerative Blower');?></h5>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=210" target="_blank"><img  src="product_image/IE2/2RB210_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=210" target="_blank">2RB 210</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=230" target="_blank"><img  src="product_image/IE2/2RB230_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=230" target="_blank">2RB 230</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=310" target="_blank"><img  src="product_image/IE2/2RB310_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=310" target="_blank">2RB 310</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=330" target="_blank"><img  src="product_image/IE2/2RB330_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=330" target="_blank">2RB 330</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=410" target="_blank"><img  src="product_image/IE2/2RB410_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=410" target="_blank">2RB 410</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=430" target="_blank"><img  src="product_image/IE2/2RB430_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=430" target="_blank">2RB 430</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=510" target="_blank"><img  src="product_image/IE2/2RB510_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=510" target="_blank">2RB 510</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=530" target="_blank"><img  src="product_image/IE2/2RB530_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=530" target="_blank">2RB 530</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=610" target="_blank"><img  src="product_image/IE2/2RB610_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=610" target="_blank">2RB 610</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=630" target="_blank"><img  src="product_image/IE2/2RB630_IE2.jpg"  /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=630" target="_blank">2RB 630</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=710" target="_blank"><img  src="product_image/IE2/2RB710_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=710" target="_blank">2RB 710</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=730" target="_blank"><img  src="product_image/IE2/2RB730_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=730" target="_blank">2RB 730</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=810" target="_blank"><img  src="product_image/IE2/2RB810_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=810" target="_blank">2RB 810</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=830" target="_blank"><img  src="product_image/IE2/2RB830_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=830" target="_blank">2RB 830</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=910" target="_blank"><img  src="product_image/IE2/2RB910_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=910" target="_blank">2RB 910</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=930" target="_blank"><img  src="product_image/IE2/2RB930_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=930" target="_blank">2RB 930</a></h4></div>
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


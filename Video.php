<?php
require 'setLan.php';
?>
<!DOCTYPE html">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title><?php echo _('Greenco Video|Product showroom|Blower video|side channel blower_GREENCO');?></title>
<meta name="keywords" content="<?php echo _('Greenco video,workshop,blower video,side channel blower_Greenco');?>" />
<meta name="description"content="<?php echo _('Greenco Side channel blower,Regenerative blower,Ring blower with NSK,SKF bearing high temperaturer grease,The world leader in manufacturer,export to more than 100 countries by Greenco.');?>" />
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


	<script type="text/javascript" src="Video/jwplayer.js"></script>

<script>
$(function(){
	//点击图片放大
	$('.fancybox').fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		padding:10,
		closeBtn		: false,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}

		});

	jwplayer("player").setup({
		  skin: "video/glow.zip",//皮肤地址
		  flashplayer: "video/player.swf",
		  image: "video/bg.jpg",//开始的图片
		  width: 450,//宽度
		  height:320,//高度
		  levels: [{file: "video/greenco.flv"}]//视频路径
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
    #video _all{background:#ccc;}
  	#video {height:760px;width:1000px;margin:0 auto;background:#fff;border:1px solid #999;border-top:none;box-shadow:0px 5px 7px 5px #ccc;}
    #video  .left{float:left;width:265px;margin:5px 0 0 10px;padding-bottom:60px;}
  	#video  .left H2{text-indent:8px;background:#666;font-size:14px;font-weight:600;width:250px;height:32px;color:#fff;line-height:32px;border:1px solid  #555;}
  	#video  .left ul{margin-top:8px;list-style:none;}
  	#video  .left ul li {margin-top:13px;background:url(image/jiantou.png) no-repeat 0 2px;padding-left:18px;}
    #video  .left form p{margin-top:10px;width:240px;padding-left:10px;}
  	#video  .left ul li  a{color:#333;}
  	#video  .left .text{border-radius:0px;}
  	#video  .left select{margin-left:8px;border-radius:0px;}
	#video  .right{height:510px;float:left;width:700px;border-left:1px solid #ccc;padding:0 0 30px 15px;}
    #video  .right h5{margin-top:10px;height:30px;line-height:30px;text-indent:180px;}
	#video  .right h5 a{color:#333;}
    #video  .right p{padding:3px;line-height:21px;text-indent:20px;margin-top:10px;}
  	#copyright a{color:#999;font-variant:normal;}
	#copyright p{font-variant:normal;}
    #copyright ul li{margin-top:5px;}
</style>
</head>
<body id="homepage" >

<?php require 'inc/header_inc.php';?>


<!-- 视频内容 -->
<div id="video _all" >
   <div id="video">
       <img src="image/about_banner.png" style="margin:8px 0 0 8px;border:1px solid #999;"/>
       <div class="left">
			<?php require 'inc/about-left.php';?>
			<?php require 'inc/search-left.php';?>
       </div>
       <div class="right">
             <h5 style="background:url(image/video.gif) no-repeat 178px 7px;padding-left:20px;font-size:14px;color:#1b347e;"><?php echo _('Greenco Side Channel Blowers Video');?></h5>
             <div id="jwplayer" style="background: transparent !important; margin:20px 0 0  100px; width:450px; height:320px; overflow:hidden;padding:7px;border:1px solid #ccc;">
	                 <div id="player"></div>

             </div>
             <p style="text-indent:100px;height:50px;line-height:50px;"><?php echo _('(Production workshop video)');?></p>
       </div>
   </div>
</div>
<!-- 视频内容end -->

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


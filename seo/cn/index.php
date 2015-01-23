<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title>GREENCO-Side Channel Blower|Ring blower|Regenerative blower|Air blower|Vacuum pump</title>
<meta name="description" content="GREENCO_The world leader manufacturer in side channel blower,regenerative blower,ring blower,air blower in China,side channel pumps can be used as vacuum pumps or compressors and are a highly efficient dry running technology for numerous applications." />
<meta name="keywords" content="side channel blower,ring blower,regenerative blower,air blower,vortex blower,vacuum pump,industrial blowers,high pressure blowers,double stage blower,three stage multistage blowers,2RB,3RB,4RB series," />
<script src="js/jquery-1.7.2.js"></script>
<script src="js/swfobject.js"></script>
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
<link  rel="stylesheet"  type="text/css"  href="css/main.css"   />
<link href="favicon.ico" rel="shortcut icon" />
<style>
  	.info-nav li a{margin-left:5px;color:#333;}
  	.info-nav li a:hover{margin-left:5px;}
  	.dropdown{border:1px solid #ccc;}
	ul.main-nav li{margin-left:12px;}
	ul.main-nav li a{font-size:13px;}
  	ul.main-nav li a:hover{background:#555;}
	#copyright a{color:#999;font-variant:normal;}
	#copyright p a{font-variant:normal; color:#888;}
	#copyright p{font-variant:normal;}
    #copyright ul li{margin-top:5px;}
    #sildeContainer{position:relative;width:1000px;margin:0 auto 10px;height: 201px;overflow:hidden}
    #sildeContainer a{position:absolute;}
    #sildeContainer .slider-item img{border:1px solid #999;top:2em;}
</style>
</head>
<body >

<?php require 'inc/header_inc.php';?>


<!--��ҳ����-->
<div id="content" style="margin-top:-8px;">
  <div class="container" style="width:980px;border:1px solid #ccc;padding:10px;background:#fff;">
       <!-- 3DͼƬslider-->
       <div id="cu3er_swf"></div>
  </div>

   <!--������ҪͼƬ-->
   <div id="sildeContainer">
   	<!--3D slider��Ӱ-->
   		<img src="image/bg_tien.png"  style="margin-top:-5px;"/>
   		<div id="wrap">
	   	<!--3D slider��Ӱend-->
			<a class="slider-item" href="http://www.greenco.cn/news_content.php?id=14"  style="left:0px"><img src="image/exhibition-en.jpg"/></a>
			<a class="slider-item" href="about_us.php" style="left:344px;"><img src="image/home2.jpg"/></a>
			<a class="slider-item" href="Side_Channel_Blower_3RB_Single_Stage.php" style="left:688px;"><img src="image/home4.jpg" /></a>
			<a class="slider-item" href="Download.php" style="left:1032px;"><img src="image/home3.jpg" /></a>
			<a id="prev" href="javascript:void(0)" style="left:0x;top:90px;"><img src="image/prev.jpg" /></a>
			<a id="next" href="javascript:void(0)" style="left:978px;top:90px;"><img src="image/next.jpg" /></a>
		</div>
   </div>
   <!--������ҪͼƬend-->
</div>
<!-- ��ҳ����end -->
<script type="text/javascript">

// 	setInterval(function(){
// 		var sliders = $("#sildeContainer .slider-item");
// 		var k = 0,len = sliders.length,flag=true;
// 		for(var i = 0,min = 0;i<len; i++){
// 			var left = parseInt(sliders[i].style.left);
// 			$(sliders[i]).animate({left:(left-344)+"px"},"slow",function(){
// 				console.log(this);
// 				if(parseInt(this.style.left) < 0){
// 					this.style.left = ((len-1)*312+(len-1)*32)+"px";
// 				}
// 			});

// 		}
// 	},5000);

	var  slider = {};


	slider.sync = true;
// 	var sliders = $("#sildeContainer .slider-item");
	
	var fun = function(callback,choose){
		var sliders = $("#sildeContainer .slider-item");
		var k = 0,len = sliders.length;
		var f = !!choose ? 1 : -1;
		if(slider.sync != true){
			return false;
		}
		slider.sync = false;
		for(var i = 0;i<len; i++){
			var left = parseInt(sliders[i].style.left);
			$(sliders[i]).animate({left:(left-344*f)+"px"},"slow",function(){
				if(parseInt(this.style.left) < 0){
					this.style.left = ((len-1*f)*312+(len-1*f)*32)+"px";
					slider.sync = true;
				}
				if(parseInt(this.style.left)> (len-1)*344){
					this.style.left = 0 +"px";
					//$(this).animate({left:0+"px"},"slow")
					slider.sync = true;
				}
			});

		}
	}

	slider.timer = null;

	slider.createTimer = function(){
		slider.timer = setInterval(function(){
			fun(null,true);
		},2500);
	};

	slider.clearTimer = function(){
		clearInterval(slider.timer);
	};

	
	slider.next = function(){
		fun(null,true);
	};

	slider.prev = function(){
		fun(null,false);
	};

	

	slider.pause = function(){
		slider.clearTimer();
	};

	slider.start = function(){
		slider.createTimer();
	};

	$("#next").click(function(){
		slider.next();
	})
	
	$("#prev").click(function(){
		slider.prev();
	})
	
	$("#wrap").hover(slider.pause,slider.start);


	slider.start();
</script>
<?php require 'inc/footer_inc.php';?>

</body>
</html>


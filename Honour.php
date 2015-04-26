<!DOCTYPE html">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<?php require 'setLan.php'; ?>
<title><?php echo _('Honours|Greenco honour_GREENCO');?></title>
<meta name="keywords" content="<?php echo _('Honours,Greenco honour,side channel blower honour,High Tech,Famous brand,trademark,regenerative blower,air blower,GREENCO');?>" />
<meta name="description"content="<?php echo _('Zhejiang Greenco Industry Co Ltd approved by ISO9001:2008 quality system，side channel blower approved by UL、CE、TUV、GS certifications,high quality & competitive price,export to more than 100 countries.');?>" />
<script type="text/javascript" src="js/jquery-1.8.2.js" ></script>
<script type="text/javascript" src="js/menu.js" ></script>
<link  type="text/css" rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet"  type="text/css"  href="uniform/css/uniform.default.css"/>
<link href="favicon.ico" rel="shortcut icon" />
<style>
  	.info-nav li a{margin-left:5px;color:#333;}
  	.info-nav li a:hover{margin-left:5px;}
	ul.main-nav li{margin-left:12px;}
	ul.main-nav li a{font-size:13px;}
  	ul.main-nav li a:hover{background:#555;}
  	h1,h2,h3,h4,h5,h6{font-weight:600;}
  	.dropdown{border:1px solid #ccc;}
   #Honour _all{background:#ccc;height:770px;}
  	#Honour {height:1340px;width:1000px;margin:0 auto;background:#fff;border:1px solid #999;border-top:none;}
    #Honour  .left{float:left;width:265px;margin:5px 0 0 10px;padding-bottom:60px;}
  	#Honour  .left H2{text-indent:8px;background:#666;font-size:14px;font-weight:600;width:250px;height:32px;color:#fff;line-height:32px;border:1px solid  #555;}
  	#Honour  .left ul{margin-top:8px;list-style:none;}
  	#Honour  .left ul li {margin-top:13px;background:url(image/jiantou.png) no-repeat 0 2px;padding-left:18px;}
    #Honour  .left form p{margin-top:10px;width:240px;padding-left:10px;}
  	#Honour  .left ul li  a{color:#333;}
  	#Honour  .left .text{border-radius:0px;}
  	#Honour  .left select{margin-left:8px;border-radius:0px;}
	#Honour  .right{height:1100px;float:left;width:700px;border-left:1px solid #ccc;padding:0 0 30px 15px;}
    #Honour  .right h5{margin-top:10px;border-bottom:1px solid #999;height:30px;line-height:30px;color:#1b347e;}
	#Honour  .right p{padding:3px;line-height:21px;text-align:center;}
  	#Honour  .right div{margin:20px 0 0 30px;float:left;}
	#Honour  .right img{}
  	#Honour  .right img:hover{	filter:alpha(opacity=90);opacity=0.9;}
  	#Honour .right  a{color:#333;font-family:tahoma;}
  	#copyright a{color:#999;font-variant:normal;}
	#copyright p{font-variant:normal;}
    #copyright ul li{margin-top:5px;}
</style>
</head>
<body id="homepage" >

<?php require 'inc/header_inc.php';?>

<!-- 荣誉内容start -->
<div id="Honour _all" >
   <div id="Honour">
       <img src="image/about_banner.png" style="margin:8px 0 0 8px;border:1px solid #999;"/>
       <div class="left">
		     <?php require 'inc/about-left.php';?>
			<?php require 'inc/search-left.php';?>
       </div>
       <div class="right">
             <h5><?php echo _('Honour');?> <span style="margin-left:500px;font-weight:500;font-size:13px;"><a href="index.php"><?php echo _('Home');?></a> > <a href="Honour.php"><?php echo _('Honour');?></a></span></h5>
					<div style="margin-left:50px;"><img src="image/Honour1.jpg" alt="Zhejiang Brand products"  /><p><?php echo _('Zhejiang Brand products');?></p></a></div>
					<div  style="margin-left:190px;"><img src="image/Honour2.jpg" alt="Beautiful  taxpayers'"  /><p><?php echo _('Home');?></p></a></div>
					<div style="margin-left:10px;"><img src="image/Honour7.jpg" alt="High and new tech enterprises"  /><p><?php echo _('High and new tech enterprises');?></p></a></div>
					<div style="margin-left:80px;"><img src="image/Honour3.jpg" alt="Enterprise technology center"  /><p><?php echo _('Enterprise technology center');?></p></a></div>
       		        <div style="margin-left:10px;"><img src="image/Honour6.jpg" alt="The zhejiang province famous trademark"  /><p><?php echo _('The zhejiang province famous trademark');?></p></a></div>
       		        <div style="margin-left:90px;"><img src="image/Honour8.jpg" alt="R&D Center"  /><p><?php echo _('R&D Center');?></p></a></div>
       		        <div style="margin-left:10px;"><img src="image/Honour4.jpg" alt="AA Rated(Keep the contract heavy credit unit)"  /><p><?php echo _('AA Rated(Keep the contract heavy credit unit)');?></p></a></div>
       		        <div style="margin-left:100px;"><img src="image/Honour5.jpg" alt="New mechanical and electrical products"  /><p><?php echo _('New mechanical and electrical products');?></p></a></div>
       </div>
   </div>
</div>
<!-- 荣誉内容end -->

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


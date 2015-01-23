<?php
$domain = 'lan';
bindtextdomain($domain, dirname(__FILE__).'\language');
require 'inc/setLan.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title><?php echo _('3RB Single Stage Side Channel Blower'); ?></title>
<meta name="description" content="<?php echo _('Greenco Side channel blower,Regenerative blower,Ring blower with NSK,SKF bearing high temperaturer grease,The world leader in manufacturer,export to more than 100 countries by Greenco.');?>" />
<meta name="keywords" content="<?php echo _('Side channel blower,Regenerative blower,Ring blower,Air blower,Vacuum pump,single stage,double stage,multi stage blower,2RB,3RB,4RB series,GREENCO');?>" />
<?php require  'inc/header.inc';?>
<link  type="text/css" rel="stylesheet" href="css/main.css"/>
<link  type="text/css" rel="stylesheet" href="css/common.css"/>
<link rel="stylesheet"  type="text/css"  href="uniform/css/uniform.default.css"/>
<link href="favicon.ico" rel="shortcut icon" />
<script src="js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="uniform/jquery.uniform.min.js"></script>
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
</head>
<body id="homepage" >

<?php require 'inc/header_inc.php';?>

<!-- 应用内容 -->
<div id="Side_Channel_Blower_2RB_Single_Stage_all" >
   <div id="Side_Channel_Blower_2RB_Single_Stage">
       <img src="image/product_banner.png" style="margin:10px 0 0 10px;"/>
		<?php require 'inc/prod-left.php';?>
       <div class="right">
       		 <h5><i>3RB <?php echo _('Single Stage');?></i><?php echo _(' ▪ Side Channel Blower');?></h5>
             <?php require 'inc/3RB-desc.php';?>
       		 <div  id="mypage" class="mypagination"><a href="Side_Channel_Blower_3RB_Single_Stage_table.php?series=350-1" target="_blank"><img  src="product_image/3RB/3RB350-1.jpg" /></a><h4><a href="Side_Channel_Blower_3RB_Single_Stage_table.php?series=350-1" target="_blank">3RB 350</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="Side_Channel_Blower_3RB_Single_Stage_table.php?series=550-1"><img  src="product_image/3RB/3RB350-1.jpg" /></a><h4><a href="Side_Channel_Blower_3RB_Single_Stage_table.php?series=550-1">3RB 550</a></h4></div>
		   <!--   <div  id="mypage" class="mypagination"><a href="Side_Channel_Blower_4RB_Single_Stage_table.php?series=410" target="_blank"><img  src="product_image/4RB/4RB210.jpg" /></a><h4><a href="Side_Channel_Blower_4RB_Single_Stage_table.php?series=410" target="_blank">4RB 410</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="Side_Channel_Blower_4RB_Single_Stage_table.php?series=510" target="_blank"><img  src="product_image/4RB/4RB310.jpg" /></a><h4><a href="Side_Channel_Blower_4RB_Single_Stage_table.php?series=510" target="_blank">4RB 510</a></h4></div>
		     <div  id="mypage" class="mypagination"><a href="Side_Channel_Blower_4RB_Single_Stage_table.php?series=610" target="_blank"><img  src="product_image/4RB/4RB310.jpg" /></a><h4><a href="Side_Channel_Blower_4RB_Single_Stage_table.php?series=610" target="_blank">4RB 610</a></h4></div>
	         <div  id="page_text"></div>
	          -->
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


<?php
//让这个常量存在就能调用
define('feifa',ture);
//引入公共文件
require 'inc/common.php';
//自定义函数，判断字符串里是否包含一个字母
function checkstr($str,$need){
	$needle = $need;//判断是否包含a这个字符 例如a
	$tmparray = explode($needle,$str);
	if(count($tmparray)>1){
		return true;
	} else{
		return false;
	}
}
$_result=mysql_query("select type,sound_level,Fre_quency,output,maximum_airflow,maximum_vacuum,maximum_pressure,weight,phases,Inlet_outlet,A,A1,B,B1,C,C1,C2,D,E,F,F1,F11,G,H,H1,J,K,L,M,N,N1,O,P,P1,Q,ϕR,S,S1,S2,S3,T,T1,U,V,V1,V1_,V3,V3_,V_PIE,V_1,V_PIE1,α,Y_Z,X_Holes,ϕX,W,W1,W2  from product where  type like '%{$_GET['series']}%' and output={$_GET['output']} ");
$_result1=mysql_query("select type,sound_level,Fre_quency,output,maximum_airflow,maximum_vacuum,maximum_pressure,weight,phases,Inlet_outlet,A,A1,B,B1,C,C1,D,E,F,F1,F11,G,H,H1,J,K,L,M,N,N1,O,P,Q,ϕR,S,T,α,U,V,V1,V1_,V_1,V3,V3_,Y_Z,X_Holes,ϕX,W  from IE2 where  type like '%{$_GET['series']}%' and output={$_GET['output']} ");
$_rows=mysql_fetch_array($_result);
$_rows1=mysql_fetch_array($_result1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title><?php  ECHO $_GET['series'];?> Technical Data of Side channel blower|GREENCO</title>
<meta name="description" content="Search Results FOR Greenco Side channel blower,Regenerative blower,Ring blower,Air blower." />
<meta name="keywords" content="Side channel blower,Regenerative blower,Ring blower,Air blower,Vacuum pump,single stage,double stage,multi stage blower,2RB,3RB,4RB series,GREENCO" />
<script src="js/menu.js" type="text/javascript"></script>
<link  type="text/css" rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet"  type="text/css"  href="uniform/css/uniform.default.css"/>
<link href="favicon.ico" rel="shortcut icon" />
<script src="js/jquery-1.7.2.js"></script>
<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({
    handleOversize:     "drag",
    handleUnsupported:  "remove",
    autoplayMovies:     false
});
</script>
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
               $(this).css('background','#ddd').css('color','#333').css('cursor','pointer');
	         },
			  function(){
	               $(this).css('background','#fff').css('color','#333');
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
  	#Side_Channel_Blower_2RB_Single_Stage{height:1200px;width:1000px;margin:0 auto;background:#fff;border:1px solid #999;border-top:none;}
    #Side_Channel_Blower_2RB_Single_Stage .left{float:left;width:265px;margin:5px 0 0 10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left H2{text-indent:10px;background:#666;font-size:14px;font-weight:600;width:250px;height:32px;color:#fff;line-height:32px;border:1px solid  #555;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul{margin-top:8px;list-style:none;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li {margin-top:13px;background:url(image/jiantou.png) no-repeat 0 2px;padding-left:18px;}
    #Side_Channel_Blower_2RB_Single_Stage .left form p{margin-top:10px;width:240px;padding-left:10px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left ul li  a{color:#333;}
  	#Side_Channel_Blower_2RB_Single_Stage .left .text{border-radius:0px;}
  	#Side_Channel_Blower_2RB_Single_Stage .left select{margin-left:8px;border-radius:0px;}
	#Side_Channel_Blower_2RB_Single_Stage .right{height:890px;float:left;width:700px;border-left:1px solid #ccc;padding:0 0 100px 15px;position:relative;}
  	#Side_Channel_Blower_2RB_Single_Stage .right img{border:1px solid #bbb;margin-top:10px;}
	#Side_Channel_Blower_2RB_Single_Stage .right img:hover{border:1px solid #666;}
  	#Side_Channel_Blower_2RB_Single_Stage .right h5{clear:both;text-indent:8px;background:#666;height:30px;line-height:30px;color:#fff;border:1px solid #666;font-size:14px;}
	#Side_Channel_Blower_2RB_Single_Stage .right #right{float:left;margin-bottom:20px;}
    #Side_Channel_Blower_2RB_Single_Stage .right #right img{margin:54px 0 0 27px;border:1px solid #ccc;}
    #Side_Channel_Blower_2RB_Single_Stage .right #left h4{border-bottom:1px dashed #ccc;color:#1850a3;font-size:21px;font-family:Microsoft YaHei;height:50px;line-height:50px;}
  	#Side_Channel_Blower_2RB_Single_Stage .right #left{float:left;margin-top:5px;width:370px;margin-bottom:20px;}

  	table{background:#fff;font-size:11px;font-family:Microsoft YaHei;color:#444;border:none;margin-top:10px;}
    tr {height:35px;line-height:35px;}
  	tr span{color:#1c59b7;}
  	table.data{border-top:1px solid #999;border-right:1px solid #999;color:#e9ba3f;width:700px;}
  	table.data td{text-align:center;padding:2px;height:20px;line-height:20px;color:#333;border:1px solid #999;border-top:0px;border-right:0px;}
    table.data span{vertical-align:bottom;font-size:9px;color:#333;}
  	table.data tr.one{background:url(image/table_bg.png) repeat-x;font-size:11px;}
    table.data tr.one td{font-weight:600;color:#333;}
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
      <?php require 'inc/prod-left.inc';?>
       <div class="right">
              <div id="left">
                <h4><?php if(checkstr($_rows1['type'],T)==false){echo $_rows['type'];}else{echo $_rows1['type'];}?> Technical Data</h4>
                <table style="font-size:12px;">
                <?php if(checkstr($_rows1['type'],T)==false){
               echo
                '<tr><td><strong>Model: </strong><span>'.$_rows['type'].'</span></td><td><strong>Stage:</strong> <span>Single</span></td><td>'.
                '<tr><td><strong>Freq:</strong> <span>'.$_rows['Fre_quency'].'</span> (Hz)</td><td><strong>Power:</strong> <span>'.$_rows['output'].'</span> (Kw)</td><td>'.
                '<tr><td><strong>Airflow:</strong> <span>'.$_rows['maximum_airflow'].'</span> (m³/h)</td><td><strong>TH.CL:</strong> <span>IP55</span></td><td>'.
                '<tr><td><strong>Pressure:</strong> <span>+'.$_rows['maximum_pressure'].'</span> (mbar)</td><td><strong>IN.CL:</strong> <span>F or H</span></td><td>'.
                '<tr><td><strong>Vacuum:</strong> <span>'.$_rows['maximum_vacuum'].'</span> (mbar)</td><td><strong>N.weight:</strong> <span>'.$_rows['weight'].'</span> (kg)</td><td>'.
                '<tr><td><strong>Inlet/outlet:</strong> <span>'.$_rows['Inlet_outlet'].'</span>(inch)</td><td><strong>Sound:</strong> <span>'.$_rows['sound_level'].'</span> dB(A)</td><td>'.
                '<tr><td><strong>Dimension(L*W*H):</strong> <span>';
                }else{
				echo
				'<tr><td><strong>Model: </strong><span>'.$_rows1['type'].'</span></td><td><strong>Stage:</strong> <span>Single</span></td><td>'.
				'<tr><td><strong>Freq:</strong> <span>'.$_rows1['Fre_quency'].'</span> (Hz)</td><td><strong>Power:</strong> <span>'.$_rows1['output'].'</span> (Kw)</td><td>'.
				'<tr><td><strong>Airflow:</strong> <span>'.$_rows1['maximum_airflow'].'</span> (m³/h)</td><td><strong>TH.CL:</strong> <span>IP55</span></td><td>'.
				'<tr><td><strong>Pressure:</strong> <span>+'.$_rows1['maximum_pressure'].'</span> (mbar)</td><td><strong>IN.CL:</strong> <span>F or H</span></td><td>'.
				'<tr><td><strong>Vacuum:</strong> <span>'.$_rows1['maximum_vacuum'].'</span> (mbar)</td><td><strong>N.weight:</strong> <span>'.$_rows1['weight'].'</span> (kg)</td><td>'.
				'<tr><td><strong>Inlet/outlet:</strong> <span>'.$_rows1['Inlet_outlet'].'</span>(inch)</td><td><strong>Sound:</strong> <span>'.$_rows1['sound_level'].'</span> dB(A)</td><td>'.
				'<tr><td><strong>Dimension(L*W*H):</strong> <span>';
                }
                ?>
                <!-- 尺寸 Dimension(L*W*H):-->
                <?php
                //2RB单段和双段判断
                if($_rows['type']=='2RB 220-7HH26' or $_rows['type']=='2RB 320-7HH36' or $_rows['type']=='2RB 320-7HH26'  or $_rows['type']=='2RB 320-7HA31' or $_rows['type']=='2RB 420-7HH36' or $_rows['type']=='2RB 420-7HH46' or $_rows['type']=='2RB 420-7HA31' or $_rows['type']=='2RB 420-7AV45' or $_rows['type']=='2RB 520-7HH46' or $_rows['type']=='2RB 520-7HH57' or $_rows['type']=='2RB 720-7HH16' or $_rows['type']=='2RB 720-7HH26' or $_rows['type']=='2RB 720-7HH37' or $_rows['type']=='2RB 720-7HH47' or $_rows['type']=='2RB 720-7HH57'){echo $_rows['F'].'×'  .intval($_rows['A1']+$_rows['A']/2).   '×'.$_rows['B'];}
                elseif($_rows['type']=='2RB 810-7AH07' or $_rows['type']=='2RB 810-7AH17' or $_rows['type']=='2RB 810-7AH27' or $_rows['type']=='2RB 830-7AH07' or $_rows['type']=='2RB 830-7AH17' or $_rows['type']=='2RB 830-7AH27'){echo $_rows['F1'].'×'.$_rows['A'].'×'.$_rows['B1'];}
                elseif($_rows['type']=='2RB 820-7HH17' or $_rows['type']=='2RB 820-7HH27' or $_rows['type']=='2RB 820-7HH37' or $_rows['type']=='2RB 820-7HH47'){echo $_rows['F'].'×'  .intval($_rows['A1']+$_rows['A']/2).   '×'.$_rows['B1'];}
                elseif($_rows['type']=='2RB 920-7HH17' or $_rows['type']=='2RB 920-7HH27' or $_rows['type']=='2RB 920-7HH37' or $_rows['type']=='2RB 920-7HH47'){echo $_rows['F1'].'×'  .intval($_rows['A1']+$_rows['A']/2).   '×'.($_rows['B']+$_rows['B1']);}
                elseif($_rows['type']=='2RB 910-7AH07' or $_rows['type']=='2RB 910-7AH17' or $_rows['type']=='2RB 910-7AH37' or $_rows['type']=='2RB 930-7AH07' or $_rows['type']=='2RB 930-7AH17' or $_rows['type']=='2RB 930-7AH37'){echo  $_rows['F1'].'×'.$_rows['A'].'×'.($_rows['B']+$_rows['B1']);}
                elseif($_rows['type']=='2RB 940-7BH27' or $_rows['type']=='2RB 940-7BH37' or $_rows['type']=='2RB 940-7BH47'){echo $_rows['F1'].'×' .$_rows['A'].   '×'.($_rows['B']+$_rows['B1']);}
                elseif($_rows['type']=='2RB 943-7BH27' or $_rows['type']=='2RB 943-7BH37' or $_rows['type']=='2RB 943-7BH47'){echo $_rows['B'].'×'.$_rows['A'].'×'.$_rows['F'];}
                //4RB单段、双段、三段判断
                elseif($_rows['type']=='4RB 210-0AH16-7' or $_rows['type']=='4RB 210-0AV75-7' or $_rows['type']=='4RB 310-0AH16-7' or $_rows['type']=='4RB 310-0AH26-7' or $_rows['type']=='4RB 310-0AV71-7' or $_rows['type']=='4RB 310-0AV75-7' or $_rows['type']=='4RB 410-0AH16-7' or $_rows['type']=='4RB 210-0AA41-7' or $_rows['type']=='4RB 410-0AB46-7' or $_rows['type']=='4RB 510-0AH16-8' or $_rows['type']=='4RB 510-0AH26-8' or $_rows['type']=='4RB 610-0AH16-8' or $_rows['type']=='4RB 610-0AH36-8'){echo $_rows['F'].'×'.$_rows['A'].'×'.($_rows['B']+$_rows['B1']);}
                elseif($_rows['type']=='4RB 220-0AH26-7' or $_rows['type']=='4RB 220-0AH56-7' or $_rows['type']=='4RB 220-0AV75-7' or $_rows['type']=='4RB 320-0AH46-7' or $_rows['type']=='4RB 320-0AH56-7' or $_rows['type']=='4RB 320-0AV75-7' or $_rows['type']=='4RB 420-0AH26-7' or $_rows['type']=='4RB 420-0AH56-7' or $_rows['type']=='4RB 520-0AH26-8' or $_rows['type']=='4RB 520-0AH77-8' or $_rows['type']=='4RB 620-0AH36-8' or $_rows['type']=='4RB 620-0AH57-8' ){echo $_rows['F'].'×'.$_rows['A'].'×'.$_rows['B1'];}
                elseif($_rows['type']=='4RB 630-0AH67-8' or $_rows['type']=='4RB 530-0AH77-7' or $_rows['type']=='4RB 530-0AH87-7'){echo $_rows['F'].'×'.$_rows['A'].'×'.$_rows['B1'];}
                else{if(checkstr($_GET['series'],T)==true){//IE2单段和双段判断
                        if($_rows1['type']=='2RB 910-7AT07' or $_rows1['type']=='2RB 910-7AT17' or $_rows1['type']=='2RB 910-7AT37' or $_rows1['type']=='2RB 930-7AT07' or $_rows1['type']=='2RB 930-7AT17' or $_rows1['type']=='2RB 930-7AT27' or $_rows1['type']=='2RB 930-7AT37'){echo  max($_rows1['F'], $_rows1['F1'], $_rows1['F11']).'×'.$_rows1['A'].'×'.($_rows1['B']+$_rows1['B1']);}
                        elseif($_rows1['type']=='2RB 910-7AH07' or $_rows1['type']=='2RB 910-7AH17' or $_rows1['type']=='2RB 910-7AH37' or $_rows1['type']=='2RB 930-7AH07' or $_rows1['type']=='2RB 930-7AH17' or $_rows1['type']=='2RB 930-7AH37'){echo  $_rows1['F1'].'×'.$_rows1['A'].'×'.($_rows1['B']+$_rows1['B1']);}
                        elseif($_rows1['type']=='2RB 740-7GT37' or $_rows1['type']=='2RB 740-7GT47' or $_rows1['type']=='2RB 740-7GT57' or $_rows1['type']=='2RB 840-7JT27' or $_rows1['type']=='2RB 840-7JT37' ){echo  $_rows1['F'].'×'.$_rows1['A'].'×'.$_rows1['B'];}
                        elseif($_rows1['type']=='2RB 940-7BT27' or $_rows1['type']=='2RB 940-7BT37' ){echo  $_rows1['F'].'×'.$_rows1['A'].'×'.($_rows1['B']+$_rows1['B1']);}
                        elseif($_rows1['type']=='2RB 943-7GT27' or $_rows1['type']=='2RB 943-7GT37' ){echo  $_rows1['B'].'×'.$_rows1['A'].'×'.$_rows1['F'];}
                        elseif($_rows1['type']=='2RB 220-7HT26' or $_rows1['type']=='2RB 320-7HT16' or $_rows1['type']=='2RB 320-7HT26' or $_rows1['type']=='2RB 420-7HT36' or $_rows1['type']=='2RB 420-7HT46' or $_rows1['type']=='2RB 520-7HT46' or $_rows1['type']=='2RB 720-7HT26' or $_rows1['type']=='2RB 720-7HT37' or $_rows1['type']=='2RB 720-7HT47' or $_rows1['type']=='2RB 720-7HT57' or $_rows1['type']=='2RB 820-7HT27' or $_rows1['type']=='2RB 820-7HT37' or $_rows1['type']=='2RB 820-7HT47' or $_rows1['type']=='2RB 920-7HT17' or $_rows1['type']=='2RB 920-7HT27' or $_rows1['type']=='2RB 920-7HT37'){echo $_rows1['F'].'×'.($_rows1['A1']+$_rows1['A']/2).'×'.$_rows1['B'];}
                        else{echo $_rows1['F'].'×'.$_rows1['A'].'×'.$_rows1['B'];}
                       }else{echo $_rows['F'].'×'.$_rows['A'].'×'.$_rows['B'];}
                }
                ?>
                </span> (mm)</td><td>
                </table>
             </div>
             <div id="right">
                <img  style="<?php      if($_rows['type']=='4RB 210-0AH16-7' or $_rows['type']=='4RB 210-0AV75-7' or $_rows['type']=='4RB 310-0AH16-7' or $_rows['type']=='4RB 310-0AH26-7' or $_rows['type']=='4RB 310-0AV71-7' or $_rows['type']=='4RB 310-0AV75-7' or $_rows['type']=='4RB 410-0AH16-7' or $_rows['type']=='4RB 210-0AA41-7' or $_rows['type']=='4RB 410-0AB46-7' or $_rows['type']=='4RB 510-0AH16-8' or $_rows['type']=='4RB 510-0AH26-8' or $_rows['type']=='4RB 610-0AH16-8' or $_rows['type']=='4RB 610-0AH36-8'){echo "margin:54px 0 0 65px";}?>"src="product_image/product_content_big/<?php if(checkstr($_GET['series'],T)==true){echo  substr($_GET['series'],0,7).'-ie2';}else{echo  substr($_GET['series'],0,7);}?>.jpg"


                alt="<?php echo $_GET['series'];?> side channel blower image and picture"/>
             </div>


             <h5>Dimension for side channel blower <?php if(checkstr($_GET['series'],T)==false){echo $_rows['type'];}else{echo $_rows1['type'];}?></h5>
             <!-- 尺寸图判断 -->
             <?php
                //2RB单段和双段
                if($_rows['type']=='2RB 220-7HH26' or $_rows['type']=='2RB 320-7HH36' or $_rows['type']=='2RB 320-7HH26'or $_rows['type']=='2RB 320-7HA31' or $_rows['type']=='2RB 420-7HH36' or $_rows['type']=='2RB 420-7HH46' or $_rows['type']=='2RB 420-7HA31' or $_rows['type']=='2RB 420-7AV45'){echo       '<a rel="shadowbox" href="product_image/dimensions/2RB220_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB220_small.jpg"  title="Click to Enlarge"/></a>';}
             	elseif($_rows['type']=='2RB 520-7HH46' or $_rows['type']=='2RB 520-7HH57' or $_rows['type']=='2RB 720-7HH16' or $_rows['type']=='2RB 720-7HH26' or $_rows['type']=='2RB 720-7HH37'){echo  '<a rel="shadowbox" href="product_image/dimensions/2RB520_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB520_small.jpg"  title="Click to Enlarge"/></a>';}
             	elseif($_rows['type']=='2RB 720-7HH47' or $_rows['type']=='2RB 720-7HH57'){echo  '<a rel="shadowbox" href="product_image/dimensions/2RB720_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB720_small.jpg"  title="Click to Enlarge"/></a>';}
             	elseif($_rows['type']=='2RB 740-7GH37' ){echo  '<a rel="shadowbox" href="product_image/dimensions/2RB740-3_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB740-3_small.jpg"  title="Click to Enlarge"/></a>';}
             	elseif($_rows['type']=='2RB 740-7GH47' or $_rows['type']=='2RB 740-7GH57'){echo  '<a rel="shadowbox" href="product_image/dimensions/2RB740-4_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB740-4_small.jpg"  title="Click to Enlarge"/></a>';}
             	elseif($_rows['type']=='2RB 820-7HH37' or $_rows['type']=='2RB 820-7HH47'){echo  '<a rel="shadowbox" href="product_image/dimensions/2RB820-3_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB820-3_small.jpg"  title="Click to Enlarge"/></a>';}
             	elseif($_rows['type']=='2RB 820-7HH17' or $_rows['type']=='2RB 820-7HH27'){echo  '<a rel="shadowbox" href="product_image/dimensions/2RB820-1_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB820-1_small.jpg"  title="Click to Enlarge"/></a>';}
             	elseif($_rows['type']=='2RB 840-7GH27'){echo  '<a rel="shadowbox" href="product_image/dimensions/2RB840-2_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB840-2_small.jpg"  title="Click to Enlarge"/></a>';}
             	elseif($_rows['type']=='2RB 840-7GH37'){echo  '<a rel="shadowbox" href="product_image/dimensions/2RB840-3_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB840-3_small.jpg"  title="Click to Enlarge"/></a>';}
             	elseif($_rows['type']=='2RB 920-7HH17' or $_rows['type']=='2RB 920-7HH27' or $_rows['type']=='2RB 920-7HH37'  or $_rows['type']=='2RB 920-7HH47'){echo  '<a rel="shadowbox" href="product_image/dimensions/2RB920_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB920_small.jpg"  title="Click to Enlarge"/></a>';}
             	elseif($_rows['type']=='2RB 940-7BH27' or $_rows['type']=='2RB 940-7BH37' or $_rows['type']=='2RB 940-7BH47'){echo  '<a rel="shadowbox" href="product_image/dimensions/2RB940_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB940_small.jpg"  title="Click to Enlarge"/></a>';}
             	elseif($_rows['type']=='2RB 943-7BH27' or $_rows['type']=='2RB 943-7BH37' or $_rows['type']=='2RB 943-7BH47'){echo  '<a rel="shadowbox" href="product_image/dimensions/2RB943_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB943_small.jpg"  title="Click to Enlarge"/></a>';}
             	elseif($_rows['type']=='2RB 810-7AH07' or $_rows['type']=='2RB 810-7AH17' or $_rows['type']=='2RB 810-7AH27' or $_rows['type']=='2RB 830-7AH07' or $_rows['type']=='2RB 830-7AH17' or $_rows['type']=='2RB 830-7AH27'){echo       '<a rel="shadowbox" href="product_image/dimensions/2RB810_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB810_small.jpg"  title="Click to Enlarge"/></a>';}
             	elseif($_rows['type']=='2RB 910-7AH07' or $_rows['type']=='2RB 910-7AH17' or $_rows['type']=='2RB 910-7AH27' or $_rows['type']=='2RB 930-7AH07' or $_rows['type']=='2RB 930-7AH17' or $_rows['type']=='2RB 930-7AH37'){echo       '<a rel="shadowbox" href="product_image/dimensions/2RB910_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB910_small.jpg"  title="Click to Enlarge"/></a>';}

             	//4RB单段、双段、三段判断
                elseif($_rows['type']=='4RB 210-0AH16-7' or $_rows['type']=='4RB 210-0AV75-7' or $_rows['type']=='4RB 310-0AH16-7' or $_rows['type']=='4RB 310-0AH26-7' or $_rows['type']=='4RB 310-0AV71-7' or $_rows['type']=='4RB 310-0AV75-7' or $_rows['type']=='4RB 410-0AH16-7' or $_rows['type']=='4RB 210-0AA41-7' or $_rows['type']=='4RB 410-0AB46-7' or $_rows['type']=='4RB 510-0AH16-8' or $_rows['type']=='4RB 510-0AH26-8' or $_rows['type']=='4RB 610-0AH16-8' or $_rows['type']=='4RB 610-0AH36-8'){echo '<a rel="shadowbox" href="product_image/dimensions/4RB210_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/4RB210_small.jpg"  title="Click to Enlarge"/></a>';}
                elseif($_rows['type']=='4RB 220-0AH26-7' or $_rows['type']=='4RB 220-0AH56-7' or $_rows['type']=='4RB 220-0AV75-7' or $_rows['type']=='4RB 320-0AH46-7' or $_rows['type']=='4RB 320-0AH56-7' or $_rows['type']=='4RB 320-0AV75-7' or $_rows['type']=='4RB 420-0AH26-7' or $_rows['type']=='4RB 420-0AH56-7' or $_rows['type']=='4RB 520-0AH26-8' or $_rows['type']=='4RB 520-0AH77-8' or $_rows['type']=='4RB 620-0AH36-8' or $_rows['type']=='4RB 620-0AH57-8' ){echo       '<a rel="shadowbox" href="product_image/dimensions/4RB220_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/4RB220_small.jpg"  title="Click to Enlarge"/></a>';}
                elseif($_rows['type']=='4RB 630-0AH67-8' or $_rows['type']=='4RB 530-0AH77-7' or $_rows['type']=='4RB 530-0AH87-7'){echo       '<a rel="shadowbox" href="product_image/dimensions/4RB530_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/4RB530_small.jpg"  title="Click to Enlarge"/></a>';}

             	//IE2  2RB单段和双段判断
                elseif($_rows1['type']=='2RB 610-7AT06' or $_rows1['type']=='2RB 610-7AT16' or $_rows1['type']=='2RB 610-7AT26' or $_rows1['type']=='2RB 630-7AT06' or $_rows1['type']=='2RB 630-7AT16' or $_rows1['type']=='2RB 630-7AT26' or $_rows1['type']=='2RB 710-7AT06' or $_rows1['type']=='2RB 710-7AT16' or $_rows1['type']=='2RB 710-7AT26' or $_rows1['type']=='2RB 710-7AT37' or $_rows1['type']=='2RB 730-7AT06' or $_rows1['type']=='2RB 730-7AT16' or $_rows1['type']=='2RB 730-7AT26' or $_rows1['type']=='2RB 730-7AT37' or $_rows1['type']=='2RB 810-7AT07' or $_rows1['type']=='2RB 810-7AT17' or $_rows1['type']=='2RB 810-7AT27' or $_rows1['type']=='2RB 830-7AT07' or $_rows1['type']=='2RB 830-7AT17' or $_rows1['type']=='2RB 830-7AT27'){echo  '<a rel="shadowbox" href="product_image/dimensions_IE2/2RB610_big.jpg"><img alt="Dimension for side channel blower '.$_rows1['type'].' " class="border" src="product_image/dimensions_IE2/2RB610_small.jpg"  title="Click to Enlarge"/></a>';}
                elseif($_rows1['type']=='2RB 910-7AT07' or $_rows1['type']=='2RB 910-7AT17' or $_rows1['type']=='2RB 910-7AT37' or $_rows1['type']=='2RB 930-7AT07' or $_rows1['type']=='2RB 930-7AT17' or $_rows1['type']=='2RB 930-7AT27' or $_rows1['type']=='2RB 930-7AT37'){echo       '<a rel="shadowbox" href="product_image/dimensions_IE2/2RB910_big.jpg"><img alt="Dimension for side channel blower '.$_rows1['type'].' " class="border" src="product_image/dimensions_IE2/2RB910_small.jpg"  title="Click to Enlarge"/></a>';}
                elseif($_rows1['type']=='2RB 220-7HT26' or $_rows1['type']=='2RB 320-7HT16' or $_rows1['type']=='2RB 320-7HT26' or $_rows1['type']=='2RB 420-7HT36' or $_rows1['type']=='2RB 420-7HT46' or $_rows1['type']=='2RB 520-7HT46' or $_rows1['type']=='2RB 720-7HT26' or $_rows1['type']=='2RB 720-7HT37' or $_rows1['type']=='2RB 720-7HT47' or $_rows1['type']=='2RB 720-7HT57' or $_rows1['type']=='2RB 820-7HT27' or $_rows1['type']=='2RB 820-7HT37' or $_rows1['type']=='2RB 820-7HT47' or $_rows1['type']=='2RB 920-7HT17' or $_rows1['type']=='2RB 920-7HT27' or $_rows1['type']=='2RB 920-7HT37'){ echo '<a rel="shadowbox" href="product_image/dimensions_IE2/2RB220_big.jpg"><img alt="Dimension for side channel blower '.$_rows1['type'].' " class="border" src="product_image/dimensions_IE2/2RB220_small.jpg"  title="Click to Enlarge"/></a>';}
                elseif($_rows1['type']=='2RB 920-7HT17' or $_rows1['type']=='2RB 920-7HT27' or $_rows1['type']=='2RB 920-7HT37' ){echo  '<a rel="shadowbox" href="product_image/dimensions_IE2/2RB920_big.jpg"><img alt="Dimension for side channel blower '.$_rows1['type'].' " class="border" src="product_image/dimensions_IE2/2RB920_small.jpg"  title="Click to Enlarge"/></a>';}
                elseif($_rows1['type']=='2RB 740-7GT37' or $_rows1['type']=='2RB 740-7GT47' or $_rows1['type']=='2RB 740-7GT57' or $_rows1['type']=='2RB 840-7JT27' or $_rows1['type']=='2RB 840-7JT37'){echo       '<a rel="shadowbox" href="product_image/dimensions_IE2/2RB840_big.jpg"><img alt="Dimension for side channel blower '.$_rows1['type'].' " class="border" src="product_image/dimensions_IE2/2RB840_small.jpg"  title="Click to Enlarge"/></a>';}
                elseif($_rows1['type']=='2RB 940-7BT27' or $_rows1['type']=='2RB 940-7BT37'){echo       '<a rel="shadowbox" href="product_image/dimensions_IE2/2RB940_big.jpg"><img alt="Dimension for side channel blower '.$_rows1['type'].' " class="border" src="product_image/dimensions_IE2/2RB940_small.jpg"  title="Click to Enlarge"/></a>';}
                elseif($_rows1['type']=='2RB 943-7GT27' or $_rows1['type']=='2RB 943-7GT37'){echo       '<a rel="shadowbox" href="product_image/dimensions_IE2/2RB943_big.jpg"><img alt="Dimension for side channel blower '.$_rows1['type'].' " class="border" src="product_image/dimensions_IE2/2RB943_small.jpg"  title="Click to Enlarge"/></a>';}
             	else{ if(checkstr($_GET['series'],T)){echo '<a rel="shadowbox" href="product_image/dimensions_ie2/2RB210_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions_ie2/2RB210_small.jpg"  title="Click to Enlarge"/></a>';}else{echo  '<a rel="shadowbox" href="product_image/dimensions/2RB210_big.jpg"><img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB210_small.jpg"  title="Click to Enlarge"/></a>';}}
             	?>

             <!-- 技术参数判断 -->
             <?php  if($_rows['type']=='2RB 220-7HH26' or $_rows['type']=='2RB 320-7HH36' or $_rows['type']=='2RB 320-7HH26' or $_rows['type']=='2RB 420-7HH36' or $_rows['type']=='2RB 420-7HH46' ){
		            echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
		              '<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>A′</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>H′</td><td>J</td><td>K</td><td>L</td><td>M</td></tr>'.
		              '<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['A1'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['H1'].'</td><td>'.$_rows['J'].'</td><td>'.$_rows['K'].'</td><td>'.$_rows['L'].'</td><td>'.$_rows['M'].'</td></tr>'.
		              '<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>N</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>T</td><td>U</td><td>V<span>1(3-)</span></td><td>V′<span>1(3-)</span></td><td>α</td><td>ϕX</td><td>Y×Z</td><td>X-Holes</td></tr>'.
		              '<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['N'].'</td><td>'.$_rows['O'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['Q'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['S'].'</td><td>'.$_rows['T'].'</td><td>'.$_rows['U'].'</td><td>'.$_rows['V3'].'</td><td>'.$_rows['V3_'].'</td><td>'.$_rows['α'].'</td><td>'.$_rows['ϕX'].'</td><td>'.$_rows['Y_Z'].'</td><td>'.$_rows['X_Holes'].'</td></tr>'.
		             '</table>';
                        }
              elseif($_rows['type']=='2RB 320-7HA31' or $_rows['type']=='2RB 420-7HA31' or $_rows['type']=='2RB 420-7AV45'){
		            echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
		              '<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>A′</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>H′</td><td>J</td><td>K</td><td>L</td><td>M</td></tr>'.
		              '<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['A1'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['H1'].'</td><td>'.$_rows['J'].'</td><td>'.$_rows['K'].'</td><td>'.$_rows['L'].'</td><td>'.$_rows['M'].'</td></tr>'.
		              '<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>N</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>T</td><td>U</td><td>V<span>(1-)</span></td><td>V′<span>(1-)</span></td><td>α</td><td>ϕX</td><td>Y×Z</td><td>X-Holes</td></tr>'.
		              '<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['N'].'</td><td>'.$_rows['O'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['Q'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['S'].'</td><td>'.$_rows['T'].'</td><td>'.$_rows['U'].'</td><td>'.$_rows['V1'].'</td><td>'.$_rows['V1_'].'</td><td>'.$_rows['α'].'</td><td>'.$_rows['ϕX'].'</td><td>'.$_rows['Y_Z'].'</td><td>'.$_rows['X_Holes'].'</td></tr>'.
		             '</table>';
                        }
              elseif($_rows['type']=='2RB 520-7HH46' or $_rows['type']=='2RB 520-7HH57' or $_rows['type']=='2RB 720-7HH16' or $_rows['type']=='2RB 720-7HH26' or $_rows['type']=='2RB 720-7HH37' or $_rows['type']=='2RB 720-7HH47' or $_rows['type']=='2RB 720-7HH57'){
					   echo '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
							'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>A′</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>H′</td><td>J</td><td>K</td><td>L</td><td>M</td></tr>'.
							'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['A1'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['H1'].'</td><td>'.$_rows['J'].'</td><td>'.$_rows['K'].'</td><td>'.$_rows['L'].'</td><td>'.$_rows['M'].'</td></tr>'.
							'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>N</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>T</td><td>U</td><td>V</td><td>V′</td><td>ϕX</td><td>Y×Z</td><td>X-Holes</td><td>W</td></tr>'.
							'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['N'].'</td><td>'.$_rows['O'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['Q'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['S'].'</td><td>'.$_rows['T'].'</td><td>'.$_rows['U'].'</td><td>'.$_rows['V'].'</td><td>'.$_rows['V_PIE'].'</td><td>'.$_rows['ϕX'].'</td><td>'.$_rows['Y_Z'].'</td><td>'.$_rows['X_Holes'].'</td><td>'.$_rows['W'].'</td></tr>'.
							'</table>';
              }
              elseif($_rows['type']=='2RB 740-7GH37' or $_rows['type']=='2RB 740-7GH47' or $_rows['type']=='2RB 740-7GH57' ){
              	echo '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>C</td><td>C′</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>J</td><td>K</td><td>L</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['C1'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['J'].'</td><td>'.$_rows['K'].'</td><td>'.$_rows['L'].'</td></tr>'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>M</td><td>N</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>U</td><td>V</td><td>ϕX</td><td>Y×Z</td><td>X-Holes</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['M'].'</td><td>'.$_rows['N'].'</td><td>'.$_rows['O'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['Q'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['S'].'</td><td>'.$_rows['U'].'</td><td>'.$_rows['V'].'</td><td>'.$_rows['ϕX'].'</td><td>'.$_rows['Y_Z'].'</td><td>'.$_rows['X_Holes'].'</td></tr>'.
              			'</table>';
              }
              elseif($_rows['type']=='2RB 820-7HH17' or $_rows['type']=='2RB 820-7HH27' or $_rows['type']=='2RB 820-7HH37' or $_rows['type']=='2RB 820-7HH47'){
              	echo '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>A′</td><td>B</td><td>B′</td><td>C</td><td>D</td><td>E</td><td>F</td><td>F′</td><td>G</td><td>H</td><td>H′</td><td>J</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['A1'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['B1'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['F1'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['H1'].'</td><td>'.$_rows['J'].'</td></tr>'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>K</td><td>L</td><td>N</td><td>N′</td><td>O</td><td>P</td><td>ϕR</td><td>S</td><td>V</td><td>W</td><td>ϕX</td><td>Y×Z</td><td>X-Holes</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['K'].'</td><td>'.$_rows['L'].'</td><td>'.$_rows['N'].'</td><td>'.$_rows['N1'].'</td><td>'.$_rows['O'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['S'].'</td><td>'.$_rows['V'].'</td><td>'.$_rows['W'].'</td><td>'.$_rows['ϕX'].'</td><td>'.$_rows['Y_Z'].'</td><td>'.$_rows['X_Holes'].'</td></tr>'.
              			'</table>';
              }
              elseif($_rows['type']=='2RB 840-7GH27' or $_rows['type']=='2RB 840-7GH37'){
              	echo '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>C</td><td>C′</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>J</td><td>K</td><td>L</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['C1'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['J'].'</td><td>'.$_rows['K'].'</td><td>'.$_rows['L'].'</td></tr>'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>M</td><td>N</td><td>O</td><td>P</td><td>ϕR</td><td>S</td><td>V</td><td>W</td><td>ϕX</td><td>Y×Z</td><td>X-Holes</td><td></td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['M'].'</td><td>'.$_rows['N'].'</td><td>'.$_rows['O'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['S'].'</td><td>'.$_rows['V'].'</td><td>'.$_rows['W'].'</td><td>'.$_rows['ϕX'].'</td><td>'.$_rows['Y_Z'].'</td><td>'.$_rows['X_Holes'].'</td><td></td></tr>'.
              			'</table>';
              }
              elseif($_rows['type']=='2RB 920-7HH17' or $_rows['type']=='2RB 920-7HH27' or $_rows['type']=='2RB 920-7HH37' or $_rows['type']=='2RB 920-7HH47' ){
              	echo '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>A′</td><td>B</td><td>B′</td><td>C</td><td>C′</td><td>D</td><td>E</td><td>F</td><td>F′</td><td>F"</td><td>G</td><td>H</td><td>H′</td><td>J</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['A1'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['B1'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['C1'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['F1'].'</td><td>'.$_rows['F11'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['H1'].'</td><td>'.$_rows['J'].'</td></tr>'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>K</td><td>M</td><td>N</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>T</td><td>U</td><td>V</td><td>W</td><td>ϕX</td><td>Y×Z</td><td>X-Holes</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['K'].'</td><td>'.$_rows['M'].'</td><td>'.$_rows['N'].'</td><td>'.$_rows['O'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['Q'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['S'].'</td><td>'.$_rows['T'].'</td><td>'.$_rows['U'].'</td><td>'.$_rows['V'].'</td><td>'.$_rows['W'].'</td><td>'.$_rows['ϕX'].'</td><td>'.$_rows['Y_Z'].'</td><td>'.$_rows['X_Holes'].'</td></tr>'.
              			'</table>';
              }
              elseif($_rows['type']=='2RB 940-7BH27' or $_rows['type']=='2RB 940-7BH37' or $_rows['type']=='2RB 940-7BH47'){
              	echo '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>B′</td><td>C</td><td>C′</td><td>D</td><td>E</td><td>F</td><td>F′</td><td>G</td><td>H</td><td>J</td><td>K</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['B1'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['C1'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['F1'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['J'].'</td><td>'.$_rows['K'].'</td></tr>'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>M</td><td>N</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>U</td><td>V</td><td>W</td><td>ϕX</td><td>Y×Z</td><td>X-Holes</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['M'].'</td><td>'.$_rows['N'].'</td><td>'.$_rows['O'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['Q'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['S'].'</td><td>'.$_rows['U'].'</td><td>'.$_rows['V'].'</td><td>'.$_rows['W'].'</td><td>'.$_rows['ϕX'].'</td><td>'.$_rows['Y_Z'].'</td><td>'.$_rows['X_Holes'].'</td></tr>'.
              			'</table>';
              }
              elseif($_rows['type']=='2RB 943-7BH27' or $_rows['type']=='2RB 943-7BH37' or $_rows['type']=='2RB 943-7BH47'){
              	echo '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td><td>F′</td><td>F"</td><td>G</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['F1'].'</td><td>'.$_rows['F11'].'</td><td>'.$_rows['G'].'</td></tr>'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>P</td><td>P′</td><td>Q</td><td>S</td><td>U</td><td>V</td><td>W</td><td>Y×Z</td><td></td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['P1'].'</td><td>'.$_rows['Q'].'</td><td>'.$_rows['S'].'</td><td>'.$_rows['U'].'</td><td>'.$_rows['V'].'</td><td>'.$_rows['W'].'</td><td>'.$_rows['Y_Z'].'</td><td></td></tr>'.
              			'</table>';
              }
              elseif($_rows['type']=='2RB 810-7AH07' or $_rows['type']=='2RB 810-7AH17' or $_rows['type']=='2RB 810-7AH27' or $_rows['type']=='2RB 830-7AH07' or $_rows['type']=='2RB 830-7AH17' or $_rows['type']=='2RB 830-7AH27'){
              	echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>A′</td><td>B</td><td>B′</td><td>C</td><td>D</td><td>E</td><td>F</td><td>F′</td><td>G</td><td>H</td><td>H′</td><td>J</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['A1'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['B1'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['F1'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['H1'].'</td><td>'.$_rows['J'].'</td></tr>'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>K</td><td>L</td><td>M</td><td>N</td><td>O</td><td>P</td><td>ϕR</td><td>S</td><td>V</td><td>W</td><td>ϕX</td><td>Y×Z</td><td>X-Holes</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['K'].'</td><td>'.$_rows['L'].'</td><td>'.$_rows['M'].'</td><td>'.$_rows['N'].'</td><td>'.$_rows['O'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['S'].'</td><td>'.$_rows['V'].'</td><td>'.$_rows['W'].'</td><td>'.$_rows['ϕX'].'</td><td>'.$_rows['Y_Z'].'</td><td>'.$_rows['X_Holes'].'</td></tr>'.
              			'</table>';
              }elseif($_rows['type']=='2RB 910-7AH07' or $_rows['type']=='2RB 910-7AH17' or $_rows['type']=='2RB 910-7AH37' or $_rows['type']=='2RB 930-7AH07' or $_rows['type']=='2RB 930-7AH17' or $_rows['type']=='2RB 930-7AH37'){
              	echo '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>B′</td><td>C</td><td>C′</td><td>D</td><td>E</td><td>F</td><td>F′</td><td>F"</td><td>G</td><td>H</td><td>J</td><td>K</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['B1'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['C1'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['F1'].'</td><td>'.$_rows['F11'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['J'].'</td><td>'.$_rows['K'].'</td></tr>'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>M</td><td>N</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>U</td><td>V</td><td>W</td><td>ϕX</td><td>Y×Z</td><td>X-Holes</td><td></td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['M'].'</td><td>'.$_rows['N'].'</td><td>'.$_rows['O'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['Q'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['S'].'</td><td>'.$_rows['U'].'</td><td>'.$_rows['V'].'</td><td>'.$_rows['W'].'</td><td>'.$_rows['ϕX'].'</td><td>'.$_rows['Y_Z'].'</td><td>'.$_rows['X_Holes'].'</td><td></td></tr>'.
              			'</table>';
              }elseif($_rows['type']=='4RB 210-0AH16-7' or $_rows['type']=='4RB 210-0AV75-7' or $_rows['type']=='4RB 310-0AH16-7' or $_rows['type']=='4RB 310-0AH26-7' or $_rows['type']=='4RB 310-0AV71-7' or $_rows['type']=='4RB 310-0AV75-7' or $_rows['type']=='4RB 410-0AH16-7' or $_rows['type']=='4RB 410-0AA41-7' or $_rows['type']=='4RB 410-0AB46-7' or $_rows['type']=='4RB 510-0AH16-8' or $_rows['type']=='4RB 510-0AH26-8' or $_rows['type']=='4RB 610-0AH16-8' or $_rows['type']=='4RB 610-0AH36-8'){
              echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
              		'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>B1</td><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>J</td><td>K</td><td>M</td><td>N</td><td>O</td></tr>'.
              		'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['B1'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['J'].'</td><td>'.$_rows['K'].'</td><td>'.$_rows['M'].'</td><td>'.$_rows['N'].'</td><td>'.$_rows['O'].'</td></tr>'.
              		'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>P</td><td>Q</td><td>ϕR</td><td>S1</td><td>S2</td><td>S3</td><td>T</td><td>T1</td><td>U</td><td>V</td><td>V1</td><td>W</td><td>ϕX</td><td>Y×Z</td></tr>'.
              		'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['Q'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['S1'].'</td><td>'.$_rows['S2'].'</td><td>'.$_rows['S3'].'</td><td>'.$_rows['T'].'</td><td>'.$_rows['T1'].'</td><td>'.$_rows['U'].'</td><td>'.$_rows['V'].'</td><td>'.$_rows['V1'].'</td><td>'.$_rows['W'].'</td><td>'.$_rows['ϕX'].'</td><td>'.$_rows['Y_Z'].'</td></tr>'.
              		'</table>';
             }elseif($_rows['type']=='4RB 220-0AH26-7' or $_rows['type']=='4RB 220-0AH56-7' or $_rows['type']=='4RB 220-0AV75-7' or $_rows['type']=='4RB 320-0AH46-7' or $_rows['type']=='4RB 320-0AH56-7' or $_rows['type']=='4RB 320-0AV75-7' or $_rows['type']=='4RB 420-0AH26-7' or $_rows['type']=='4RB 420-0AH56-7' or $_rows['type']=='4RB 520-0AH26-8' or $_rows['type']=='4RB 520-0AH77-8' or $_rows['type']=='4RB 620-0AH36-8' or $_rows['type']=='4RB 620-0AH57-8' ){
             echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
             		'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>B′</td><td>C2</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>H1</td><td>J</td><td>K</td><td>M</td></tr>'.
             		'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['B1'].'</td><td>'.$_rows['C2'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['H1'].'</td><td>'.$_rows['J'].'</td><td>'.$_rows['K'].'</td><td>'.$_rows['M'].'</td></tr>'.
             		'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>N</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S1</td><td>S2</td><td>T</td><td>T1</td><td>U</td><td>V</td><td>V1</td><td>W</td></tr>'.
             		'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['N'].'</td><td>'.$_rows['O'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['Q'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['S1'].'</td><td>'.$_rows['S2'].'</td><td>'.$_rows['T'].'</td><td>'.$_rows['T1'].'</td><td>'.$_rows['U'].'</td><td>'.$_rows['V'].'</td><td>'.$_rows['V1'].'</td><td>'.$_rows['W'].'</td></tr>'.
             		'</table>';
             }elseif($_rows['type']=='4RB 630-0AH67-8' or $_rows['type']=='4RB 530-0AH77-7' or $_rows['type']=='4RB 530-0AH87-7'){
             echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
             		'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>B′</td><td>C2</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>H1</td><td>J</td><td>K</td><td>M</td></tr>'.
             		'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['B1'].'</td><td>'.$_rows['C2'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['H1'].'</td><td>'.$_rows['J'].'</td><td>'.$_rows['K'].'</td><td>'.$_rows['M'].'</td></tr>'.
             		'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>N</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S1</td><td>S2</td><td>T</td><td>U</td><td>V</td><td>W1</td><td>W2</td><td></td></tr>'.
             		'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['N'].'</td><td>'.$_rows['O'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['Q'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['S1'].'</td><td>'.$_rows['S2'].'</td><td>'.$_rows['T'].'</td><td>'.$_rows['U'].'</td><td>'.$_rows['V'].'</td><td>'.$_rows['W1'].'</td><td>'.$_rows['W2'].'</td><td></td></tr>'.
             		'</table>';
             }else{
              	if(checkstr($_rows1['type'],T)==false){echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>J</td><td>K</td><td>L</td><td>M</td><td>N</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['A'].'</td><td>'.$_rows['B'].'</td><td>'.$_rows['C'].'</td><td>'.$_rows['D'].'</td><td>'.$_rows['E'].'</td><td>'.$_rows['F'].'</td><td>'.$_rows['G'].'</td><td>'.$_rows['H'].'</td><td>'.$_rows['J'].'</td><td>'.$_rows['K'].'</td><td>'.$_rows['L'].'</td><td>'.$_rows['M'].'</td><td>'.$_rows['N'].'</td></tr>'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>U</td><td>V<span>(1-)</span></td><td>V′<span>(1-)</span></td><td>V<span>1(3-)</span></td><td>V′<span>1(3-)</span></td><td>Y×Z</td><td>X-Holes</td><td>ϕX</td><td>W</td></tr>'.
              			'<tr><td>'.$_rows['type'].'</td><td>'.$_rows['phases'].'</td><td>'.$_rows['O'].'</td><td>'.$_rows['P'].'</td><td>'.$_rows['Q'].'</td><td>'.$_rows['ϕR'].'</td><td>'.$_rows['U'].'</td><td>'.$_rows['V1'].'</td><td>'.$_rows['V1_'].'</td><td>'.$_rows['V3'].'</td><td>'.$_rows['V3_'].'</td><td>'.$_rows['Y_Z'].'</td><td>'.$_rows['X_Holes'].'</td><td>'.$_rows['ϕX'].'</td><td>'.$_rows['W'].'</td></tr>'.
              			'</table>'; }
               if(checkstr($_rows1['type'],T)){if($_rows11['type']=='2RB 610-7AT06' or $_rows1['type']=='2RB 610-7AT16' or $_rows1['type']=='2RB 610-7AT26' or $_rows1['type']=='2RB 630-7AT06' or $_rows1['type']=='2RB 630-7AT16' or $_rows1['type']=='2RB 630-7AT26' or $_rows1['type']=='2RB 710-7AT06' or $_rows1['type']=='2RB 710-7AT16' or $_rows1['type']=='2RB 710-7AT26' or $_rows1['type']=='2RB 710-7AT37' or $_rows1['type']=='2RB 730-7AT06' or $_rows1['type']=='2RB 730-7AT16' or $_rows1['type']=='2RB 730-7AT26' or $_rows1['type']=='2RB 730-7AT37' or $_rows1['type']=='2RB 810-7AT07' or $_rows1['type']=='2RB 810-7AT17' or $_rows1['type']=='2RB 810-7AT27' or $_rows1['type']=='2RB 830-7AT07' or $_rows1['type']=='2RB 830-7AT17' or $_rows1['type']=='2RB 830-7AT27'){
		            echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
		              '<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>J</td><td>K</td><td>L</td><td>M</td><td>N</td></tr>'.
		              '<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['A'].'</td><td>'.$_rows1['B'].'</td><td>'.$_rows1['C'].'</td><td>'.$_rows1['D'].'</td><td>'.$_rows1['E'].'</td><td>'.$_rows1['F'].'</td><td>'.$_rows1['G'].'</td><td>'.$_rows1['H'].'</td><td>'.$_rows1['J'].'</td><td>'.$_rows1['K'].'</td><td>'.$_rows1['L'].'</td><td>'.$_rows1['M'].'</td><td>'.$_rows1['N'].'</td></tr>'.
		              '<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>U</td><td>V</td><td>V′</td><td>V1</td><td>V′1</td><td>Y×Z</td><td>X-Holes</td><td>ϕX</td></tr>'.
		              '<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['O'].'</td><td>'.$_rows1['P'].'</td><td>'.$_rows1['Q'].'</td><td>'.$_rows1['ϕR'].'</td><td>'.$_rows1['S'].'</td><td>'.$_rows1['U'].'</td><td>'.$_rows1['V'].'</td><td>'.$_rows1['V1_'].'</td><td>'.$_rows1['V1'].'</td><td>'.$_rows1['V_1'].'</td><td>'.$_rows1['Y_Z'].'</td><td>'.$_rows1['X_Holes'].'</td><td>'.$_rows1['ϕX'].'</td></tr>'.
		             '</table>';
              }elseif($_rows1['type']=='2RB 910-7AT07' or $_rows1['type']=='2RB 910-7AT17' or $_rows1['type']=='2RB 910-7AT37' or $_rows1['type']=='2RB 930-7AT07' or $_rows1['type']=='2RB 930-7AT17' or $_rows1['type']=='2RB 930-7AT27' or $_rows1['type']=='2RB 930-7AT37'){
                      echo '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
		              '<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>B′</td><td>C</td><td>C′</td><td>D</td><td>E</td><td>F</td><td>F′</td><td>F"</td><td>G</td><td>H</td><td>J</td><td>K</td></tr>'.
		              '<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['A'].'</td><td>'.$_rows1['B'].'</td><td>'.$_rows1['B1'].'</td><td>'.$_rows1['C'].'</td><td>'.$_rows1['C1'].'</td><td>'.$_rows1['D'].'</td><td>'.$_rows1['E'].'</td><td>'.$_rows1['F'].'</td><td>'.$_rows1['F1'].'</td><td>'.$_rows1['F11'].'</td><td>'.$_rows1['G'].'</td><td>'.$_rows1['H'].'</td><td>'.$_rows1['J'].'</td><td>'.$_rows1['K'].'</td></tr>'.
		              '<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>M</td><td>N</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>U</td><td>V</td><td>W</td><td>ϕX</td><td>Y×Z</td><td>X-Holes</td><td></td></tr>'.
		              '<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['M'].'</td><td>'.$_rows1['N'].'</td><td>'.$_rows1['O'].'</td><td>'.$_rows1['P'].'</td><td>'.$_rows1['Q'].'</td><td>'.$_rows1['ϕR'].'</td><td>'.$_rows1['S'].'</td><td>'.$_rows1['U'].'</td><td>'.$_rows1['V'].'</td><td>'.$_rows1['W'].'</td><td>'.$_rows1['ϕX'].'</td><td>'.$_rows1['Y_Z'].'</td><td>'.$_rows1['X_Holes'].'</td><td></td></tr>'.
		             '</table>';
              }elseif($_rows1['type']=='2RB 740-7GT37' or $_rows1['type']=='2RB 740-7GT47' or $_rows1['type']=='2RB 740-7GT57' or $_rows1['type']=='2RB 840-7JT27' or $_rows1['type']=='2RB 840-7JT37' ){
		            echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
		              '<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>C</td><td>C1</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>J</td><td>K</td><td>L</td><td>M</td></tr>'.
		              '<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['A'].'</td><td>'.$_rows1['B'].'</td><td>'.$_rows1['C'].'</td><td>'.$_rows1['C1'].'</td><td>'.$_rows1['D'].'</td><td>'.$_rows1['E'].'</td><td>'.$_rows1['F'].'</td><td>'.$_rows1['G'].'</td><td>'.$_rows1['H'].'</td><td>'.$_rows1['J'].'</td><td>'.$_rows1['K'].'</td><td>'.$_rows1['L'].'</td><td>'.$_rows1['M'].'</td></tr>'.
		              '<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>N</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>U</td><td>V</td><td>W</td><td>Y×Z</td><td>X-Holes</td><td>ϕX</td><td></td></tr>'.
		              '<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['N'].'</td><td>'.$_rows1['O'].'</td><td>'.$_rows1['P'].'</td><td>'.$_rows1['Q'].'</td><td>'.$_rows1['ϕR'].'</td><td>'.$_rows1['S'].'</td><td>'.$_rows1['U'].'</td><td>'.$_rows1['V'].'</td><td>'.$_rows1['W'].'</td><td>'.$_rows1['Y_Z'].'</td><td>'.$_rows1['X_Holes'].'</td><td>'.$_rows1['ϕX'].'</td><td></td></tr>'.
		             '</table>';
              }elseif($_rows1['type']=='2RB 920-7HT17' or $_rows1['type']=='2RB 920-7HT27' or $_rows1['type']=='2RB 920-7HT37' ){
			        echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
					'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>A′</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>H1</td><td>J</td><td>K</td><td>L</td><td>M</td><td>N</td></tr>'.
					'<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['A'].'</td><td>'.$_rows1['A1'].'</td><td>'.$_rows1['B'].'</td><td>'.$_rows1['C'].'</td><td>'.$_rows1['D'].'</td><td>'.$_rows1['E'].'</td><td>'.$_rows1['F'].'</td><td>'.$_rows1['G'].'</td><td>'.$_rows1['H'].'</td><td>'.$_rows1['H1'].'</td><td>'.$_rows1['J'].'</td><td>'.$_rows1['K'].'</td><td>'.$_rows1['L'].'</td><td>'.$_rows1['M'].'</td><td>'.$_rows1['N'].'</td></tr>'.
					'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>T</td><td>U</td><td>V</td><td>V′</td><td>V1</td><td>V′1</td><td>W</td><td>Y×Z</td><td>X-Holes</td><td>ϕX</td></tr>'.
					'<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['O'].'</td><td>'.$_rows1['P'].'</td><td>'.$_rows1['Q'].'</td><td>'.$_rows1['ϕR'].'</td><td>'.$_rows1['S'].'</td><td>'.$_rows1['T'].'</td><td>'.$_rows1['U'].'</td><td>'.$_rows1['V'].'</td><td>'.$_rows1['V1_'].'</td><td>'.$_rows1['V1'].'</td><td>'.$_rows1['V_1'].'</td><td>'.$_rows1['W'].'</td><td>'.$_rows1['Y_Z'].'</td><td>'.$_rows1['X_Holes'].'</td><td>'.$_rows1['ϕX'].'</td></tr>'.
					'</table>';
              }elseif($_rows1['type']=='2RB 940-7BT27' or $_rows1['type']=='2RB 940-7BT37'){
			        echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
					'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>B1</td><td>C</td><td>C1</td><td>D</td><td>E</td><td>F</td><td>F1</td><td>G</td><td>H</td><td>J</td><td>K</td></tr>'.
					'<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['A'].'</td><td>'.$_rows1['B'].'</td><td>'.$_rows1['B1'].'</td><td>'.$_rows1['C'].'</td><td>'.$_rows1['C1'].'</td><td>'.$_rows1['D'].'</td><td>'.$_rows1['E'].'</td><td>'.$_rows1['F'].'</td><td>'.$_rows1['F1'].'</td><td>'.$_rows1['G'].'</td><td>'.$_rows1['H'].'</td><td>'.$_rows1['J'].'</td><td>'.$_rows1['K'].'</td></tr>'.
					'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>M</td><td>N</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>U</td><td>V</td><td>W</td><td>ϕX</td><td>Y×Z</td><td>X-Holes</td></tr>'.
					'<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['M'].'</td><td>'.$_rows1['N'].'</td><td>'.$_rows1['O'].'</td><td>'.$_rows1['P'].'</td><td>'.$_rows1['Q'].'</td><td>'.$_rows1['ϕR'].'</td><td>'.$_rows1['S'].'</td><td>'.$_rows1['U'].'</td><td>'.$_rows1['V'].'</td><td>'.$_rows1['W'].'</td><td>'.$_rows1['ϕX'].'</td><td>'.$_rows1['Y_Z'].'</td><td>'.$_rows1['X_Holes'].'</td></tr>'.
					'</table>';
              }elseif($_rows1['type']=='2RB 943-7GT27' or $_rows1['type']=='2RB 943-7GT37'){
              	echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>C</td><td>E</td><td>F</td><td>F1</td><td>F11</td><td>G</td></tr>'.
              			'<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['A'].'</td><td>'.$_rows1['B'].'</td><td>'.$_rows1['C'].'</td><td>'.$_rows1['E'].'</td><td>'.$_rows1['F'].'</td><td>'.$_rows1['F1'].'</td><td>'.$_rows1['F11'].'</td><td>'.$_rows1['G'].'</td></tr>'.
              			'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>P</td><td>P′</td><td>Q</td><td>S</td><td>U</td><td>V</td><td>W</td><td>Y×Z</td></tr>'.
              			'<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['P'].'</td><td>'.$_rows1['P1'].'</td><td>'.$_rows1['Q'].'</td><td>'.$_rows1['S'].'</td><td>'.$_rows1['U'].'</td><td>'.$_rows1['V'].'</td><td>'.$_rows1['W'].'</td><td>'.$_rows1['Y_Z'].'</td></tr>'.
              			'</table>';
              }elseif($_rows1['type']=='2RB 220-7HT26' or $_rows1['type']=='2RB 320-7HT16' or $_rows1['type']=='2RB 320-7HT26' or $_rows1['type']=='2RB 420-7HT36' or $_rows1['type']=='2RB 420-7HT46' or $_rows1['type']=='2RB 520-7HT46' or $_rows1['type']=='2RB 720-7HT26' or $_rows1['type']=='2RB 720-7HT37' or $_rows1['type']=='2RB 720-7HT47' or $_rows1['type']=='2RB 720-7HT57' or $_rows1['type']=='2RB 820-7HT27' or $_rows1['type']=='2RB 820-7HT37' or $_rows1['type']=='2RB 820-7HT47'){
					echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
							'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>A′</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>H1</td><td>J</td><td>K</td><td>L</td><td>M</td><td>N</td><td>O</td></tr>'.
							'<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['A'].'</td><td>'.$_rows1['A1'].'</td><td>'.$_rows1['B'].'</td><td>'.$_rows1['C'].'</td><td>'.$_rows1['D'].'</td><td>'.$_rows1['E'].'</td><td>'.$_rows1['F'].'</td><td>'.$_rows1['G'].'</td><td>'.$_rows1['H'].'</td><td>'.$_rows1['H1'].'</td><td>'.$_rows1['J'].'</td><td>'.$_rows1['K'].'</td><td>'.$_rows1['L'].'</td><td>'.$_rows1['M'].'</td><td>'.$_rows1['N'].'</td><td>'.$_rows1['O'].'</td></tr>'.
							'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>T</td><td>U</td><td>V</td><td>V′</td><td>V1</td><td>V′1</td><td>W</td><td>Y×Z</td><td>α</td><td>X-Holes</td><td>ϕX</td><td></td></tr>'.
							'<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['P'].'</td><td>'.$_rows1['Q'].'</td><td>'.$_rows1['ϕR'].'</td><td>'.$_rows1['S'].'</td><td>'.$_rows1['T'].'</td><td>'.$_rows1['U'].'</td><td>'.$_rows1['V'].'</td><td>'.$_rows1['V1_'].'</td><td>'.$_rows1['V1'].'</td><td>'.$_rows1['V_1'].'</td><td>'.$_rows1['W'].'</td><td>'.$_rows1['Y_Z'].'</td><td>'.$_rows1['α'].'</td><td>'.$_rows1['X_Holes'].'</td><td>'.$_rows1['ϕX'].'</td><td></td></tr>'.
							'</table>';
              }else{
			         echo    '<table class="data"  cellspacing="0" cellpadding="0" style="margin-top:30px;">'.
					'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>A</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td><td>J</td><td>K</td><td>L</td><td>M</td></tr>'.
					'<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['A'].'</td><td>'.$_rows1['B'].'</td><td>'.$_rows1['C'].'</td><td>'.$_rows1['D'].'</td><td>'.$_rows1['E'].'</td><td>'.$_rows1['F'].'</td><td>'.$_rows1['G'].'</td><td>'.$_rows1['H'].'</td><td>'.$_rows1['J'].'</td><td>'.$_rows1['K'].'</td><td>'.$_rows1['L'].'</td><td>'.$_rows1['M'].'</td></tr>'.
					'<tr class="one"><td style="font-style:Italic;">Type</td><td style="font-style:Italic;">Phases</td><td>N</td><td>O</td><td>P</td><td>Q</td><td>ϕR</td><td>S</td><td>U</td><td>V</td><td>V′</td><td>Y×Z</td><td>X-Holes</td><td>ϕX</td></tr>'.
					'<tr><td>'.$_rows1['type'].'</td><td>'.$_rows1['phases'].'</td><td>'.$_rows1['N'].'</td><td>'.$_rows1['O'].'</td><td>'.$_rows1['P'].'</td><td>'.$_rows1['Q'].'</td><td>'.$_rows1['ϕR'].'</td><td>'.$_rows1['S'].'</td><td>'.$_rows1['U'].'</td><td>'.$_rows1['V'].'</td><td>'.$_rows1['V1'].'</td><td>'.$_rows1['Y_Z'].'</td><td>'.$_rows1['X_Holes'].'</td><td>'.$_rows1['ϕX'].'</td></tr>'.
					'</table>';
                     }
              }
              }
             ?>
              <p style="position: absolute;bottom:20px;left:20px;">Note:Model offerings and design parameters may change without notice.</p>
             <img src="image/fanhui.png"  onclick="history.back(-1)" id="back" style="position: absolute;bottom:20px;right:10px;" alt="side channel blower history back" />
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
	$('#back').hover(
	function(){
      $(this).attr('src','image/fanhui1.png');
      $(this).css('cursor','pointer');
		},
     function(){
		      $(this).attr('src','image/fanhui.png')
	    }
	)
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
<?php
require 'setLan.php';
//让这个常量存在就能调用
@define('feifa',ture);
//引入公共文件
require 'inc/common.php';
$_result=mysql_query("select type,sound_level,Fre_quency,output,maximum_airflow,maximum_vacuum,maximum_pressure,weight,phases,Inlet_outlet,A,A1,B,B1,C,C1,D,E,F,F1,F11,G,H,H1,J,K,L,M,N,N1,O,P,P1,Q,ϕR,S,T,U,V,V1,V1_,V3,V3_,V_PIE,V_1,V_PIE1,α,Y_Z,X_Holes,ϕX,W  from product where  type like '%{$_GET['series']}%' and output={$_GET['output']} ");
$_rows=mysql_fetch_array($_result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title><?php  echo $_GET['series'];?> <?php echo _('Side channel blower'); ?></title>
<meta name="description" content="<?php echo _('Greenco Side channel blower,Regenerative blower,Ring blower with NSK,SKF bearing high temperaturer grease,The world leader in manufacturer,export to more than 100 countries by Greenco.'); ?>" />
<meta name="keywords" content="<?php echo _('Side channel blower,Regenerative blower,Ring blower,Air blower,Vacuum pump,single stage,double stage,multi stage blower,2RB,3RB,4RB series,GREENCO'); ?>" />
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
  	table.data td{text-align:center;padding:4px;height:20px;line-height:20px;color:#333;border:1px solid #999;border-top:0px;border-right:0px;}
    table.data span{vertical-align:bottom;font-size:9px;color:#333;}
  	table.data tr.one{background:url(image/table_bg.png) repeat-x;font-size:12px;}
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
       <?php require 'inc/prod-left.php';?>
       <div class="right">
              <div id="left">
                <h4><?php echo $_rows['type'];?> <?php echo _('Technical Data');?></h4>
                <table style="font-size:12px;">
                <tr><td><strong><?php echo _('Model');?>: </strong><span><?php echo $_rows['type'];?></span></td>
                <td><strong><?php echo _('Stage');?>:</strong> <span><?php echo _('Double');?></span></td><td>
                <tr><td><strong><?php echo _('Freq');?>:</strong> <span><?php echo $_rows['Fre_quency'];?></span> (Hz)</td>
                <td><strong><?php echo _('Power');?>:</strong> <span><?php echo $_rows['output'];?></span> (Kw)</td><td>
                <tr><td><strong><?php echo _('Airflow');?>:</strong> <span><?php echo $_rows['maximum_airflow'];?></span> (m³/h)</td>
                <td><strong><?php echo _('TH.CL');?>:</strong> <span>IP55</span></td><td>
                <tr><td><strong><?php echo _('Pressure');?>:</strong> <span>+<?php echo $_rows['maximum_pressure'];?></span> (mbar)</td>
                <td><strong><?php echo _('IN.CL');?>:</strong> <span>F or H</span></td><td>
                <tr><td><strong><?php echo _('Vacuum');?>:</strong> <span><?php echo $_rows['maximum_vacuum'];?></span> (mbar)</td>
                <td><strong><?php echo _('N.weight');?>:</strong> <span><?php echo $_rows['weight'];?></span> (kg)</td><td>
                <tr><td><strong><?php echo _('Inlet/outlet');?>:</strong> <span><?php echo $_rows['Inlet_outlet'];?></span>(inch)</td>
                <td><strong><?php echo _('Sound');?>:</strong> <span><?php echo $_rows['sound_level'];?></span> dB(A)</td><td>
                <tr><td><strong><?php echo _('Dimension');?>(L*W*H):</strong> <span><?php  if($_rows['type']=='2RB 220-7HH26' or $_rows['type']=='2RB 320-7HH36' or $_rows['type']=='2RB 320-7HH26' or $_rows['type']=='2RB 320-7HA31' or $_rows['type']=='2RB 420-7HH36' or $_rows['type']=='2RB 420-7HH46' or $_rows['type']=='2RB 520-7HH46' or $_rows['type']=='2RB 520-7HH57' or $_rows['type']=='2RB 720-7HH16' or $_rows['type']=='2RB 720-7HH26' or $_rows['type']=='2RB 720-7HH37' or $_rows['type']=='2RB 720-7HH47' or $_rows['type']=='2RB 720-7HH57'){echo $_rows['F'].'×'  .intval($_rows['A1']+$_rows['A']/2).   '×'.$_rows['B'];}
                                             elseif($_rows['type']=='2RB 820-7HH17' or $_rows['type']=='2RB 820-7HH27' or $_rows['type']=='2RB 820-7HH37' or $_rows['type']=='2RB 820-7HH47'){echo $_rows['F'].'×'  .intval($_rows['A1']+$_rows['A']/2).   '×'.$_rows['B1'];}
                                             elseif($_rows['type']=='2RB 920-7HH17' or $_rows['type']=='2RB 920-7HH27' or $_rows['type']=='2RB 920-7HH37' or $_rows['type']=='2RB 920-7HH47'){echo $_rows['F1'].'×'  .intval($_rows['A1']+$_rows['A']/2).   '×'.($_rows['B']+$_rows['B1']);}
                                             elseif($_rows['type']=='2RB 940-7BH27' or $_rows['type']=='2RB 940-7BH37' or $_rows['type']=='2RB 940-7BH47'){echo $_rows['F1'].'×' .$_rows['A'].   '×'.($_rows['B']+$_rows['B1']);}
                                             elseif($_rows['type']=='2RB 943-7BH27' or $_rows['type']=='2RB 943-7BH37' or $_rows['type']=='2RB 943-7BH47'){echo $_rows['B'].'×'.$_rows['A'].'×'.$_rows['F'];}
                	                         else{echo $_rows['F'].'×'.$_rows['A'].'×'.$_rows['B'];}?>
                	                         </span> (mm)</td><td>
                </table>
             </div>
             <div id="right">
                <img src="product_image/product_content_big/<?php echo  substr($_rows['type'],0,7)?>.jpg" alt="<?php echo $_rows['type'];?> side channel blower image and picture"/>
             </div>

             <h5><?php echo _('Dimension for side channel blower');?> <?php echo $_rows['type'];?></h5>
             <!-- 尺寸图判断 -->
             <?php if($_rows['type']=='2RB 220-7HH26' or $_rows['type']=='2RB 320-7HH36' or
             		 $_rows['type']=='2RB 320-7HH26'or $_rows['type']=='2RB 320-7HA31' or $_rows['type']=='2RB 420-7HH36' or $_rows['type']
             		=='2RB 420-7HH46' or $_rows['type']=='2RB 420-7HA31' or $_rows['type']=='2RB 420-7AV45'){echo
                    '<a rel="shadowbox" href="product_image/dimensions/2RB220_big.jpg">
		<img alt="Dimension for side channel blower '.$_rows['type'].' " class="border" src="product_image/dimensions/2RB220_small.jpg" 
		 title="Click to Enlarge"/></a>';}
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
             ?>
        <p style="position: absolute;bottom:20px;left:20px;"><?php echo _('Note:Model offerings and design parameters may change without notice.');?></p>
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


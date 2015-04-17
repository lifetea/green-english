<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<?php require 'setLan.php';?>
<title><?php echo (L("DOWNLOAD_TITLE")); ?></title>
<meta name="keywords" content="<?php echo (L("DOWNLOAD_KEYWORDS")); ?>" />
<meta name="description"content="<?php echo (L("DOWNLOAD_DESCRIPTION")); ?>" />
<?php require 'inc/css.inc';?>
<link href="favicon.ico" rel="shortcut icon" />
</head>
<body class="<?php echo (L("HEADER_BODY_CLASS")); ?>">
		<div class="container header row" >
			<div class="col-xs-4">
				<a class="logo" rel="nofollow" href="index.php">
					<img src="<?php echo (L("SRC_LAN")); ?>/logo.jpg" />
				</a>
			</div>
			<div class="col-xs-4 trademark">
				<img src="<?php echo (L("SRC_LAN")); ?>/home7.png"/>
			</div>
			<div class="col-xs-4">
				<div class="row">
					<div class="lang-select pull-right">
					   <a href="<?php echo (C("ZH_URL")); ?>"  target="_blank" ><img src="<?php echo (C("IMG_ROOT")); ?>/china.png" class="language_china" title="中文" alt="中文"/></a>
					   <a href="<?php echo (C("EN_URL")); ?>"  rel='nofollow' ><img src="<?php echo (C("IMG_ROOT")); ?>/english.png" class="language_english" title="English" alt="英文"/></a>
					   <a href="<?php echo (C("ES_URL")); ?>"  target="_blank" ><img src="<?php echo (C("IMG_ROOT")); ?>/spanish.png" class="language_english" title="Spanish" alt="西班牙"/></a>
					</div>
				</div>
				<div class="row">
					<div class="lang-select pull-right">
						<img src="<?php echo (C("IMG_ROOT")); ?>/home6.png"/>
					</div>
				</div>		
			</div>
		</div>
		<nav class="nav navbar-inverse container-fluid">
				<div class="container">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
										<li>
												<a rel="nofollow"  href="index.php"><?php echo (L("HEADER_HOME")); ?></a>
										</li>
								  <li class="dropdown">
								  		<a href="about_us.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								    		<?php echo (L("HEADER_ABOUT_US")); ?> 
								    		<span class="caret"></span>
								    	</a>
								    	<ul class="dropdown-menu" role="menu">
									            <li>
							            				<a rel="nofollow" href="about_us.php"><?php echo (L("HEADER_ABOUT_GREENCO")); ?></a>
						            			</li>
									            <li>
									            		<a rel="nofollow" href="Certification.php"><?php echo (L("HEADER_CERTIFICATION")); ?></a>
								            	</li>
									            <li>
									            		<a rel="nofollow" href="Honour.php"><?php echo (L("HEADER_HONOUR")); ?></a>
								            	</li>
									            <li>
									            		<a rel="nofollow" href="Video.php"><?php echo (L("HEADER_VIDEO")); ?></a>
							            		</li>
									            <li>
									            		<a rel="nofollow" href="Equipments.php"><?php echo (L("HEADER_EQUIPMENTS")); ?></a>
							            		</li>
									    </ul>
								  </li>
								  
								  
								  <li class="dropdown">
								    <a href="Side_Channel_Blower_2RB_Single_Stage.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								    		<?php echo (L("HEADER_PRODUCTS")); ?>
								    		<span class="caret"></span>
								    </a>
								    <ul class="dropdown-menu" role="menu">
								            <li>
								            	<a href="Side_Channel_Blower_2RB_Single_Stage.php"><?php echo (L("HEADER_2RB_SINGLE")); ?></a>
							            	</li>
								            <li>
								            	<a href="Side_Channel_Blower_2RB_Double_Stage.php"><?php echo (L("HEADER_2RB_DOUBLE")); ?></a>
							            	</li>
											<li class="divider">
											<li>
													<img class="pull-right" src="image/new.gif">
													<a href="Side_Channel_Blower_3RB_Single_Stage.php"><?php echo (L("HEADER_3RB_SINGLE")); ?></a>
									 	 	</li>
											<li>
													<img class="pull-right" src="image/new.gif">
													<a href="Side_Channel_Blower_3RB_Double_Stage.php"><?php echo (L("HEADER_3RB_DOUBLE")); ?></a>
											</li>
											<li>
											 		<img class="pull-right" src="image/new.gif">
													<a href="Side_Channel_Blower_3RB_Three_Stage.php"><?php echo (L("HEADER_3RB_THREE")); ?></a>
											</li>
											<li class="divider">                  
								            <li>
								            		<a href="Side_Channel_Blower_4RB_Single_Stage.php"><?php echo (L("HEADER_4RB_SINGLE")); ?></a>
								            </li>
								            <li>
								            		<a href="Side_Channel_Blower_4RB_Double_Stage.php"><?php echo (L("HEADER_4RB_DOUBLE")); ?></a>
							            	</li>
								            <li>
							         	   			<a href="Side_Channel_Blower_4RB_Three_Stage.php"><?php echo (L("HEADER_4RB_THREE")); ?></a>
								            </li>
								            <li>
								            		<a href="Belt_Drive_Air_Blower_2RB_Single_Stage.php"><?php echo (L("HEADER_2RB_SINGLE_BELT")); ?></a>
								            </li>
								            <li class="divider">
								            <li>
								            		<a href="Belt_Drive_Air_Blower_2RB_Double_Stage.php"><?php echo (L("HEADER_2RB_DOUBLE_BELT")); ?></a>
								            </li>
								            <li>
								            <a href="IE2_Single_Stage_Regenerative_Blower.php"><?php echo (L("HEADER_2RB_SINGLE_REGENERATIVE")); ?></a>
								            </li>
								            <li>
								            <a href="IE2_Double_Stage_Regenerative_Blower.php"><?php echo (L("HEADER_2RB_DOUBLE_REGENERATIVE")); ?></a>
								            </li>
								            <li>
								            <a href="Cover_Suction_Ring_Blower.php"><?php echo (L("HEADER_COVER_SUCTION")); ?></a>
								            </li>
								            <li class="divider">
								            <li>
								            <a href="Silencer.php"><?php echo (L("HEADER_SILENCER")); ?></a>
								            </li>
								            <li>
								            <a href="Relief_Valve.php"><?php echo (L("HEADER_RELIEF_VALUE")); ?></a>
								            </li>
								            <li>
								            <a href="Inlet_Vacuum_Filter.php"><?php echo (L("HEADER_FILTER")); ?></a>
								            </li>
								        </ul>
								      </li>        
								 <li>
								        <a href="application.php"><?php echo (L("HEADER_APPLICATIONS")); ?></a>
								  </li>
								  
								 <li class="dropdown">
									    <a href="news_company.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									    		<?php echo (L("HEADER_NEWS_CENTER")); ?>
									    		<span class="caret"></span>
									    </a>
									    <ul class="dropdown-menu" role="menu">
									            <li><a rel="nofollow" href="news_company.php"><?php echo (L("HEADER_COMPANY_NEWS")); ?></a></li>
									            <li><a rel="nofollow" href="news_Industry.php"><?php echo (L("HEADER_INDUSTRY_NEWS")); ?></a></li>
									            <li><a rel="nofollow" href="Support.php"><?php echo (L("HEADER_SUPPORT")); ?></a></li>
								        </ul>
					      		</li>        
								<li>
										<a rel="nofollow" href="Download.php"><?php echo (L("HEADER_DOWNLOADS")); ?></a>
								</li>
								<li>
										<a rel="nofollow" href="Contact_us.php"><?php echo (L("HEADER_CONTACT_US")); ?></a>
								</li>
								<li>
										<a rel="nofollow" href="#"><?php echo (L("HEADER_JOIN_US")); ?></a>
								</li>
					 	  </ul>
						<form class="navbar-form navbar-right" role="search">
								<input type="text"  id="searchBox" name="term"  class="form-control" placeholder="<?php echo (L("HEADER_SEARCH")); ?>">
								<button type="submit" class="btn btn-success btn-search"><span class="glyphicon glyphicon-search"></span></button>
						</form>
					 </div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
		</nav>


<!-- 下载内容 -->
<div class="container-fluid content">
		<div class="container download" >
			        <img class="download-img" src="<?php echo (L("SRC_LAN")); ?>/download_img.jpg"  alt="side channel blower Downloads"/>
			        
			         <p style="background:url(image/download_PDF_ico.png) no-repeat 0px 22px;color:#333;font-size:13px;height:50px;line-height:65px;width:450px;margin-left:10px;text-indent:22px;border-bottom:1px solid #666;">
			         		<a href="upfile/side channel blower Complete Catalog.pdf" style="font-size:13px;font-weight:600;" id="catalog" target="_blank"><?php echo _('Complete Catalog (2RB,4RB and Belt Drive)');?> </a>
			         </p>
			
						<div class="row">
							<div class="col-md-4">
								<h5 style="background:url(image/arrow04.gif) no-repeat 5px 12px;padding-left:6px;"><?php echo _('Overview 2RB Series');?></h5>
								<div class="row">
									<a class="col-md-6" href="<?php echo _('upfile');?>/overview_2rb/side channel blower 2RB_1AC_pressure_selection_diagram.pdf" target="_blank">2RB <?php echo _('1AC Pressure Operation');?></a>
									<a class="col-md-6" href="<?php echo _('upfile');?>/overview_2rb/side channel blower 2RB_3AC_Pressure_selection_diagram.pdf" target="_blank">2RB <?php echo _('3AC Pressure Operation');?></a>							
								</div>
								<div class="row">
									<a class="col-md-6"  href="<?php echo _('upfile');?>/overview_2rb/side channel blower 2RB_1AC_Vacuum_selection_diagram.pdf" target="_blank">2RB <?php echo _('1AC Vacuum Operation');?></a>
									<a class="col-md-6"  href="<?php echo _('upfile');?>/overview_2rb/side channel blower 2RB_3AC_Vacuum_selection_diagram.pdf" target="_blank">2RB <?php echo _('3AC Vacuum Operation');?></a>					
								</div>
							</div>
							<div class="col-md-4">
								<h5 style="background:url(image/arrow04.gif) no-repeat 5px 12px;padding-left:6px;"><?php echo _('Overview 4RB Series');?></h5>
								<div class="row">
									<a class="col-md-6" href="<?php echo _('upfile');?>/overview_4rb/side channel blower 4RB_1AC_pressure_selection_diagram.pdf" target="_blank">4RB <?php echo _('1AC Pressure Operation')?></a>
									<a class="col-md-6" href="<?php echo _('upfile');?>/overview_4rb/side channel blower 4RB_3AC_Pressure_selection_diagram.pdf" target="_blank">4RB <?php echo _('3AC Pressure Operation')?></a>				
								</div>
								<div class="row">
									<a class="col-md-6" href="<?php echo _('upfile');?>/overview_4rb/side channel blower 4RB_1AC_Vacuum_selection_diagram.pdf" target="_blank">4RB <?php echo _('1AC Vacuum Operation')?></a>
									<a class="col-md-6" href="<?php echo _('upfile');?>/overview_4rb/side channel blower 4RB_3AC_Vacuum_selection_diagram.pdf" target="_blank">4RB <?php echo _('3AC Vacuum Operation')?></a>			
								</div>							
					      	</div>
					      </div>

				
				
			         <H3 style="color:#eee;clear:both;background:#666;border:1px solid #555;text-indent:5px;"><?php echo _('Side Channel Blower PDF Data Sheets');?></H3>
			         <div>
			         <div class="left" style="margin-bottom:30px;">
			             <h4 style="background:url(image/arrow04.gif) no-repeat 5px 13px;padding-left:6px;"><?php echo _('2RB Series Data Sheets(incl. IE1 and IE2 models)');?></h4>
			             <table>
			             <tr class="one"><td><a href="<?php echo _('upfile');?>/2RB_Series/side channel blower 2RB010.pdf" target="_blank">2RB 010.pdf</a></td>
			             <td><a href="<?php echo _('upfile');?>/2RB_Series/side channel blower 2RB110.pdf" target="_blank">2RB 110.pdf</a></td>
			             <td><a href="<?php echo _('upfile');?>/2RB_Series/side channel blower 2RB210.pdf" target="_blank">2RB 210.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB210-IE2.pdf" target="_blank">2RB 210 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="<?php echo _('upfile');?>/2RB_Series/side channel blower 2RB220.pdf" target="_blank">2RB 220.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB220-IE2.pdf" target="_blank">2RB 220 IE2.pdf</a></td>
			             <td><a href="<?php echo _('upfile');?>/2RB_Series/side channel blower 2RB230.pdf" target="_blank">2RB 230.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB230-IE2.pdf" target="_blank">2RB 230 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB310.pdf" target="_blank">2RB 310.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB310-IE2.pdf" target="_blank">2RB 310 IE2.pdf</a></td>
			             <td><a href="upfile/2RB_Series/side channel blower 2RB320.pdf" target="_blank">2RB 320.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB320-IE2.pdf" target="_blank">2RB 320 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB330.pdf" target="_blank">2RB 330.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB330-IE2.pdf" target="_blank">2RB 330 IE2.pdf</a></td>
			             <td><a href="upfile/2RB_Series/side channel blower 2RB410.pdf" target="_blank">2RB 410.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB410-IE2.pdf" target="_blank">2RB 410 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB420.pdf" target="_blank">2RB 420.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB420-IE2.pdf" target="_blank">2RB 420 IE2.pdf</a></td>
			             <td><a href="upfile/2RB_Series/side channel blower 2RB430.pdf" target="_blank">2RB 430.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB430-IE2.pdf" target="_blank">2RB 430 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB490.pdf" target="_blank">2RB 490.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB490-IE2.pdf" target="_blank">2RB 490 IE2.pdf</a></td>
			             <td><a href="upfile/2RB_Series/side channel blower 2RB510.pdf" target="_blank">2RB 510.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB510-IE2.pdf" target="_blank">2RB 510 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB520.pdf" target="_blank">2RB 520.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB520-IE2.pdf" target="_blank">2RB 520 IE2.pdf</a></td>
			             <td><a href="upfile/2RB_Series/side channel blower 2RB530.pdf" target="_blank">2RB 530.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB530-IE2.pdf" target="_blank">2RB 530 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB590.pdf" target="_blank">2RB 590.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB590-IE2.pdf" target="_blank">2RB 590 IE2.pdf</a></td>
			             <td><a href="upfile/2RB_Series/side channel blower 2RB610.pdf" target="_blank">2RB 610.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB610-IE2.pdf" target="_blank">2RB 610 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB630.pdf" target="_blank">2RB 630.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB630-IE2.pdf" target="_blank">2RB 630 IE2.pdf</a></td>
			             <td><a href="upfile/2RB_Series/side channel blower 2RB710.pdf" target="_blank">2RB 710.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB710-IE2.pdf" target="_blank">2RB 710 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB720.pdf" target="_blank">2RB 720.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB720-IE2.pdf" target="_blank">2RB 720 IE2.pdf</a></td>
			             <td><a href="upfile/2RB_Series/side channel blower 2RB730.pdf" target="_blank">2RB 730.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB730-IE2.pdf" target="_blank">2RB 730 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB740.pdf" target="_blank">2RB 740.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB740-IE2.pdf" target="_blank">2RB 740 IE2.pdf</a></td>
			             <td><a href="upfile/2RB_Series/side channel blower 2RB790.pdf" target="_blank">2RB 790.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB790-IE2.pdf" target="_blank">2RB 790 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB810.pdf" target="_blank">2RB 810.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB810-IE2.pdf" target="_blank">2RB 810 IE2.pdf</a></td>
			             <td><a href="upfile/2RB_Series/side channel blower 2RB820.pdf" target="_blank">2RB 820.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB820-IE2.pdf" target="_blank">2RB 820 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB830.pdf" target="_blank">2RB 830.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB830-IE2.pdf" target="_blank">2RB 830 IE2.pdf</a></td>
			             <td><a href="upfile/2RB_Series/side channel blower 2RB840.pdf" target="_blank">2RB 840.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB840-IE2.pdf" target="_blank">2RB 840 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB910.pdf" target="_blank">2RB 910.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB910-IE2.pdf" target="_blank">2RB 910 IE2.pdf</a></td>
			             <td><a href="upfile/2RB_Series/side channel blower 2RB920.pdf" target="_blank">2RB 920.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB920-IE2.pdf" target="_blank">2RB 920 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB930.pdf" target="_blank">2RB 930.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB930-IE2.pdf" target="_blank">2RB 930 IE2.pdf</a></td>
			             <td><a href="upfile/2RB_Series/side channel blower 2RB940.pdf" target="_blank">2RB 940.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB940-IE2.pdf" target="_blank">2RB 940 IE2.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/2RB_Series/side channel blower 2RB943.pdf" target="_blank">2RB 943.pdf</a></td>
			             <td><a href="upfile/IE2_Series/side channel blower 2RB943-IE2.pdf" target="_blank">2RB 943 IE2.pdf</a></td></tr><tr>
			             </table>
			         </div>
			
			
			         <div class="right">
			             <h4 style="background:url(image/arrow04.gif) no-repeat 5px 13px;padding-left:6px;"><?php echo _('2RB Series Belt Drive Data Sheets');?></h4>
			             <table id="belt">
			             <tr class="one"><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB213.pdf" target="_blank">2RB 213-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB223.pdf" target="_blank">2RB 223-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB233.pdf" target="_blank">2RB 233-1HY99.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB413.pdf" target="_blank">2RB 413-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB423.pdf" target="_blank">2RB 423-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB433.pdf" target="_blank">2RB 433-1HY99.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB513.pdf" target="_blank">2RB 513-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB523.pdf" target="_blank">2RB 523-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB533.pdf" target="_blank">2RB 533-1HY99.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB613.pdf" target="_blank">2RB 613-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB713.pdf" target="_blank">2RB 713-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB723.pdf" target="_blank">2RB 723-1HY99.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB733.pdf" target="_blank">2RB 733-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB743.pdf" target="_blank">2RB 743-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB813.pdf" target="_blank">2RB 813-1HY99.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB823.pdf" target="_blank">2RB 823-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB833.pdf" target="_blank">2RB 833-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB913.pdf" target="_blank">2RB 913-1HY99.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB923.pdf" target="_blank">2RB 923-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB933.pdf" target="_blank">2RB 933-1HY99.pdf</a></td><td><a href="upfile/Belt_drive/Side channel blower Belt drive 2RB943.pdf" target="_blank">2RB 943-1HY99.pdf</a></td></tr>
			             </table>
			         </div>
			         <div class="right">
			             <h4 style="background:url(image/arrow04.gif) no-repeat 5px 12px;padding-left:6px;"><?php echo _('4RB Series Data Sheets');?></h4>
			             <table>
			             <tr class="one"><td><a href="upfile/4RB_Series/side channel blower 4RB210.pdf" target="_blank">4RB 210.pdf</a></td><td><a href="upfile/4RB_Series/side channel blower 4RB220.pdf">4RB 220.pdf</a></td><td><a href="upfile/4RB_Series/side channel blower 4RB310.pdf" target="_blank">4RB 310.pdf</a></td><td><a href="upfile/4RB_Series/side channel blower 4RB320.pdf" target="_blank">4RB 320.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/4RB_Series/side channel blower 4RB410.pdf" target="_blank">4RB 410.pdf</a></td><td><a href="upfile/4RB_Series/side channel blower 4RB420.pdf">4RB 420.pdf</a></td><td><a href="upfile/4RB_Series/side channel blower 4RB510.pdf" target="_blank">4RB 510.pdf</a></td><td><a href="upfile/4RB_Series/side channel blower 4RB520.pdf" target="_blank">4RB 520.pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/4RB_Series/side channel blower 4RB530.pdf" target="_blank">4RB 530.pdf</a></td><td><a href="upfile/4RB_Series/side channel blower 4RB610.pdf">4RB 610.pdf</a></td><td><a href="upfile/4RB_Series/side channel blower 4RB620.pdf" target="_blank">4RB 620.pdf</a></td><td><a href="upfile/4RB_Series/side channel blower 4RB630.pdf" target="_blank">4RB 630.pdf</a></td></tr>
			             </table>
			         </div>
			         <div class="right" style="margin-bottom:30px;">
			             <h4 style="background:url(image/arrow04.gif) no-repeat 5px 12px;padding-left:6px;"><?php echo _('Cover Suction Ring Blower');?></h4>
			             <table>
			             <tr class="one"><td><a href="upfile/B_Series/side channel blower 2RB210(B).pdf" target="_blank">2RB 210(B).pdf</a></td><td><a href="upfile/B_Series/side channel blower 2RB410(B).pdf" target="_blank">2RB 410(B).pdf</a></td><td><a href="upfile/B_Series/side channel blower 2RB510(B).pdf" target="_blank">2RB 510(B).pdf</a></td><td><a href="upfile/B_Series/side channel blower 2RB710(B).pdf" target="_blank">2RB 710(B).pdf</a></td></tr>
			             <tr class="one"><td><a href="upfile/B_Series/side channel blower 2RB810(B).pdf" target="_blank">2RB 810(B).pdf</a></td></tr>
			             </table>
			         </div>
			</div>
		</div>
</div>
<!-- 下载内容end -->

<div class="container-fluid navbar-inverse footer">
	<div class="container" >
			<ul class="pull-left item">
				<li class="item-title" ><?php echo (L("HEADER_ABOUT_GREENCO")); ?></li>
				<li><a rel="nofollow" href="Certification.php"><?php echo (L("HEADER_CERTIFICATION")); ?></a></li>
				<li><a rel="nofollow" href="Honour.php"><?php echo (L("HEADER_HONOUR")); ?></a></li>
				<li><a rel="nofollow" href="Video.php"><?php echo (L("HEADER_VIDEO")); ?></a></li>
				<li><a rel="nofollow" href="Equipments.php"><?php echo (L("HEADER_EQUIPMENTS")); ?></a></li>
			</ul>
			<ul class="pull-left item">
				<li class="item-title" ><?php echo (L("HEADER_PRODUCTS")); ?></li>
				<li><a rel="nofollow" href="Side_Channel_Blower_2RB_Single_Stage.php"><?php echo (L("HEADER_2RB_SINGLE")); ?></a></li>
				<li><a rel="nofollow" href="Side_Channel_Blower_3RB_Single_Stage.php"><?php echo (L("HEADER_3RB_SINGLE")); ?></a></li>
				<li><a rel="nofollow" href="Side_Channel_Blower_4RB_Single_Stage.php"><?php echo (L("HEADER_4RB_SINGLE")); ?></a></li>
				<li><a rel="nofollow" href="IE2_Single_Stage_Regenerative_Blower.php"><?php echo (L("HEADER_2RB_SINGLE_REGENERATIVE")); ?></a></li>
				<li><a rel="nofollow" href="Belt_Drive_Air_Blower_2RB_Single_Stage.php"><?php echo (L("HEADER_2RB_SINGLE_BELT")); ?></a></li>
			</ul>
			<ul class="pull-left item">
				<li class="item-title" ><?php echo (L("FOOTER_ACCESSORIES")); ?></li>
				<li><a rel="nofollow" href="Silencer.php"><?php echo (L("HEADER_SILENCER")); ?></a></li>
				<li><a rel="nofollow" href="Relief_Valve.php"><?php echo (L("HEADER_RELIEF_VALUE")); ?></a></li>
				<li><a rel="nofollow" href="Inlet_Vacuum_Filter.php"><?php echo (L("HEADER_FILTER")); ?></a></li>
			</ul>
			<ul class="pull-left item">
					<li class="item-title" ><?php echo (L("HEADER_DOWNLOADS")); ?></li>
					<li><a rel="nofollow" href="upfile/side channel blower Complete Catalog.pdf"><?php echo (L("FOOTER_CATALOG")); ?></a></li>
					<li><a rel="nofollow" href="upfile/Side channel blower Relief_Valve 2BX4.pdf"><?php echo (L("FOOTER_ACCESSORIES")); ?></a></li>
					<li><a rel="nofollow" href="javascript:;"><?php echo (L("HEADER_FILTER")); ?></a></li>
			</ul>
			<ul class="pull-left item last">
					<li class="item-title"><?php echo (L("HEADER_NEWS_CENTER")); ?></li>
					<li><a rel="nofollow" href="news_company.php"><?php echo (L("HEADER_COMPANY_NEWS")); ?></a></li>
					<li><a rel="nofollow" href="news_Industry.php"><?php echo (L("HEADER_INDUSTRY_NEWS")); ?></a></li>
					<li><a rel="nofollow" href="Support.php"><?php echo (L("HEADER_SUPPORT")); ?></a></li>
					<li><a rel="nofollow" href="sitemap.xml"><?php echo (L("FOOTER_SITEMAP")); ?></a></li>
			</ul>
	      </div>
		<p class="col-md-offset-6">
				<span>©2002-2013 Copyright Greenco. All Rights Reserved 浙ICP备12000939号-1
						 <script type="text/javascript">
									var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
									document.write(unescape("%3Cspan id='cnzz_stat_icon_1000346474'%3E%3C/span%3E%3Cscript src='" +
											 cnzz_protocol + "s5.cnzz.com/z_stat.php%3Fid%3D1000346474' type='text/javascript'%3E%3C/script%3E"));
						  </script>
				</span>
		</p>
		</div>	
	</div>
</div>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>
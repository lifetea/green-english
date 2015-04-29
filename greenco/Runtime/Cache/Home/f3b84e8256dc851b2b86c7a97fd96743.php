<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link href="<?php echo (C("SRC_ROOT")); ?>/src/css/common.css" rel="stylesheet">
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
												<a rel="nofollow"  href="<?php echo (C("Index_ROOT")); ?>/index"><?php echo (L("HEADER_HOME")); ?></a>
										</li>
								  <li class="dropdown">
								  		<a href="about_us.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								    		<?php echo (L("HEADER_ABOUT_US")); ?> 
								    		<span class="caret"></span>
								    	</a>
								    	<ul class="dropdown-menu" role="menu">
									            <li>
							            				<a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/about_us"><?php echo (L("HEADER_ABOUT_GREENCO")); ?></a>
						            			</li>
									            <li>
									            		<a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/certification"><?php echo (L("HEADER_CERTIFICATION")); ?></a>
								            	</li>
									            <li>
									            		<a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/honour"><?php echo (L("HEADER_HONOUR")); ?></a>
								            	</li>
									            <li>
									            		<a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/video"><?php echo (L("HEADER_VIDEO")); ?></a>
							            		</li>
									            <li>
									            		<a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/equipments"><?php echo (L("HEADER_EQUIPMENTS")); ?></a>
							            		</li>
									    </ul>
								  </li>
								  
								  
								  <li class="dropdown">
								    <a href="<?php echo (C("PRO_ROOT")); ?>/2RB_1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								    		<?php echo (L("HEADER_PRODUCTS")); ?>
								    		<span class="caret"></span>
								    </a>
								    <ul class="dropdown-menu" role="menu">
								            <li>
								            	<a href="<?php echo (C("PRO_ROOT")); ?>/2RB_1"><?php echo (L("HEADER_2RB_SINGLE")); ?></a>
							            	</li>
								            <li>
								            	<a href="<?php echo (C("PRO_ROOT")); ?>/2RB_2"><?php echo (L("HEADER_2RB_DOUBLE")); ?></a>
							            	</li>
											<li class="divider">
											<li>
													<img class="pull-right" src="<?php echo (C("IMG_ROOT")); ?>/new.gif">
													<a href="<?php echo (C("PRO_ROOT")); ?>/3RB_1"><?php echo (L("HEADER_3RB_SINGLE")); ?></a>
									 	 	</li>
											<li>
													<img class="pull-right" src="<?php echo (C("IMG_ROOT")); ?>/new.gif">
													<a href="<?php echo (C("PRO_ROOT")); ?>/3RB_2"><?php echo (L("HEADER_3RB_DOUBLE")); ?></a>
											</li>
											<li>
											 		<img class="pull-right" src="<?php echo (C("IMG_ROOT")); ?>/new.gif">
													<a href="<?php echo (C("PRO_ROOT")); ?>/3RB_3"><?php echo (L("HEADER_3RB_THREE")); ?></a>
											</li>
											<li class="divider">                  
								            <li>
								            		<a href="<?php echo (C("PRO_ROOT")); ?>/4RB_1"><?php echo (L("HEADER_4RB_SINGLE")); ?></a>
								            </li>
								            <li>
								            		<a href="<?php echo (C("PRO_ROOT")); ?>/4RB_2"><?php echo (L("HEADER_4RB_DOUBLE")); ?></a>
							            	</li>
								            <li>
							         	   			<a href="<?php echo (C("PRO_ROOT")); ?>/4RB_3"><?php echo (L("HEADER_4RB_THREE")); ?></a>
								            </li>
								             <li class="divider">
								            <li>
								            		<a href="<?php echo (C("PRO_ROOT")); ?>/Belt_2RB_1"><?php echo (L("HEADER_2RB_SINGLE_BELT")); ?></a>
								            </li>
								            <li>
								            		<a href="<?php echo (C("PRO_ROOT")); ?>/Belt_2RB_2"><?php echo (L("HEADER_2RB_DOUBLE_BELT")); ?></a>
								            </li>
								            <li class="divider">
								            <li>
								            <a href="<?php echo (C("PRO_ROOT")); ?>/IE2_1"><?php echo (L("HEADER_2RB_SINGLE_REGENERATIVE")); ?></a>
								            </li>
								            <li>
								            <a href="<?php echo (C("PRO_ROOT")); ?>/IE2_2"><?php echo (L("HEADER_2RB_DOUBLE_REGENERATIVE")); ?></a>
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
								        <a href="application"><?php echo (L("HEADER_APPLICATIONS")); ?></a>
								  </li>
								  
								 <li class="dropdown">
									    <a href="news_company.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									    		<?php echo (L("HEADER_NEWS_CENTER")); ?>
									    		<span class="caret"></span>
									    </a>
									    <ul class="dropdown-menu" role="menu">
									            <li><a rel="nofollow" href="<?php echo (C("NEWS_ROOT")); ?>/company"><?php echo (L("HEADER_COMPANY_NEWS")); ?></a></li>
									            <li><a rel="nofollow" href="<?php echo (C("NEWS_ROOT")); ?>/industry"><?php echo (L("HEADER_INDUSTRY_NEWS")); ?></a></li>
									            <li><a rel="nofollow" href="<?php echo (C("NEWS_ROOT")); ?>/support"><?php echo (L("HEADER_SUPPORT")); ?></a></li>
								        </ul>
					      		</li>        
								<li>
										<a rel="nofollow" href="Download.php"><?php echo (L("HEADER_DOWNLOADS")); ?></a>
								</li>
								<li>
										<a rel="nofollow" href="contact"><?php echo (L("HEADER_CONTACT_US")); ?></a>
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

<!-- 应用内容 -->
<div class="container-fuild">
	<div class="container pro">
       		<img src="<?php echo (L("SRC_LAN")); ?>/product_banner.png" class="banner" />
 		<div class="row">
			<div class="col-md-3">
				<h3 class="head-1"><?php echo _('Side Channel Blower')?></h3>
<ul class="pro-nav">
	<li>
		<a class="link-3" href="<?php echo (C("PRO_ROOT")); ?>/2RB_1"><?php echo _('2RB Single Stage Side Channel Blower')?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PRO_ROOT")); ?>/2RB_2"><?php echo _('2RB Double Stage Side Channel Blower')?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PRO_ROOT")); ?>/3RB_1" style="background:url(<?php echo (C("IMG_ROOT")); ?>/new.gif) no-repeat 222px -2px;display:block;"><?php echo _('3RB Single Stage Side Channel Blower')?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PRO_ROOT")); ?>/3RB_2" style="background:url(<?php echo (C("IMG_ROOT")); ?>/new.gif) no-repeat 222px -2px;display:block;"><?php echo _('3RB Double Stage Side Channel Blower')?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PRO_ROOT")); ?>/3RB_3" style="background:url(<?php echo (C("IMG_ROOT")); ?>/new.gif) no-repeat 222px -2px;display:block;"><?php echo _('3RB Three Stage Side Channel Blower')?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PRO_ROOT")); ?>/4RB_1"><?php echo _('4RB Single Stage Side Channel Blower')?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PRO_ROOT")); ?>/4RB_2"><?php echo _('4RB Double Stage Side Channel Blower')?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PRO_ROOT")); ?>/4RB_3"><?php echo _('4RB Three Stage Side Channel Blower')?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PRO_ROOT")); ?>/Belt_2RB_1"><?php echo _('2RB Single Stage Belt Drive Air Blower')?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PRO_ROOT")); ?>/Belt_2RB_2"><?php echo _('2RB Double Stage Belt Drive Air Blower')?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PRO_ROOT")); ?>/IE2_1"><?php echo _('IE2 Single Stage Regenerative Blower')?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PRO_ROOT")); ?>/IE2_2"><?php echo _('IE2 Double Stage Regenerative Blower');?></a>
	</li>
	<li>
		<a class="link-3" href="Cover_Suction_Ring_Blower.php" style="background:url(<?php echo (C("IMG_ROOT")); ?>/new.gif) no-repeat 154px -2px;display:block;"><?php echo _('Cover Suction Ring Blower');?></a></li>
</ul>
<h3 class="head-1"><?php echo _('Accessories');?></h3>
<ul class="pro-nav">
	<li>
		<a class="link-3" href="Silencer.php"><?php echo _('Silencer');?></a>
	</li>
	<li>
		<a class="link-3" href="Inlet_Vacuum_Filter.php"><?php echo _('Inlet Vacuum Filter');?></a>
	</li>
	<li>
		<a class="link-3" href="Relief_Valve.php"><?php echo _('Relief Valve');?></a>
	</li>
</ul>
<h3 class="head-1"><?php echo _('Search Product');?></h3>
<form class="search-bar">
		<div class="form-group">
				<label for="inputEmail3" class="control-label col-ms-6"><?php echo _('1:Select a Graph:');?></label>
				<div class="col-ms-6">
						<select class="form-control">
						   				<option><?php echo _('Pressure');?></option>
						  				<option><?php echo _('Vacuum');?></option>
						</select>
				</div>
		</div>
		<div class="form-group">
				<label for="inputEmail3" class="control-label"><?php echo _('2:Air Flow');?>(e.g.120):</label>
				<div class="row">
						  <div class="col-md-6">
								  <input type="text" class="form-control">
						  </div>
						  <div class="col-md-6">
									<select class="form-control">
									   				<option>m³/h</option>
									   				<option>m³/min</option>
									</select>
						  </div>
				</div>
		</div>
		 <div class="form-group">
			  <label for="inputEmail3" class="col-sm-8 control-label"><?php echo _('3:Pressure');?>(e.g.200):</label>
				<div class="row">
						  <div class="col-md-6">
								  <input type="text" class="form-control">
						  </div>
						  <div class="col-md-6">
									<select class="form-control">
											<option>mbar</option>
											<option>pa</option>
									</select>
						  </div>
				</div>
			</div> 
		<div class="form-group">
		    <button type="submit" class="btn btn-default">Search</button>
		</div>
</form>
			</div>
       <div class="col-md-9 split">
             <h3 class="title-1">
          		    IE2 <?php  echo _(' Single Stage'); echo _(' ▪ Regenerative Blower');?>
              </h3>
              <div class="row pro-list content">
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=210" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB210_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=210" target="_blank">2RB 210</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=230" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB230_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=230" target="_blank">2RB 230</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=310" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB310_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=310" target="_blank">2RB 310</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=330" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB330_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=330" target="_blank">2RB 330</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=410" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB410_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=410" target="_blank">2RB 410</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=430" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB430_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=430" target="_blank">2RB 430</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=510" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB510_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=510" target="_blank">2RB 510</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=530" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB530_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=530" target="_blank">2RB 530</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=610" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB610_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=610" target="_blank">2RB 610</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=630" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB630_IE2.jpg"  /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=630" target="_blank">2RB 630</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=710" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB710_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=710" target="_blank">2RB 710</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=730" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB730_IE2.jpg"/></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=730" target="_blank">2RB 730</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=810" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB810_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=810" target="_blank">2RB 810</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=830" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB830_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=830" target="_blank">2RB 830</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=910" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB910_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=910" target="_blank">2RB 910</a></h4></div>
		     <div  id="mypage" class="col-md-4 pro-item"><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=930" target="_blank"><img  src="<?php echo (C("IMG_ROOT")); ?>/2RB930_IE2.jpg" /></a><h4><a href="IE2_Single_Stage_Regenerative_Blower_table.php?series=930" target="_blank">2RB 930</a></h4></div>
	         <div  id="page_text"></div>
       </div>
       </div>
       </div>
   </div>
</div>
<!-- 应用内容end -->

<div class="container-fluid navbar-inverse footer">
		<div class="container">
			<ul class=" col-md-2 " >
				<li class="item-title" ><?php echo (L("HEADER_ABOUT_GREENCO")); ?></li>
				<li><a rel="nofollow" href="Certification.php"><?php echo (L("HEADER_CERTIFICATION")); ?></a></li>
				<li><a rel="nofollow" href="Honour.php"><?php echo (L("HEADER_HONOUR")); ?></a></li>
				<li><a rel="nofollow" href="Video.php"><?php echo (L("HEADER_VIDEO")); ?></a></li>
				<li><a rel="nofollow" href="Equipments.php"><?php echo (L("HEADER_EQUIPMENTS")); ?></a></li>
			</ul>
			<ul class="col-md-3 ">
				<li class="item-title" ><?php echo (L("HEADER_PRODUCTS")); ?></li>
				<li><a rel="nofollow" href="Side_Channel_Blower_2RB_Single_Stage.php"><?php echo (L("HEADER_2RB_SINGLE")); ?></a></li>
				<li><a rel="nofollow" href="Side_Channel_Blower_3RB_Single_Stage.php"><?php echo (L("HEADER_3RB_SINGLE")); ?></a></li>
				<li><a rel="nofollow" href="Side_Channel_Blower_4RB_Single_Stage.php"><?php echo (L("HEADER_4RB_SINGLE")); ?></a></li>
				<li><a rel="nofollow" href="IE2_Single_Stage_Regenerative_Blower.php"><?php echo (L("HEADER_2RB_SINGLE_REGENERATIVE")); ?></a></li>
				<li><a rel="nofollow" href="Belt_Drive_Air_Blower_2RB_Single_Stage.php"><?php echo (L("HEADER_2RB_SINGLE_BELT")); ?></a></li>
			</ul>
			<ul class="col-md-2 ">
				<li class="item-title" ><?php echo (L("FOOTER_ACCESSORIES")); ?></li>
				<li><a rel="nofollow" href="Silencer.php"><?php echo (L("HEADER_SILENCER")); ?></a></li>
				<li><a rel="nofollow" href="Relief_Valve.php"><?php echo (L("HEADER_RELIEF_VALUE")); ?></a></li>
				<li><a rel="nofollow" href="Inlet_Vacuum_Filter.php"><?php echo (L("HEADER_FILTER")); ?></a></li>
			</ul>
			<ul class="col-md-3">
					<li class="item-title" ><?php echo (L("HEADER_DOWNLOADS")); ?></li>
					<li><a rel="nofollow" href="upfile/side channel blower Complete Catalog.pdf"><?php echo (L("FOOTER_CATALOG")); ?></a></li>
					<li><a rel="nofollow" href="upfile/Side channel blower Relief_Valve 2BX4.pdf"><?php echo (L("FOOTER_ACCESSORIES")); ?></a></li>
					<li><a rel="nofollow" href="javascript:;"><?php echo (L("HEADER_FILTER")); ?></a></li>
			</ul>
			<ul class="col-md-2  last">
					<li class="item-title"><?php echo (L("HEADER_NEWS_CENTER")); ?></li>
					<li><a rel="nofollow" href="news_company.php"><?php echo (L("HEADER_COMPANY_NEWS")); ?></a></li>
					<li><a rel="nofollow" href="news_Industry.php"><?php echo (L("HEADER_INDUSTRY_NEWS")); ?></a></li>
					<li><a rel="nofollow" href="support"><?php echo (L("HEADER_SUPPORT")); ?></a></li>
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
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="<?php echo (C("JS_ROOT")); ?>/jquery.quickpaginate.js"
	type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		$(".pro-item").quickpaginate({
			perpage : 15,//每页显示条数,
			pager : $("#page_text")
		//div的ID
		})
	})
</script>
</body>
</html>
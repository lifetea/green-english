<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title><?php echo (L("EQUIPMENTS_TITLE")); ?></title>
<meta name="keywords" content="<?php echo (L("EQUIPMENTS_KEYWORDS")); ?>" />
<meta name="description" content="<?php echo (L("EQUIPMENTS_DESCRIPTION")); ?>" />
<link href="favicon.ico" rel="shortcut icon" />
<?php require 'inc/css.inc';?>
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
							            				<a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/about_us"><?php echo (L("HEADER_ABOUT_GREENCO")); ?></a>
						            			</li>
									            <li>
									            		<a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/certification"><?php echo (L("HEADER_CERTIFICATION")); ?></a>
								            	</li>
									            <li>
									            		<a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/honour"><?php echo (L("HEADER_HONOUR")); ?></a>
								            	</li>
									            <li>
									            		<a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/video.php"><?php echo (L("HEADER_VIDEO")); ?></a>
							            		</li>
									            <li>
									            		<a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/equipments"><?php echo (L("HEADER_EQUIPMENTS")); ?></a>
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
													<img class="pull-right" src="<?php echo (C("IMG_ROOT")); ?>/new.gif">
													<a href="Side_Channel_Blower_3RB_Single_Stage.php"><?php echo (L("HEADER_3RB_SINGLE")); ?></a>
									 	 	</li>
											<li>
													<img class="pull-right" src="<?php echo (C("IMG_ROOT")); ?>/new.gif">
													<a href="Side_Channel_Blower_3RB_Double_Stage.php"><?php echo (L("HEADER_3RB_DOUBLE")); ?></a>
											</li>
											<li>
											 		<img class="pull-right" src="<?php echo (C("IMG_ROOT")); ?>/new.gif">
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
								        <a href="application"><?php echo (L("HEADER_APPLICATIONS")); ?></a>
								  </li>
								  
								 <li class="dropdown">
									    <a href="news_company.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									    		<?php echo (L("HEADER_NEWS_CENTER")); ?>
									    		<span class="caret"></span>
									    </a>
									    <ul class="dropdown-menu" role="menu">
									            <li><a rel="nofollow" href="news_company.php"><?php echo (L("HEADER_COMPANY_NEWS")); ?></a></li>
									            <li><a rel="nofollow" href="news_Industry.php"><?php echo (L("HEADER_INDUSTRY_NEWS")); ?></a></li>
									            <li><a rel="nofollow" href="support"><?php echo (L("HEADER_SUPPORT")); ?></a></li>
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


<!-- 质量认证内容 -->
<div class="container-fuild">
	<div class="container about row">
		<img src="image/about_banner.png"
			style="width:100%;margin: 1em auto; border: 1px solid #999;" />
		<div class="col-md-3">
			<h3 class="head-1"><?php echo (L("HEADER_ABOUT_GREENCO")); ?></h3>
<ul class="about-nav">
		<li>
				<a class="link-3" href="about_us"><?php echo (L("HEADER_ABOUT_US")); ?></a>
		</li>
		<li>
				<a class="link-3" href="certification"><?php echo (L("HEADER_CERTIFICATION")); ?></a>
		</li>
		<li>
				<a class="link-3" href="honour"><?php echo (L("HEADER_HONOUR")); ?></a>
		<li>
				<a class="link-3" href="video"><?php echo (L("HEADER_VIDEO")); ?></a>
		</li>
		<li>
				<a class="link-3" href="equipments"><?php echo (L("HEADER_EQUIPMENTS")); ?></a>
		</li>
</ul>
<h3 class="head-1" style=""><?php echo (L("NAV_SEARCH_PRODUCT")); ?>
		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
</h3>
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
					<h3 class="title-1"><?php echo (L("HEADER_EQUIPMENTS")); ?></h3>
				<div class="row">
					<div class="eq-list content ">
							<div class="col-md-6" >
								<a class="pic-item"  href="javascript:void(0)"	data="image/jifang1.jpg"	title="<strong>Sparepart Warehouse</strong>">
								<img src="image/jifang1_sub.jpg" alt="Sparepart Warehouse GREENCO Side Channel Blower Equipments" />
								<p>
										<a class="link-1" href="#">
											<?php echo _('Sparepart Warehouse');?>
										</a>
									</p></a>
							</div>
							<div class="col-md-6 Equipments_image">
								<a class="pic-item"  href="javascript:void(0)" 	data="image/jifang2.jpg" 	title="<strong>Precision Production Line</strong>">
								<img
									src="image/jifang2_sub.jpg"
									alt="Precision Production Line GREENCO Side Channel Blower Equipments" />
								<p>
										<a class="link-1"  href="#">
											<?php echo _('Precision Production Line');?>
										</a>
									</p></a>
							</div>
							<div class="col-md-6 Equipments_image" id="Equipments_image1">
								<a class="pic-item"  href="javascript:void(0)" data="image/jifang3.jpg"
									title="<strong>Die Casting Workshop</strong>">
									<img
									src="image/jifang3_sub.jpg"
									alt="Die Casting Workshop GREENCO Side Channel Blower Equipments" />
								<p>
										<a class="link-1"  href="#">
											<?php echo _('Die Casting Workshop');?>
										</a>
									</p></a>
							</div>
							<div class="col-md-6 Equipments_image">
								<a class="pic-item"   href="javascript:void(0)"  data="image/jifang4.jpg"
									title="<strong>Assembling Line</strong>">
									<img
									src="image/jifang4_sub.jpg"
									alt="Assembling Line GREENCO Side Channel Blower Equipments" />
								<p>
										<a class="link-1"  href="#">
											<?php echo _('Assembling Line');?>
										</a>
									</p></a>
							</div>
							<div class="col-md-6"  id="Equipments_image1">
								<a class="fancybox"  href="javascript:void(0)"   data="image/jifang5.jpg"
									title="<strong>Carl Zeiss CMM</strong>">
									<img
									src="image/jifang5_sub.jpg"
									alt="Q&C Department GREENCO Side Channel Blower Equipments" />
								<p>
										<a class="link-1"  href="#">
											<?php echo _('Carl Zeiss CMM');?>
										</a>
									</p></a>
							</div>
							<div class="col-md-6 Equipments_image">
								<a class="fancybox"  href="javascript:void(0)"  data="image/jifang6.jpg"
									title="<strong>Packing Line</strong>">
									<img
									src="image/jifang6_sub.jpg"
									alt="Packing Line GREENCO Side Channel Blower Equipments" />
								<p>
										<a class="link-1"  href="#">
											<?php echo _('Packing Line');?>
										</a>
									</p></a>
							</div>
							<div class="col-md-6 Equipments_image" id="Equipments_image1">
								<a class="fancybox"  href="javascript:void(0)"  data="image/jifang7.jpg"
									 title="<strong>Shipping</strong>">
									 <img
									src="image/jifang7_sub.jpg"
									alt="Shipping GREENCO Side Channel Blower Equipments" />
								<p>
										<a class="link-1"  href="#">
											<?php echo _('Shipping');?>
										</a>
									</p></a>
							</div>
							<div class="col-md-6 Equipments_image">
								<a class="fancybox" href="javascript:void(0)"  data="image/jifang10.jpg"
									title="<strong>Outgoing Inspection</strong>"><img
									src="image/jifang8_sub.jpg"
									alt="Outgoing Inspection GREENCO Side Channel Blower Equipments" />
								<p>
										<a class="link-1"  href="#">
											<?php echo _('Outgoing Inspection');?>
										</a>
									</p></a>
							</div>
							<div class="col-md-6 Equipments_image" id="Equipments_image1">
								<a class="fancybox" href="javascript:void(0)"  data="image/jifang11.jpg"
									title="<strong>AUTO motor winding</strong>"><img
									src="image/jifang11_sub.jpg"
									alt="AUTO motor winding GREENCO Side Channel Blower Equipments" />
								<p>
										<a class="link-1"  href="#">
											<?php echo _('AUTO motor winding');?>
										</a>
									</p></a>
							</div>
							<div class="col-md-6 Equipments_image">
								<a class="fancybox"  href="javascript:void(0)"  data="image/jifang10.jpg"
									title="<strong>SCHNEEBERGER Grinder</strong>"><img
									src="image/jifang10_sub.jpg"
									alt="SCHNEEBERGER Grinder GREENCO Side Channel Blower Equipments" />
								<p>
										<a class="link-1"  href="#">
											<?php echo _('SCHNEEBERGER Grinder');?>
										</a>
									</p></a>
							</div>
			</div>
		</div>
		</div>
	</div>
</div>
<!-- 质量认证end -->
<div id="myModal" class="modal fade">
		<div class="modal-dialog">
			  <div class="modal-content">
					    <div class="modal-header">
					      		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					      		<h4 class="modal-title">&nbsp;</h4>
					    </div>
					    <div class="modal-body">
					      		<img id="mypic" style="width:100%" src="image/zhiliangrenzheng11.jpg" />
					    </div>
					    		<div class="modal-footer">
					    </div>
			  </div>
		</div>
</div>
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

</body>
</html>
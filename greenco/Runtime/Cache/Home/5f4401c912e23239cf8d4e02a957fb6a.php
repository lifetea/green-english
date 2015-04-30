<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title><?php echo (L("CERTIFICATE_TITLE")); ?></title>
<meta name="keywords" content="<?php echo (L("CERTIFICATE_KEYWORDS")); ?>" />
<meta name="description" content="<?php echo (L("CERTIFICATE_DESCRIPTION")); ?>" />
<link href="favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link href="<?php echo (C("SRC_ROOT")); ?>/css/common.css" rel="stylesheet">
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
								    <a href="<?php echo (C("PROD_ROOT")); ?>/2RB_1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								    		<?php echo (L("HEADER_PRODUCTS")); ?>
								    		<span class="caret"></span>
								    </a>
								    <ul class="dropdown-menu" role="menu">
								            <li>
								            	<a href="<?php echo (C("PROD_ROOT")); ?>/2RB_1"><?php echo (L("HEADER_2RB_SINGLE")); ?></a>
							            	</li>
								            <li>
								            	<a href="<?php echo (C("PROD_ROOT")); ?>/2RB_2"><?php echo (L("HEADER_2RB_DOUBLE")); ?></a>
							            	</li>
											<li class="divider">
											<li>
													<img class="pull-right" src="<?php echo (C("IMG_ROOT")); ?>/new.gif">
													<a href="<?php echo (C("PROD_ROOT")); ?>/3RB_1"><?php echo (L("HEADER_3RB_SINGLE")); ?></a>
									 	 	</li>
											<li>
													<img class="pull-right" src="<?php echo (C("IMG_ROOT")); ?>/new.gif">
													<a href="<?php echo (C("PROD_ROOT")); ?>/3RB_2"><?php echo (L("HEADER_3RB_DOUBLE")); ?></a>
											</li>
											<li>
											 		<img class="pull-right" src="<?php echo (C("IMG_ROOT")); ?>/new.gif">
													<a href="<?php echo (C("PROD_ROOT")); ?>/3RB_3"><?php echo (L("HEADER_3RB_THREE")); ?></a>
											</li>
											<li class="divider">                  
								            <li>
								            		<a href="<?php echo (C("PROD_ROOT")); ?>/4RB_1"><?php echo (L("HEADER_4RB_SINGLE")); ?></a>
								            </li>
								            <li>
								            		<a href="<?php echo (C("PROD_ROOT")); ?>/4RB_2"><?php echo (L("HEADER_4RB_DOUBLE")); ?></a>
							            	</li>
								            <li>
							         	   			<a href="<?php echo (C("PROD_ROOT")); ?>/4RB_3"><?php echo (L("HEADER_4RB_THREE")); ?></a>
								            </li>
								             <li class="divider">
								            <li>
								            		<a href="<?php echo (C("PROD_ROOT")); ?>/Belt_2RB_1"><?php echo (L("HEADER_2RB_SINGLE_BELT")); ?></a>
								            </li>
								            <li>
								            		<a href="<?php echo (C("PROD_ROOT")); ?>/Belt_2RB_2"><?php echo (L("HEADER_2RB_DOUBLE_BELT")); ?></a>
								            </li>
								            <li class="divider">
								            <li>
								            <a href="<?php echo (C("PROD_ROOT")); ?>/IE2_1"><?php echo (L("HEADER_2RB_SINGLE_REGENERATIVE")); ?></a>
								            </li>
								            <li>
								            <a href="<?php echo (C("PROD_ROOT")); ?>/IE2_2"><?php echo (L("HEADER_2RB_DOUBLE_REGENERATIVE")); ?></a>
								            </li>
								            <li>
								            <a href="<?php echo (C("PROD_ROOT")); ?>/Suction"><?php echo (L("HEADER_COVER_SUCTION")); ?></a>
								            </li>
								            <li class="divider">
								            <li>
								            <a href="<?php echo (C("PROD_ROOT")); ?>/Silencer"><?php echo (L("HEADER_SILENCER")); ?></a>
								            </li>
								            <li>
								            <a href="<?php echo (C("PROD_ROOT")); ?>/Relief"><?php echo (L("HEADER_RELIEF_VALUE")); ?></a>
								            </li>
								            <li>
								            <a href="<?php echo (C("PROD_ROOT")); ?>/Filter"><?php echo (L("HEADER_FILTER")); ?></a>
								            </li>
								        </ul>
								      </li>   
								 <li>
								        <a href="<?php echo (C("INDEX_ROOT")); ?>/application"><?php echo (L("HEADER_APPLICATIONS")); ?></a>
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
										<a rel="nofollow" href="<?php echo (C("INDEX_ROOT")); ?>/download"><?php echo (L("HEADER_DOWNLOADS")); ?></a>
								</li>
								<li>
										<a rel="nofollow" href="<?php echo (C("Index_ROOT")); ?>/contact"><?php echo (L("HEADER_CONTACT_US")); ?></a>
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
	<div class="container about">
		<img src="<?php echo (C("IMG_ROOT")); ?>/about_banner.png"  class="banner" />
		<div class="row">
			<div class="col-md-3">
				<h3 class="head-1"><?php echo (L("HEADER_ABOUT_GREENCO")); ?></h3>
<ul class="about-nav">
		<li>
				<a class="link-3" href="<?php echo (C("ABOUT_ROOT")); ?>/about_us"><?php echo (L("HEADER_ABOUT_US")); ?></a>
		</li>
		<li>
				<a class="link-3" href="<?php echo (C("ABOUT_ROOT")); ?>/certification"><?php echo (L("HEADER_CERTIFICATION")); ?></a>
		</li>
		<li>
				<a class="link-3" href="<?php echo (C("ABOUT_ROOT")); ?>/honour"><?php echo (L("HEADER_HONOUR")); ?></a>
		<li>
				<a class="link-3" href="<?php echo (C("ABOUT_ROOT")); ?>/video"><?php echo (L("HEADER_VIDEO")); ?></a>
		</li>
		<li>
				<a class="link-3" href="<?php echo (C("ABOUT_ROOT")); ?>/equipments"><?php echo (L("HEADER_EQUIPMENTS")); ?></a>
		</li>
</ul>
<h3 class="head-1" style=""><?php echo (L("NAV_SEARCH_PRODUCT")); ?>
		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
</h3>
<form class="search-bar">
		<div class="form-group">
				<label for="inputEmail3" class="control-label ">1:<?php echo (L("NAV_SEARCH_SELECT_GRAPH")); ?></label>
				<select class="form-control">
				   				<option><?php echo (L("HEADER_VACUUM")); ?></option>
				  				<option><?php echo (L("HEADER_PRESSURE")); ?></option>
				</select>
		</div>
		<div class="form-group">
				<label for="inputEmail3" class="control-label">2:<?php echo (L("NAV_SEARCH_AIR_FLOW")); ?>(e.g.120):</label>
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
			  <label for="inputEmail3" class="control-label">3:<?php echo (L("NAV_SEARCH_PRESSURE")); ?>(e.g.200):</label>
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
		    <button type="submit" class="btn btn-default"><?php echo (L("HEADER_SEARCH")); ?></button>
		</div>
</form>

			</div>
			<div class="col-md-9  split">
				<h3 class="title-1">	<?php echo (L("HEADER_CERTIFICATION")); ?> </h3>
				<div class="row cert-list">
						<div class="col-md-3">
							<a class="pic-item"  href="javascript:void(0)" data="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng4.jpg"	title="<strong>ISO9001:2008 Certification</strong>">
								<img src="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng4_sub.jpg"	alt="ISO9001:2008 GREENCO Side Channel Blower Certification" />
								<p>
										<a href="javascript:void(0)" class="link-1"><?php echo (L("CERTIFICATE_ISO9001")); ?></a>
								</p>
							</a>
						</div>
						<div class="col-md-3">
							<a class="pic-item"  href="javascript:void(0)"	data="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng12.jpg" 	title="<strong>CE-LVD Certification</strong>">
								<img	src="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng12_sub.jpg"		alt="CE-LVD GREENCO Side Channel Blower Certification" />
							<p>
									<a href="javascript:void(0)" class=" link-1" ><?php echo (L("CERTIFICATE_CE_LVD")); ?></a>
								</p></a>
						</div>
						<div class="col-md-3">
							<a class="pic-item" href="javascript:void(0)" 	data="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng10.png" 	title="<strong>CE-EMC Certification</strong>">
								<img	src="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng10_sub.png"		alt="CE-EMC GREENCO Side Channel Blower Certification" />
							<p>
							<a href="javascript:void(0)" class=" link-1" data-pic-item-group="gallery"><?php echo (L("CERTIFICATE_CE_EMC")); ?></a>
								</p></a>
						</div>
						<div class="col-md-3">
							<a class="pic-item" href="javascript:void(0)" 	data="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng5.jpg" title="<strong>ROHS Certification</strong>">
									<img src="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng5_sub.jpg"	alt="ROHS GREENCO Side Channel Blower Certification" />
									<p>
											<a href="javascript:void(0)" class=" link-1"><?php echo (L("CERTIFICATE_ROHS")); ?></a>
									</p>
							</a>
						</div>
						<div class="col-md-3">
							<a class="pic-item" href="javascript:void(0)"	data="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng3.jpg"	title="<strong>GSPC Certification</strong>">
							<img src="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng3_sub.jpg" alt="GSPC GREENCO Side Channel Blower Certification" />
							<p>
									<a href="javascript:void(0)" class=" link-1"><?php echo (L("CERTIFICATE_GSPC")); ?></a>
							</p>
						</a>
						</div>
						<div class="col-md-3">
							<a class="pic-item"  href="javascript:void(0)"  data="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng2.jpg"	title="<strong>Measurement Certification</strong>">
								<img src="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng2_sub.jpg"	alt="Measurement GREENCO Side Channel Blower Certification" />
							<p>
									<a href="javascript:void(0)" class=" link-1"	><?php echo (L("CERTIFICATE_MEASUREMENT")); ?></a>
							</p>
							</a>
						</div>
						<div class="col-md-3">
							<a class="pic-item" href="javascript:void(0)" data="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng6.jpg"	title="<strong>Patent 1 Certification</strong>">
									<img	src="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng6_sub.jpg"	alt="Patent GREENCO Side Channel Blower Certification" />
									<p>
											<a href="javascript:void(0)" class="pic-item link-1"><?php echo (L("CERTIFICATE_PATENT_1")); ?></a>
									</p>
							</a>
						</div>
						<div class="col-md-3">
							<a class="pic-item" href="javascript:void(0)"  data="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng9.jpg"  title="<strong>Patent 2 Certification</strong>">
									<img src="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng9_sub.jpg" alt="Patent GREENCO Side Channel Blower Certification" />
									<p>
											<a href="javascript:void(0)" class="pic-item link-1"><?php echo (L("CERTIFICATE_PATENT_2")); ?></a>
									</p>
							</a>
						</div>
						<div class="col-md-3">
							<a class=" pic-item" href="javascript:void(0)"  data="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng11.jpg" 	title="<strong>Patent 3 Certification</strong>">
									<img src="<?php echo (C("IMG_ROOT")); ?>/zhiliangrenzheng11_sub.jpg" 	alt="Patent GREENCO Side Channel Blower Certification" />
									<p>
											<a href="javascript:void(0)" class="link-1" ><?php echo (L("CERTIFICATE_PATENT_3")); ?></a>
									</p>
							</a>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="myModal" class="modal fade">
		<div class="modal-dialog">
			  <div class="modal-content">
					    <div class="modal-header">
					      		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					      		<h4 class="modal-title">&nbsp;</h4>
					    </div>
					    <div class="modal-body">
					      		<img id="mypic" style="width:100%" />
					    </div>
					    		<div class="modal-footer">
					    </div>
			  </div>
		</div>
</div>
<!-- 质量认证end -->


<div class="container-fluid navbar-inverse footer">
		<div class="container">
				<ul class=" col-md-2 " >
						<li class="item-title" ><?php echo (L("HEADER_ABOUT_GREENCO")); ?></li>
						<li><a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/certification"><?php echo (L("HEADER_CERTIFICATION")); ?></a></li>
						<li><a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/honour"><?php echo (L("HEADER_HONOUR")); ?></a></li>
						<li><a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/video"><?php echo (L("HEADER_VIDEO")); ?></a></li>
						<li><a rel="nofollow" href="<?php echo (C("ABOUT_ROOT")); ?>/equipments"><?php echo (L("HEADER_EQUIPMENTS")); ?></a></li>
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
						<li><a rel="nofollow" href="<?php echo (C("NEWS_ROOT")); ?>/company"><?php echo (L("HEADER_COMPANY_NEWS")); ?></a></li>
						<li><a rel="nofollow" href="<?php echo (C("NEWS_ROOT")); ?>/industry"><?php echo (L("HEADER_INDUSTRY_NEWS")); ?></a></li>
						<li><a rel="nofollow" href="<?php echo (C("NEWS_ROOT")); ?>/support"><?php echo (L("HEADER_SUPPORT")); ?></a></li>
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

<script type="text/javascript">
		$(".pic-item").click(function(){
			var data = $(this).attr("data");
			$("#mypic").attr("src",data);
			$('#myModal').modal();
		});
</script>
</body>
</html>
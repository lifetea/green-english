<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title><?php echo (L("APPLICATION_TITLE")); ?></title>
<meta name="keywords"	content="<?php echo (L("APPLICATION_KEYWORDS")); ?>" />
<meta name="description"	content="<?php echo (L("APPLICATION_DESCRIPTION")); ?>" />
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



<!-- 应用内容 -->
<div class="container-fuild">
		<div class="container application">
				<img src="<?php echo (L("SRC_LAN")); ?>/application.jpg" class="banner"   alt="side channel blower application image" />
				<div class="row">
						<div class="col-md-3">
							<h3 class="head-1"><?php echo (L("HEADER_SIDE_CHANNEL_BLOWER")); ?></h3>
<ul class="pro-nav">
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/2RB_1"><?php echo (L("HEADER_2RB_SINGLE")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/2RB_2"><?php echo (L("HEADER_2RB_DOUBLE")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/3RB_1" style="background:url(<?php echo (C("IMG_ROOT")); ?>/new.gif) no-repeat 222px -2px;display:block;"><?php echo (L("HEADER_3RB_SINGLE")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/3RB_2" style="background:url(<?php echo (C("IMG_ROOT")); ?>/new.gif) no-repeat 222px -2px;display:block;"><?php echo (L("HEADER_3RB_DOUBLE")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/3RB_3" style="background:url(<?php echo (C("IMG_ROOT")); ?>/new.gif) no-repeat 222px -2px;display:block;"><?php echo (L("HEADER_3RB_THREE")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/4RB_1"><?php echo (L("HEADER_4RB_SINGLE")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/4RB_2"><?php echo (L("HEADER_4RB_DOUBLE")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/4RB_3"><?php echo (L("HEADER_4RB_THREE")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/Belt_2RB_1"><?php echo (L("HEADER_2RB_SINGLE_BELT")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/Belt_2RB_2"><?php echo (L("HEADER_2RB_DOUBLE_BELT")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/IE2_1"><?php echo (L("HEADER_2RB_SINGLE_REGENERATIVE")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/IE2_2"><?php echo (L("HEADER_2RB_DOUBLE_REGENERATIVE")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/Suction" style="background:url(<?php echo (C("IMG_ROOT")); ?>/new.gif) no-repeat 154px -2px;display:block;"><?php echo (L("HEADER_COVER_SUCTION")); ?></a></li>
</ul>
<h3 class="head-1"><?php echo (L("FOOTER_ACCESSORIES")); ?></h3>
<ul class="pro-nav">
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/Silencer"><?php echo (L("HEADER_SILENCER")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/Filter"><?php echo (L("HEADER_RELIEF_VALUE")); ?></a>
	</li>
	<li>
		<a class="link-3" href="<?php echo (C("PROD_ROOT")); ?>/Relief"><?php echo (L("HEADER_FILTER")); ?></a>
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
						<div class="col-md-9 split">		
								<h3 class="title-1">	<?php echo (L("APPLICATION_	CONTENT_TITLE")); ?></h3>
								<p class="para-1"><?php echo (L("APPLICATION_	CONTENT")); ?></p>
								<div class="row app-list">
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Punch collector"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/punchcollector.swf" class="flash"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/punchcollector.png"
												alt="side channel blower punch collector application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Punch collector" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/punchcollector.swf" class="flash link-1" id="align">
												<?php echo (L("APPLICATION_	PUNCH_COLLECTOR")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Sewing machine"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/sewingmachine.swf" class="flash"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/sewingmachine.png"
												alt="side channel blower sewing machine application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Sewing machine"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/sewingmachine.swf" class="flash link-1" id="align">
													<?php echo (L("APPLICATION_	SEWING_MACHINE")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Transfer" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/transfer.swf"
												class="flash"><img src="<?php echo (C("SRC_ROOT")); ?>/swfs/transfer.png"
												alt="side channel blower transfer application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Transfer" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/transfer.swf"
												class="flash link-1" id="align">
												<?php echo (L("APPLICATION_	TRANSFER")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Paper scrap"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/paperscrap.swf" class="flash"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/paperscrap.png"
												alt="side channel blower paper scrap application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Paper scrap"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/paperscrap.swf" class="flash link-1" id="align">
												<?php echo (L("APPLICATION_PAPER_SCRAP")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Waste gasses"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/wastegasses.swf" class="flash"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/wastegasses.png"
												alt="side channel blower waste gasses application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Waste gasses"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/wastegasses.swf" class="flash link-1" id="align">
												<?php echo (L("APPLICATION_WASTE_GASSES")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Med suction"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/medsuction.swf" class="flash"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/medsuction.png"
												alt="side channel blower med suction application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Med suction"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/medsuction.swf" class="flash link-1" id="align">
												<?php echo (L("APPLICATION_	MED_SUCTION")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Paper dryer"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/paperdryer.swf" class="flash"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/paperdryer.png"
												alt="side channel blower paper dryer application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Paper dryer"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/paperdryer.swf" class="flash link-1" id="align">
												<?php echo (L("APPLICATION_PAPER_DRYER")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Paper feeding machine"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/paperfeedingmachine.swf" class="flash"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/paperfeedingmachine.png"
												alt="side channel blower paper feeding machine application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Paper feeding machine"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/paperfeedingmachine.swf" class="flash link-1" id="align">
												<?php echo (L("APPLICATION_PAPER_FEEDING_MACHINE")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Paper holder"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/paperholder.swf" class="flash"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/paperholder.png"
												alt="side channel blower paper holder application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Paper holder"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/paperholder.swf" class="flash link-1" id="align">
												<?php echo (L("APPLICATION_	PAPER_HOLDER")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Vacuum transfer"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/vacuumtransfer.swf" class="flash"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/vacuumtransfer.png"
												alt="side channel blower vacuum transfer application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Vacuum transfer"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/vacuumtransfer.swf" class="flash link-1" id="align">
												<?php echo (L("APPLICATION_VACUUM_TRANSFER")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Powder transfer"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/powdertransfer.swf" class="flash link-1"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/powdertransfer.png"
												alt="side channel blower powder transfer application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Powder transfer"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/powdertransfer.swf" class="flash link-1" id="align">
												<?php echo (L("APPLICATION_POWDER_TRANSFER")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Collector" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/collector.swf"
												class="flash"><img src="<?php echo (C("SRC_ROOT")); ?>/swfs/collector.png"
												alt="side channel blower Collector application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Collector" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/collector.swf"
												class="flash link-1" id="align">
												<?php echo (L("APPLICATION_COLLECTOR")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Sediment" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/sediment2.swf"
												class="flash"><img src="<?php echo (C("SRC_ROOT")); ?>/swfs/sediment2.png"
												alt="side channel blower Sediment application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Sediment" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/sediment2.swf"
												class="flash link-1" id="align">
												<?php echo (L("APPLICATION_SEDIMENT")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Ventilation" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/tunnels.swf"
												class="flash"><img src="<?php echo (C("SRC_ROOT")); ?>/swfs/tunnels.png"
												alt="side channel blower Ventilation application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Ventilation" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/tunnels.swf"
												class="flash link-1" id="align">
												<?php echo (L("APPLICATION_VENTILATION")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Textile" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/autoloom.swf"
												class="flash"><img src="<?php echo (C("SRC_ROOT")); ?>/swfs/autoloom.png"
												alt="side channel blower Textile application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Textile" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/autoloom.swf"
												class="flash link-1" id="align">
												<?php echo (L("APPLICATION_TEXTILE")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Bottling" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/bottling.swf"
												class="flash"><img src="<?php echo (C("SRC_ROOT")); ?>/swfs/bottling.png"
												alt="side channel blower Bottling application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Bottling" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/bottling.swf"
												class="flash link-1" id="align">
												<?php echo (L("APPLICATION_Bottling")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Electro facing"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/circulator.swf" class="flash"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/circulator.png"
												alt="side channel blower Electro facing application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Electro facing"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/circulator.swf" class="flash link-1" id="align">
												<?php echo (L("APPLICATION_ELECTRO_FACING")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Dryer" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/dryer.swf"
												class="flash"><img src="<?php echo (C("SRC_ROOT")); ?>/swfs/dryer.png"
												alt="side channel blower Dryer application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Dryer" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/dryer.swf"
												class="flash link-1" id="align">
												<?php echo (L("APPLICATION_Dryer")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Eliminator"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/eliminator.swf" class="flash"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/eliminator.png"
												alt="side channel blower Eliminator application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Eliminator"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/eliminator.swf" class="flash link-1" id="align">
												<?php echo (L("APPLICATION_ELIMINATOR")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Evaporator"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/evaporator.swf" class="flash"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/evaporator.png"
												alt="side channel blower Evaporator application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Evaporator"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/evaporator.swf" class="flash link-1" id="align">
												<?php echo (L("APPLICATION_EVAPORATOR")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Sock Knitting"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/sockloom.swf" class="flash"><img
												src="<?php echo (C("SRC_ROOT")); ?>/swfs/sockloom.png"
												alt="side channel blower Sock Knitting application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Sock Knitting"
												rel="<?php echo (C("SRC_ROOT")); ?>/swfs/sockloom.swf" class="flash link-1" id="align">
												<?php echo (L("APPLICATION_SOCK_KNITTING")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Pool & Psa" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/jacuzzi.swf"
												class="flash"><img src="<?php echo (C("SRC_ROOT")); ?>/swfs/jacuzzi.png"
												alt="side channel blower Pool & Psa application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Pool & Psa" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/jacuzzi.swf"
												class="flash link-1" id="align">
												<?php echo (L("APPLICATION_POOL&PSA")); ?>
											</a>
										</dd>
									</dl>
									<dl class="col-md-4">
										<dd>
											<a href="javascript:;" name="Hopper Loader" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/hopper.swf"
												class="flash"><img src="<?php echo (C("SRC_ROOT")); ?>/swfs/hopper.png"
												alt="side channel blower Hopper Loader application" /></a>
										</dd>
										<dd>
											<a href="javascript:;" name="Hopper Loader" rel="<?php echo (C("SRC_ROOT")); ?>/swfs/hopper.swf"
												class="flash link-1" id="align">
												<?php echo (L("APPLICATION_HOPPER_LOADER")); ?>
											</a>
										</dd>
									</dl>					
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


</body>
</html>
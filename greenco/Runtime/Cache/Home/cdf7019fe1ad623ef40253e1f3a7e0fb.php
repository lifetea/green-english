<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title><?php echo (L("CONTACT_TITLE")); ?></title>
<meta name="keywords" content="<?php echo (L("CONTACT_KEYWORDS")); ?>" />
<meta name="description"content="<?php echo (L("CONTACT_DESCRIPTION")); ?>" />
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link href="<?php echo (C("SRC_ROOT")); ?>/css/common.css" rel="stylesheet">
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


<!-- 下载内容 -->
<div class="container-fuild">
		<div class="container contact">
				<div class="row">
						<div class="col-md-6">
							 	<div class="detail">
										<h3 class="title-2"><?php echo (L("CONTACT_DETAILS")); ?></h3>
										<p class="title-1">
												<?php echo (L("CONTACT_GREENCO_COLTD")); ?>
										</p>
										<p>
												 <span><?php echo (L("CONTACT_ADD")); ?>:</span>
												 <?php echo (L("CONTACT_ADDRESS")); ?>
										</p>
										<?php if(L("LAN")=='zh-cn'): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p class="phone hide">
																<span><?php echo (L("CONTACT_TELEPHONE")); ?>:</span>
																<?php echo ($vo["tel"]); ?> <?php echo ($vo["name"]); ?>
														</p><?php endforeach; endif; else: echo "" ;endif; ?>										
										<?php else: ?>
												<p>Tel: 0086-576-86428999</p><?php endif; ?>
										<p>
												<span><?php echo (L("CONTACT_FAX")); ?>:</span>
												<?php echo (L("CONTACT_FAX_NO")); ?>
										</p>
										<p><?php echo (L("CONTACT_EMAIL")); ?>: greenco@greenco.cn</p>
										<p>MSN: greenco.cn@hotmail.com</p>
										<p><?php echo (L("CONTACT_WEBSITE")); ?>: http://www.greenco.cn</p>
							 	</div>	
						</div>
						<div class="col-md-6">
							  <img style="margin:0 auto;width:70%" src="<?php echo (C("IMG_ROOT")); ?>/contact_us.jpg"/>
						</div>
				</div>
		 <div class="row">
		  <div class="col-md-6">
		    <!DOCTYPE html>
<html>
<head>
<title>浙江格凌实业有限公司地址-百度地图</title>
<meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具" />
<meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图" />
<!--引用百度地图API-->
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#1b2f69;font-size:13px;font-weight:bold;overflow:hidden;padding-right:13px;}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:-4px;white-space:-moz-pre-wrap;word-wrap:break-word;}
	#dituContent {
		width: 90%;
		margin:0 auto;
		height: 400px;
		border: 1px solid #666;
	}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
</head>

<body>
  <!--百度地图容器-->
  <div style="margin-top:10px;" id="dituContent"></div>

  <script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(121.352961,28.510765);//创建点坐标
        map.centerAndZoom(point,14);//初始化地图，设置中心点坐标和地图级别
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }

    //标注点数组
    var markerArr = [{title:"浙江格凌实业有限公司",content:"公司地址：浙江省温岭市泽国镇丹崖工业区<br/>电话：+86-0576-86402630或+86-0576-86402632<br/>传真：+86-057686409555<br/>邮箱：greenco@greenco.cn<br/>网站地址：http://www.greenco.cn",point:"121.352309|28.51159",isOpen:0,icon:{w:21,h:19,l:0,t:0,x:6,lb:5}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+20,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#444",
                        color:"#333",
                        cursor:"pointer"
            });

			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon 可以修改图标
    function createIcon(json){
        var icon = new BMap.Icon("<?php echo (C("IMG_ROOT")); ?>/ditu.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }

    initMap();//创建和初始化地图
</script>
</body>

</html>
		  </div>
		  <div class="col-md-5">
		    <div id="feedback_info">
			<p class="title-1">
					<?php echo (L("CONTACT_Q&C")); ?>
			</p>
			<p>
				<?php echo (L("CONTACT_SUGGEST")); ?>
			</p>
		            <form method="post" class="form-horizontal"  action="contact_us.php">
				  <div class="form-group">
				    <label class="col-sm-2 control-label"><?php echo (L("CONTACT_NAME")); ?>:</label>
				    <div class="col-sm-10">
				    	<input type="text" class="form-control" name="name" placeholder="<?php echo (L("CONTACT_NAME")); ?>">
				    </div>
				  </div>
				  <div class="form-group">
				  	<label class="col-sm-2 control-label"><?php echo (L("CONTACT_COMPANY")); ?>:</label>
				    <div class="col-sm-10">
					    <input type="text" name="company" class="form-control" id="exampleInputPassword1" placeholder=<?php echo (L("CONTACT_COMPANY")); ?>>
				    </div>
				  </div>
				  <div class="form-group">
				  	<label class="col-sm-2 control-label"><?php echo (L("CONTACT_TELEPHONE")); ?>:</label>
				    <div class="col-sm-10">
					    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="<?php echo (L("CONTACT_TELEPHONE")); ?>">
				    </div>						  
				  </div>						  
				  <div class="form-group">
				  	<label class="col-sm-2 control-label"><?php echo (L("CONTACT_EMAIL")); ?>:</label>
				    <div class="col-sm-10">
					    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="<?php echo (L("CONTACT_EMAIL")); ?>">
				    </div>	
				  </div>
				  <div class="form-group">
				  	<label class="col-sm-2 control-label"><?php echo (L("CONTACT_COMMENTS")); ?>:</label>
				    <div class="col-sm-10">
					    <textarea name="content" class="form-control" rows="3" placeholder="<?php echo (L("CONTACT_COMMENTS")); ?>"></textarea>
				    </div>	
				  </div>
				  <div class="form-group">
				  	<label class="col-sm-2 control-label">*<?php echo (L("CONTACT_CODE")); ?>:</label>
				    <div class="col-sm-6">
				    	<img src="Code"  id="code" class="pull-left"  style="cursor: pointer;border:1px solid #999;padding:2px;"/>
				    	<input type="text" style="width:100px;margin-left:6px" name="code" class="form-control pull-left"/>
				    </div>
				    <div class="col-sm-4">
				    	<button type="submit" id="submit" class="btn btn-default pull-right"><?php echo (L("CONTACT_SEND")); ?></button>
				    </div>						    
				  </div>						  
		            </form>
		   </div>
		  </div>		    
		 </div>
		
		</div>
</div>
<!-- 下载内容end -->
        

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


<script>
$(function(){
	var count = $('.phone').length;
	var i = Math.floor(Math.random()*count);
	$('.phone').eq(i).removeClass('hide');
})
</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<?php  require 'setLan.php'; @define('feifa',ture); require 'inc/common.php'; $_result=mysql_query("select tel,name from salers where  status='true' "); $num_rows= mysql_num_rows($_result); ?>
<title><?php echo (L("CONTACT_TITLE")); ?></title>
<meta name="keywords" content="<?php echo (L("CONTACT_KEYWORDS")); ?>" />
<meta name="description"content="<?php echo (L("CONTACT_DESCRIPTION")); ?>" />
<?php require 'inc/css.inc';?>
<link href="favicon.ico" rel="shortcut icon" />
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

<?php
if(isset($_POST['submit'])){ require("email.php"); $mail = new PHPMailer(); $mail->IsSMTP(); $mail->Host="smtp.qq.com"; $mail->SMTPAuth = true; $mail->Username = "494886251@qq.com"; $mail->Password = "woyaokuaile"; $mail->From ='494886251@qq.com'; $mail->FromName = trim($_POST['name']); $mail->AddAddress("greenco@greenco.cn","浙江格凌实业有限公司"); $mail->AddReplyTo(trim($_POST['email']), trim($_POST['name'])); $mail->WordWrap = 50; $mail->IsHTML(true); $mail->CharSet="utf-8"; $mail->Subject = "网站客户留言信息"; $mail->Body = '<p>留言人：'.trim($_POST['name']).'</p>'.'<p>公司名称：'.trim($_POST['company']).'</p>'.'<p>联系电话：'.trim($_POST['phone']).'</p>'.'<p>邮箱地址：'.trim($_POST['email']).'</p>'.'<p>留言内容：'.trim($_POST['content']).'</p>'; $mail->AltBody = "邮件正文不支持HTML格式"; if(!$mail->Send()) { echo "信息未发送成功，请重新填写！"; exit(); } else { $url = "contact_us.php"; echo "<script language='javascript' type='text/javascript'>"; echo "alert('恭喜,信息已发送成功,请耐心等待,我们会尽快回复您！');window.location.href='$url'"; echo "</script>"; } } ?>

<!-- 下载内容 -->
<div class="container-fuild">
    <div class="container contact">
	    <div class="row">
	    	<div class="col-md-6">
				<p class="h1"><?php echo (L("CONTACT_DETAILS")); ?></p>
				<p style="font-weight:600;font-size:18px;color:#333;font-family:tahoma;">
					<?php echo (L("CONTACT_GREENCO_COLTD")); ?>
				</p>
				<p class="h2"><?php echo _('Add');?>: <?php echo _('Danya Industrial zone.zeguo.wenling zhejiang China.');?></p>
				<?php
 if($lan == "zh_CN"){ while($_rows=mysql_fetch_array($_result)){ echo '<p class="phone">电话：'.$_rows['tel'].'  '.$_rows['name'].'</p>'; } echo '<p>传真: 0086-576-86409555</p>'; }else{ echo '<p>Tel: 0086-576-86428999</p><p>Fax: 0086-576-86409555</p>'; } ?>            	
				
				<p><?php echo _('E-mail');?>: greenco@greenco.cn</a></p>
				<p>MSN: greenco.cn@hotmail.com</p>
				<p><?php echo _('Website');?>: http://www.greenco.cn</p>
	    	
	    	</div>
	    	<div class="col-md-6">
 			   <img style="margin:2em auto;width:70%" src="images/contact_us.jpg"/>
	    	</div>
	    </div>
	    <div class="row">
		    <div class="col-md-6">
				    <?php  include 'map.php';?>
		    </div>
		    <div class="col-md-6">
			     <div id="feedback_info">
			          <p class="h1"><?php echo _('Your questions and comments');?></p>
			          <p><?php echo _('If you would like us to send you information by post or to make contact to advise on the specification of our products, please complete the form below.');?> </p>
		              <form method="post"  action="contact_us.php">
			              <table>
				              <tr><td><?php echo _('Name');?>:</td><td style="text-align:left;"><input name="name" type="text"/></td></tr>
				              <tr><td><?php echo _('Company');?>:</td><td style="text-align:left;"><input name="company" type="text"/></td></tr>
				              <tr><td><?php echo _('Telephone');?>:</td>
				              <td style="text-align:left;"><input name="phone" type="text"/></td></tr>
				              <tr><td><?php echo _('E-mail');?>:</td><td style="text-align:left;"><input name="email" type="text"/></td></tr>
				              <tr><td><?php echo _('Comments');?>:</td><td style="text-align:left;">
				              <textarea name="content" class="form-control" rows="3" placeholder="Textarea"></textarea>
				              </td></tr>
				              <tr><td>*<?php echo _('Code');?>:</td><td style="text-align:left;">
					               <img src="Code/index"  id="code"   style="cursor: pointer;border:1px solid #999;padding:2px;"/>
					               <input type="text"  name="code" class="inputxt"  style="width:70px;margin-left:15px;top: -14px;"  />
				               </td>
				               </tr>
			                  <tr><td><input type="submit"  name="submit" value="<?php echo _('SEND');?>" id="submit"/></td></tr>
			              </table>
		              </form>
			    </div>
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

<script>
$(function(){
	$('.phone').eq(<?php echo rand(0, $num_rows-1)?>).css('display','block');
})
</script>
</body>
</html>
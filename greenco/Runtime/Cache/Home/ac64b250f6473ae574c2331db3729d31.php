<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<?php require 'setLan.php';?>
<title><?php echo (L("INDEX_TITLE")); ?></title>
<meta name="keywords" content="<?php echo (L("INDEX_KEYWORDS")); ?>" />
<meta name="description" content="<?php echo (L("INDEX_DESCRIPTION")); ?>" />
<?php require 'inc/css.inc';?>
<link href="favicon.ico" rel="shortcut icon"/>
</head>
<body >

<?php require 'inc/header_inc.php';?>

<div class="container">
  <div class="flash-wrap">
       <div id="cu3erSwf"></div>
  </div>
   <div id="sildeContainer">
   		<img class="flash-shadow" src="<?php echo (C("IMG_ROOT")); ?>/bg_shadow.png"/>
   		<div id="sliderWrap">
			<a class="slider-item first" href="about_us.php" >
				<img src="<?php echo (L("SRC_LAN")); ?>/home2.jpg"/>
			</a>
			<a class="slider-item second" href="Side_Channel_Blower_3RB_Single_Stage.php" >
				<img src="<?php echo (L("SRC_LAN")); ?>/home4.jpg" />
			</a>
			<a class="slider-item last"  href="Download.php">
				<img src="<?php echo (L("SRC_LAN")); ?>/home3.jpg" />
			</a>
			<a id="prev" href="javascript:void(0)">
				<img src="<?php echo (C("IMG_ROOT")); ?>/prev.jpg" />
			</a>
			<a id="next" href="javascript:void(0)">
				<img src="<?php echo (C("IMG_ROOT")); ?>/next.jpg" />
			</a>
		</div>
   </div>
</div>
<input id="swfConfig" type="hidden"  value="<?php echo (L("SRC_LAN")); ?>/config.xml">
<?php require 'inc/footer_inc.php';?>
<script src="<?php echo (C("JS_ROOT")); ?>/swfobject.js"></script>
<script src="<?php echo (C("JS_ROOT")); ?>/index.js"></script>
</body>
</html>
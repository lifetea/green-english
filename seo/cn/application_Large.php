<?php
/**
* TestGuest Version 1.0
* ================================================
* Copy 2010-2012
* Web: http://
* ================================================
* Author:xiaoma
* Date:2012
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link href="favicon.ico" rel="shortcut icon" />
<title>Application Flash Content page</title>
<script src="js/jquery-1.7.2.js"></script>
<script src="js/swfobject.js"></script>
<script>
swfobject.embedSWF("<?php echo $_GET['rel'];?>", "swf1", "750", "466", "9.0.0",null,null,{wmode:"transparent"},null);
</script>
<style>

</style>
</head>
<body scroll="no" style="background:#eee;padding:5px;overflow:hidden;">
<div id="swf1"></div>

</body>
</html>
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="author" content="author"/>
<meta name="keywords" content="keywords"/>
<title>GREENCO google address MAP</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery_gomap.js"></script>
<script type="text/javascript">
	$(function() {
	    $("#map").goMap({
	    	zoom:10,
	        markers: [{
	            latitude: 28.50553248700882,
	            longitude: 121.34615331888199,
	            title: 'marker title 1'
	        }]
	    });


	})
</script>
<style>
#map{width:490px;height:420px;position:absolute;top:300px;left:10px;border:1px solid #666;}

</style>
</head>
<body>

<div id="map"></div>

</body>
</html>
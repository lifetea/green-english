<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<title>联系我们|联系格凌|反馈意见|在线联系_浙江格凌实业有限公司</title>
<meta name="keywords" content="联系格凌,咨询,联系我们,0576-86428999 Greenco,格凌风机 格凌真空泵,高压风机,鼓风机,气泵,漩涡气泵" />
<<meta name="description" content="浙江格凌实业有限公司是一家专业从事空气流体设备）（压缩、真空）的国家高新技术企业，公司形成了以高压风机，漩涡气泵，旋涡风机，高压鼓风机为主，其他空气流体设备（真空泵和压缩机）为辅，集研发、生产、销售、服务于一体的发展格局，公司已经成为中国乃至全球真空和压缩领域的领导者." />
<script  type="text/javascript"  src="js/jquery-1.8.2.js" ></script>
<script src="js/menu.js" type="text/javascript"></script>
<link  type="text/css" rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet"  type="text/css"  href="uniform/css/uniform.default.css"/>
<link rel="stylesheet" type="text/css"  href="css/contact_us.css"/>
<link href="favicon.ico" rel="shortcut icon" />
<style>
  	.info-nav li a{margin-left:5px;color:#333;}
  	.info-nav li a:hover{margin-left:5px;}
	ul.main-nav li{margin-left:12px;}
	ul.main-nav li a{font-size:13px;}
  	ul.main-nav li a:hover{background:#555;}
  	h1,h2,h3,h4,h5,h6{font-weight:600;}
  	.dropdown{border:1px solid #ccc;}
  	#copyright a{color:#999;font-variant:normal;font-size:13px;}
	#copyright p{font-variant:normal;}
    #copyright ul li{margin-top:5px;}
</style>
</head>
<body id="homepage" >

<?php require 'inc/header_inc.php';?>

<?php
if(isset($_POST['submit'])){
    //_check_code($_POST['code'],$_SESSION['code']);
  require("email.php");   //引入文件（把刚才解压的那些文件放到对应的路径就可以了）
  $mail = new PHPMailer();   //实例化
  $mail->IsSMTP();                 // 启用SMTP
  $mail->Host="smtp.qq.com";      //smtp服务器的名称（这里以163邮箱为例）
  $mail->SMTPAuth = true;         //启用smtp认证
  $mail->Username = "494886251@qq.com";   //你的邮箱名
  $mail->Password = "woyaokuaile";      //邮箱密码
  $mail->From ='494886251@qq.com';            //发件人邮箱（也就是你的邮箱地址）
  $mail->FromName = trim($_POST['name']);              //发件人姓名
  $mail->AddAddress("greenco@greenco.cn","浙江格凌实业有限公司"); //添加收件人邮箱和名字
  $mail->AddReplyTo(trim($_POST['email']), trim($_POST['name']));    //回复地址(可填可不填)
  $mail->WordWrap = 50;                    //设置每行字符长度
  $mail->IsHTML(true);                 // 是否HTML格式邮件
  $mail->CharSet="utf-8";    //设置邮件编码
  $mail->Subject = "网站客户留言信息";          //邮件主题
  $mail->Body    = '<p>留言人：'.trim($_POST['name']).'</p>'.'<p>公司名称：'.trim($_POST['company']).'</p>'.'<p>联系电话：'.trim($_POST['phone']).'</p>'.'<p>邮箱地址：'.trim($_POST['email']).'</p>'.'<p>留言内容：'.trim($_POST['content']).'</p>';        //邮件内容
  $mail->AltBody = "邮件正文不支持HTML格式"; //邮件正文不支持HTML的备用显示
  if(!$mail->Send())     {
    echo "信息未发送成功，请重新填写！";
    exit();
  } else {
    $url = "contact_us.php";
    echo "<script language='javascript' type='text/javascript'>";
    echo "alert('恭喜,信息已发送成功,请耐心等待,我们会尽快回复您！');window.location.href='$url'";
    echo "</script>";
  }

}

?>
<!-- 下载内容 -->
<div id="contact_all">
    <div id="contact">
    <img src="images/contact_us.jpg" style="position:absolute;right:140px;top:25px;"/>
        <?php  include 'map.php';?>
	    <div id="contact_info">
             <p class="h1">Contact Details</p>
             <p style="font-weight:600;font-size:18px;color:#333;font-family:tahoma;">Zhejiang Greenco Industry Co.,Ltd</p>
             <p class="h2">Add: Danya Industrial zone.zeguo.wenling zhejiang China.</p>
             <p>Tel: 0086-576-86428999</p>
             <p>Fax: 0086-576-86409555</p>
             <p>E-mail: greenco@greenco.cn</a></p>
             <p>MSN: greenco.cn@hotmail.com</p>
             <p>Website: http://www.greenco.cn</p>
	    </div>
	     <div id="feedback_info">
	          <p class="h1">Your questions and comments</p>
	          <p>If you would like us to send you information by post or to make contact to advise on the specification of our products, please complete the form below. </p>
              <form method="post"  action="contact_us.php">
	              <table>
		              <tr><td>Name:</td><td style="text-align:left;"><input name="name" type="text"/></td></tr>
		              <tr><td>Company:</td><td style="text-align:left;"><input name="company" type="text"/></td></tr>
		              <tr><td>Telephone:</td><td style="text-align:left;"><input name="phone" type="text"/></td></tr>
		              <tr><td>E-mail:</td><td style="text-align:left;"><input name="email" type="text"/></td></tr>
		              <tr><td style="position:absolute;top:275px;">Comments:</td><td style="text-align:left;"><textarea name="content"></textarea></td></tr>
		              <tr><td style="position:absolute;top:338px;">*Code:</td><td style="text-align:left;">
			               <img src="code.php"  id="code"   style="cursor: pointer;border:1px solid #999;padding:2px;"/>
			               <input type="text"  name="code" class="inputxt"  style="width:70px;margin-left:15px;top: -14px;"  />
		               </td>
		               </tr>
	                  <tr><td><input type="submit"  name="submit" value="SEND" id="submit"/></td></tr>
	              </table>
              </form>
	    </div>

    </div>
</div>
<!-- 下载内容end -->



<!-- 底部版权 -->
<div id="copyright" style="height:140px;clear:both;background:#222 url(images/footer_bg.png) repeat-x;">
  <div class="container" style="position:relative;">
    <div class="copyright">
              <ul style="margin:-10px 0 0  10px;float:left;">
                  <li style="font-weight:600;list-style:none;color:#bbb;">About Greenco</li>
                  <li><a href="Certification.php">Certification</a></li>
                  <li><a href="Honour.php">Honour</a></li>
                  <li><a href="History.php">History</a></li>
                  <li><a href="Video.php">Video</a></li>
                  <li><a href="Equipments.php">Equipments</a></li>
              </ul>
			  <ul style="margin:-10px 0 0  85px;float:left;">
                  <li style="font-weight:600;list-style:none;color:#bbb;">Products</li>
                  <li><a href="Side_Channel_Blower_2RB_Single_Stage.php">2RB Series Side Channel Blower</a></li>
                  <li><a href="Side_Channel_Blower_4RB_Single_Stage.php">4RB Series Side Channel Blower</a></li>
				  <li><a href="IE2_Single_Stage_Regenerative_Blower.php">IE2 Series Regenerative Blower</a></li>
				  <li><a href="Belt_Drive_Air_Blower_2RB_Single_Stage.php">Belt Drive Air Blower</a></li>
                  <li><a href="Liquid_Ring_Vacuum_Pump_2LV7.php">Liquid Ring Vacuum Pump</a></li>
              </ul>
			  <ul style="margin:-10px 0 0  85px;float:left;">
                  <li style="font-weight:600;list-style:none;color:#bbb;">Accessories</li>
                  <li><a href="Silencer.php">Silencer</a></li>
                  <li><a href="Relief_Valve.php">Relief Valve</a></li>
                  <li><a href="Inlet Vacuum Filter.php">Inlet Vacuum Filter</a></li>
              </ul>
			  <ul style="margin:-10px 0 0  85px;float:left;">
                  <li style="font-weight:600;list-style:none;color:#bbb;">Downloads</li>
                  <li><a href="#">Side Channel Blower</a></li>
                  <li><a href="#">Accessories</a></li>
                  <li><a href="#">Liquid Ring Vacuum Pump</a></li>
                  <li><a href="#">Electric Motor</a></li>
              </ul>
              <ul style="margin:-10px 0 0  85px;float:left;">
                  <li style="font-weight:600;list-style:none;color:#bbb;">News</li>
                  <li><a href="#">Enterprise news</a></li>
                  <li><a href="#">Industry news</a></li>
              </ul>

      <p style="font-size:13px;position:absolute;right:-10px;top:100px;">
	   <span>©2002-2013 Copyright Greenco. All Rights Reserved 浙ICP备12000939号-1</span>
      </p>
	</div>
  </div>
</div>
<!-- 底部版权end -->

<script>
$(function(){
    $(" div.dropdown ul li a").css('color','#444');

	$("ul.main-nav li a").hover(
	 function(){
	        $(this).css('background','#666');
	 },
	 	 function(){
	        $(this).css('background','#333');
	 }
	 );

	 $(" div.dropdown ul li a").hover(
	 function(){
	        $(this).css('background','#fff').css('text-decoration','underline').css('color','#222');
	 },
	 	 function(){
	        $(this).css('background','#fff').css('text-decoration','none').css('color','#444');
	 }
	 )
})

</script>
</body>
</html>


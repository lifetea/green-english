<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
<?php require 'setLan.php'; ?>
<title><?php echo _('Contact us|Feedback|Contact Greenco|Online_Zhejiang Greenco Industry Co Ltd');?></title>
<meta name="keywords" content="<?php echo _('Contact Us,Feedback,Contact Greenco,Greenco side channel blower,regenerative blower,air blower,GREENCO')?>" />
<meta name="description"content="<?php echo _('Greenco is professional manufacturer of side channel blower,regenerative blower,air blower in China,contact us by 0086-576-86428999.');?>" />
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
    .phone{display:none;}
</style>
<script>
$(function(){
	$('.phone').eq(<?php echo rand(0, 7)?>).css('display','block');
})
</script>
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
             <p class="h1"><?php echo _('Contact Details');?></p>
             <p style="font-weight:600;font-size:18px;color:#333;font-family:tahoma;"><?php echo _('Zhejiang Greenco Industry Co.,Ltd');?></p>
             <p class="h2"><?php echo _('Add');?>: <?php echo _('Danya Industrial zone.zeguo.wenling zhejiang China.');?></p>
				<?php
				if($lan == "zh_CN"){
		            	   echo '<p class="phone">电话：0576-86422753   卢先生</p>'.
					            	'<p class="phone">电话：0576-86465357   梁先生</p>'.
					                '<p class="phone">电话：0576-86402632   李先生</p>'.
					                '<p class="phone">电话：0576-86465350   叶先生</p>'.
					                '<p class="phone">电话：0576-86402630   陈小姐</p>'.
					                '<p class="phone">电话：0576-86465326   俞先生</p>'.
					                '<p class="phone">电话：0576-86422796   胡先生 </p>'.
					                '<p class="phone">电话：0576-86465362   李先生</p>'.
		            	   			'<p>传真: 0086-576-86409555</p>';
				}else{
				         echo  '<p>Tel: 0086-576-86428999</p><p>Fax: 0086-576-86409555</p>';
				}
				?>            	


            
             <p><?php echo _('E-mail');?>: greenco@greenco.cn</a></p>
             <p>MSN: greenco.cn@hotmail.com</p>
             <p><?php echo _('Website');?>: http://www.greenco.cn</p>
	    </div>
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
		              <tr><td style="position:absolute;top:275px;"><?php echo _('Comments');?>:</td><td style="text-align:left;"><textarea name="content"></textarea></td></tr>
		              <tr><td style="position:absolute;top:338px;">*<?php echo _('Code');?>:</td><td style="text-align:left;">
			               <img src="code.php"  id="code"   style="cursor: pointer;border:1px solid #999;padding:2px;"/>
			               <input type="text"  name="code" class="inputxt"  style="width:70px;margin-left:15px;top: -14px;"  />
		               </td>
		               </tr>
	                  <tr><td><input type="submit"  name="submit" value="<?php echo _('SEND');?>" id="submit"/></td></tr>
	              </table>
              </form>
	    </div>

    </div>
</div>
<!-- 下载内容end -->

<?php require 'inc/footer_inc.php';?>

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


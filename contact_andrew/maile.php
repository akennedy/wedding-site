<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="../favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Maggie & Andrew's Wedding | Contact Andrew</title>

<meta http-equiv="Content-Language" content="en-us" />
<meta name="description" content="Maggie and Andrew's wedding website" />
<meta name="keywords" content="maggie hess, andrew kennedy, maggie and andrew, maggie and andrew wedding, andrew and maggie kennedy, charleston wedding, magnolia plantation" />
<meta name="googlebot" content="index, follow" />
<meta name="revisit-after" content="7 days" />
<meta name="classification" content="personal" />
<meta name="language" content="en-us, english" />
<meta name="web-author" content="Andrew Kennedy" />
<meta name="author" content="Andrew Kennedy" />
<meta name="copyright" content="all rights reserved andrewandmaggie.com" />
<link rel="Shortcut Icon" href="../favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="../stylesheets/screen.css" />
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="stylesheets/ie6.css" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="stylesheets/ie6b.css" />
<![endif]-->
<style type="text/css">
<!--
.style4 {
	font-size: 1.2em;
	color: #555;
}
-->
</style>
  <?php
include('config.php');
$time = date ("h:i A"); 
$date = date ("l, F jS, Y");
$urlh = getenv(HTTP_HOST);
$url = "http://$urlh";
$IP = $_SERVER['REMOTE_ADDR'];
$name = $_POST['name']; 
$emaile = $_POST['emaile'];
$comments = $_POST['comments'];
$headers = 'From: System Admin <noreply@domain.com>';
$email;
$subject = "From your wedding website";
$body = $_POST['body'];
$bodys = "\n From: $name \n $emaile\n\n\n$comments\n\n\n\n\nFrom Your Wedding website\n From IP Address.$IP \nUrl: $url "; 
$IP = $_SERVER['REMOTE_ADDR'];
$body = $body . $bodys;
mail($email, $subject, $body, "From: $emaile");
?>
</head>

<body>
<div id="container">

  <div id="header">
    <p class="tab"><?php
  include("../countdown.php");
  countdown(2009,6,13,18,30,0,"setup");
  ?></p>
 <ul id="nav">
	     <li><a href="../index" onfocus="blur()">Home</a></li>
		 <li><a href="../hotels" onfocus="blur()">Hotels</a></li>

		 <li><a href="../other" onfocus="blur()">Addtl. Info</a></li>
		 <li><a href="../registry" onfocus="blur()">Gift Registry</a></li>
		 <li><a href="../guest" onfocus="blur()">Guestbook</a></li>
		
		 <li><a href="../contact" onfocus="blur()">Contact Us</a></li>
		
	   </ul>
	   <div class="clear">&nbsp;</div>
  </div><!--/header-->

  <hr />
  <div id="container_wrapper">
  </div>
  <div>
  <table width="98%">
    <tr>
      <td width="30%" align="left" valign="top" class="sidebar_tabs"><p class="style6"><u>Contact Andrew</u></p>
        <p class="style6">Thank you for contacting me<br /><br />&nbsp;&nbsp;- Andrew</p></td>
      <td width="70%" valign="top"><p align="center" class="style6 style4">Thanks - I will get back to you shortly</p>     </td>
    </tr>
  </table>
  </div>
  <!--/container_wrapper-->
  <div id="bottom">&nbsp;</div>

 
</div><!--/container-->

 <div id="footer">
 </div>
</body>
</html>
<?php
include('config.php');
?>
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
.style3 {color: #999999}
-->
</style>
<SCRIPT LANGUAGE="JavaScript">
function checkEmail(myForm) {
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emaile.value)){
return (true)
}
alert("Invalid E-mail Address! Please re-enter.")
return (false)
}
//  End -->
</script>
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
		 <li><a href="../pictures" onfocus="blur()">Pictures</a></li>

		 <li><a href="../videos" onfocus="blur()">Videos</a></li>
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
      <td width="70%" valign="top"><p align="center"><form name="formcheck" action="maile" method="POST" onSubmit="return checkEmail(this)">
<table width="100%" border="0">
<tr>
  <td width="120"><div align="right"><strong><span class="style4">Name:</span></strong></div></td>
  <td><input type=text style="font-size: 13px; font-family: tahoma,arial; font-weight: bold; color: #000000; BORDER: #000000 1px line ; BACKGROUND-COLOR: #FFFFFF" input name="name"  size="30"></td>
</tr>
<tr>
  <td>&nbsp;</td>
</tr>
<tr>
  <td width="120"><div align="right"><strong><span class="style4">E-mail:</span></strong></div></td>
  <td><input type=text style="font-size: 13px; font-family: tahoma,arial; font-weight: bold; color: #000000; BORDER: #000000 1px line ; BACKGROUND-COLOR: #FFFFFF" input name="emaile" size="30"></td>
</tr>
<tr>
  <td>&nbsp;</td>
</tr>
<tr>
  <td width="120" valign="top"><div align="right"><strong><span class="style4">Comments:</span></strong></div></td>
  <td><textarea name="comments" style="font-size: 13px; font-family: tahoma,arial; font-weight: bold; color: #000000; BORDER: #000000 1px line ; BACKGROUND-COLOR: #FFFFFF"  rows="5" cols="40"></textarea></td>
</tr>
<tr>
  <td>
  </td>
  <td>
  <input type="submit" name="Submit" value="Submit">&nbsp;<input type="reset" name="Reset" value="Reset">
</td>
</tr>
</table>
</form></p>
     </td>
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


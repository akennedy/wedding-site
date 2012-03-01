<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Maggie & Andrew's Wedding | Guestbook Entry</title>

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
<link rel="Shortcut Icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="stylesheets/screen.css" />
<link rel='stylesheet' href='admin/style.css' type='text/css'>
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="stylesheets/ie6.css" />
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="stylesheets/ie6b.css" />
<![endif]-->
<style type="text/css">
<!--
.style8 {color: #555}
-->
</style>
<script language="JavaScript">
var goPopX = (screen.width/2)-250;
var goPopY = (screen.height/2)-250;
var loc = "left="+goPopX+",top="+goPopY;
function goPop2(){
goPopWindow = window.open("bbcode.php","","scrollbars=no,resizable=yes,width=500,height=500,"+loc);
}
</script>
<SCRIPT LANGUAGE="Javascript">
		//<!--
		// pop a windoid (Pictures)
		function popWin(url, w, h) 
		{
		 var madURL = url;
		 var x, y, winStr;
		 x=0; y=0;
		 self.name="opener";
		 winStr = "height="+h+",width="+w+",screenX="+x+",left="+x+",screenY="+y+",top="+y+",channelmode=0,dependent=0,directories=0,fullscreen=0,location=0,menubar=0,resizable=1,scrollbars=0,status=0,toolbar=0";
		 lilBaby = window.open(madURL, "_blank", winStr);
		}
		//--> </script>
</head>

<body>
<div id="container">

  <div id="header">
       <p class="tab"><?php
  include("countdown.php");
  countdown(2009,6,13,18,30,0,"setup");
  ?></p>
	   <ul id="nav">
	     <li><a href="index" onfocus="blur()">Home</a></li>
		 <li><a href="pictures" onfocus="blur()">Pictures</a></li>

		 <li><a href="videos" onfocus="blur()">Videos</a></li>
		 <li><a href="registry" onfocus="blur()">Gift Registry</a></li>
		 <li><a href="guest" onfocus="blur()">Guestbook</a></li>
		
		 <li><a href="contact" onfocus="blur()">Contact Us</a></li>
		
	   </ul>
	   <div class="clear">&nbsp;</div>
  </div><!--/header-->

  <hr />
  <div id="container_wrapper">
  </div>
  <div>
  <table width="98%">
    <tr>
      <td width="30%" align="left" valign="top" class="sidebar_tabs"><p class="style8"><u>Guestbook</u></p>
      <p class="style8">Please sign our guestbook and feel free to leave any comments.  The funnier the better</p></td>
      <td width="70%" valign="top">

<?php
$im = ImageCreate(200, 40);  //create image
$white = ImageColorAllocate($im, 255, 255, 255);
$black = ImageColorAllocate($im, 69, 70, 70);
srand((double)microtime()*1000000); 
$string = md5(rand(0,9999)); 
$string=substr($string,1,7);
$verification = $string;
ImageFill($im, 0, 0, $black);
ImageString($im, 4, 70, 10, $verification, $white);
Imagejpeg($im, "images/verify.jpeg");
ImageDestroy($im); 
?>
<body>
<center>
<link rel='stylesheet' href='admin/style.css' type='text/css'>

<?php
include "admin/connect.php";
$s=$_SERVER["REMOTE_ADDR"];
$ipbancheck="SELECT * from gb_banip where IP='$s'";
$ipbancheck2=mysql_query($ipbancheck);
while($ipbancheck3=mysql_fetch_array($ipbancheck2))
{
  $IPBANNED=$ipbancheck3[IP];
}
if ($IPBANNED)
    {
       print "You have been banned from posting";
    }

else
   {
    
    if (!isset($_POST['submit']))
    {
     print "<table class='entry'  border='6'><tr class='row1'><td>";
     print "<form method='post' action='addentry.php' name='form'>";
     print "&nbsp;<b>Name:</b><br> &nbsp;<input type='text' name='name' size='40'><br>";
     print "&nbsp;<b>Homepage(include http://):</b><br>&nbsp;<input type='text' name='homepage' size='40'><br>";
     print "&nbsp;<b>E-mail:</b><br>&nbsp;<input type='text' name='email' size='40'><br>";
     print "&nbsp;<b>Comment:</b><br>";
     print "<textarea rows='6' name='comment' cols='45'></textarea><br>";
	 print "&nbsp;<a onClick=\"addSmiley(':)')\"><img src='images/smile.gif'></a> ";
     print "<a onClick=\"addSmiley(':(')\"><img src='images/sad.gif'></a> ";
     print "<a onClick=\"addSmiley(';)')\"><img src='images/wink.gif'></a> ";
     print "<a onClick=\"addSmiley(';smirk')\"><img src='images/smirk.gif'></a> ";	
     print "<a onClick=\"addSmiley(':blush')\"><img src='images/blush.gif'></a> ";
     print "<a onClick=\"addSmiley(':angry')\"><img src='images/angry.gif'></a> ";
     print "<a onClick=\"addSmiley(':shocked')\"><img src='images/shocked.gif'></a> ";
     print "<a onClick=\"addSmiley(':cool')\"><img src='images/cool.gif'></a> ";
     print "<a onClick=\"addSmiley(':ninja')\"><img src='images/ninja.gif'></a> ";
     print "<a onClick=\"addSmiley('(heart)')\"><img src='images/heart.gif'></a> ";
     print "<a onClick=\"addSmiley('(!)')\"><img src='images/exclamation.gif'></a> ";
     print "<a onClick=\"addSmiley('(?)')\"><img src='images/question.gif'></a>";
     print "<a onclick=\"addSmiley(':{blink}')\"><img src='images/winking.gif'></a>";
     print "<A onclick=\"addSmiley('{clover}')\"><img src='images/clover.gif'></a>";
     print "<a onclick=\"addSmiley(':[glasses]')\"><img src='images/glasses.gif'></a>";
     print "<a onclick=\"addSmiley(':[barf]')\"><img src='images/barf.gif'></a>";
     print "<a onclick=\"addSmiley(':[reallymad]')\"><img src='images/mad.gif'></a>";
	 print "<br><br><br><br>";
     print "<script language=\"JavaScript\" type=\"text/javascript\">\n";
     print "function addSmiley(textToAdd)\n";
     print "{\n";
     print "document.form.comment.value += textToAdd;";
     print "document.form.comment.focus();\n";
     print "}\n";
     print "</script>\n";
     print "<input type='hidden' name='secretcode' value='$verification'>";
     print "<font color='red'>&nbsp;Type in what is in the <br>&nbsp;image to the right</font><br>";
	 print "&nbsp;<input type='text' name='code' size='15'>";  
     print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/verify.jpeg' border='0'><br><br>";
     print "&nbsp;<input type='submit' name='submit' value='submit'>";
     print "</form><br>";
	 print "<font color='red'></font><br>";echo "<p><a href='javascript:goPop2()' title=\"Return to previous page\">Add images and links to your comments</a></p>";
    
   }
 
    


  else if (isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $country=$_POST['country'];
    $email=$_POST['email'];
    $homepage=$_POST['homepage'];
    $aim=$_POST['aim'];
    $icq=$_POST['icq'];
    $yim=$_POST['yim'];
    $msn=$_POST['msn'];
    $comment=$_POST['comment'];
    $code=$_POST['code'];
    $secretcode=$_POST['secretcode'];
    if(!$name || !$comment)
    {
      print "<font color='red'>Name or comment not entered, please go back and sign again</font><br>";echo "<p><a href=\"javascript:history.go(-1)\" title=\"Return to previous page\">&laquo; Go back</a></p>";
    }
    else if($code!=$secretcode)
    {
       print "<font color='red'>You forgot to enter in the validation code from the little green box before submitting.</font>";echo "<p><a href=\"javascript:history.go(-1)\" title=\"Return to previous page\">&laquo; Go back</a></p>";
    }

   else
    {
     $r=$_SERVER["REMOTE_ADDR"];
     $day=date("D M d, Y H:i:s");
     $timegone=date("U") ; //seconds since Jan 1st, 1970
     $putinguestbook="INSERT INTO gbook(name, country, mail, homepage, comment, realtime, aim, icq, yim, msn, time,IP) VALUES('$name','$country','$email','$homepage','$comment','$day','$aim','$icq','$yim','$msn','$timegone','$r')";
     mysql_query($putinguestbook);
     print "Thanks for posting, you will now be redirected <META HTTP-EQUIV = 'Refresh' Content = '2; URL =guest.php'> ";
    }
  }
}  
?></td>
    </tr></table>

</center></body><p>&nbsp;</p>
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

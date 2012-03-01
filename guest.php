<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Maggie & Andrew's Wedding | Guestbook</title>

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
	   <div class="clear">&nbsp;&nbsp;</div>
  </div><!--/header-->

  <hr />
  <div id="container_wrapper">
  </div>
  <div>
  <table width="98%">
    <tr>
      <td width="30%" align="left" valign="top" class="sidebar_tabs"><p class="style8"><u>Guestbook</u></p>
        <p class="style8">Please sign our guestbook and feel free to leave any comments.  The funnier the better</p>
        <p class="style8">&nbsp;</p>
        <p class="style8"><? print "<center><A href='addentry.php'>[Sign Guestbook]</center></a>";?>&nbsp;</p>
        <p class="style8">&nbsp;</p>
        <p class="style8">&nbsp;</p></td>
      <td width="70%" valign="top">

<?
$numentries=5;
include "admin/connect.php";
print "<center>";
print "<table class='maintable'>";
print "<tr class='headline'><td></td>";
print "<td valign='top' width='80%'>";
print "<table border='0' width='100%'><tr class='headline'><td valign='top' width='75%'>";
if(!isset($_GET['start']))
{
  $start=0;
}
else
{
  $start=$_GET['start'];
}


$order="SELECT * from gbook";
$order2=mysql_query($order) or die(mysql_error());
$d=0;
$f=0;
$g=1+$d/$numentries;


$num=mysql_num_rows($order2);

print "Page: ";
$prev=$start-$numentries;
$next=$start+$numentries;
if($start>=$numentries)
  {
    print "<A href='guest.php?start=$prev'><<</a>&nbsp;";
  }
while($order3=mysql_fetch_array($order2))
{
 
 if($f>=$start-3*$numentries&&$f<=$start+7*$numentries)
 {
 
 if($f%$numentries==0)
  {
    

    print "<A href='guest.php?start=$d'>$g</a> ";
    
  }
 }
$d=$d+1;
$g=1+$d/$numentries;
$f++;

}

if($start<=$num-$numentries)
  {
    print "<A href='guest.php?start=$next'>>></a>&nbsp;";
  }



print "</td>";
print "<td valign='top' width='25%'>";
print "</td></tr></table>";

print "</td>";

$gbvar="Select * FROM gbook order by ID DESC LIMIT " . $start . ", $numentries"; //retrieve entries from sql
$row=mysql_query($gbvar) or die(mysql_error());
$formatcount=0; //color display counter

while($gbvalues=mysql_fetch_array($row))
{

  
   $gbvalues[comment]=htmlspecialchars($gbvalues[comment]);
   $gbvalues[name]=htmlspecialchars($gbvalues[name]);
   $gbvalues[country]=htmlspecialchars($gbvalues[country]);
   $gbvalues[comment]=BBCode($gbvalues[comment]);
   $gbvalues[comment]=smile($gbvalues[comment]);

    
if ($formatcount%2==0)
    {
      

      print "<tr class='row1'><td valign='top' width='20%'>";
      print "<font size='2'>$gbvalues[realtime]<br>";
      print "<b><font size='3'>$gbvalues[name]</font></b><br>";
      print "<font size='2'>$gbvalues[country]</font><br><br>";
      if($gbvalues[homepage])
      {
        print "<A href='$gbvalues[homepage]'><img src='images/homepage.gif' border='0'></a> ";
      }
      if($gbvalues[mail])
      {
        print "<A href='mailto:$gbvalues[mail]'><img src='images/email.gif' border='0'></a><br>";
      }
      if($gbvalues[aim])
      {
        print "<A href=\"javascript:popWin('aim.php?ID=$gbvalues[ID]',400, 5)\"><img src='images/aim.gif' alt='$gbvalues[aim]' border='0'></a> ";
      }
      if($gbvalues[icq])
      {
       print "<A href=\"javascript:popWin('icq.php?ID=$gbvalues[ID]',400, 5)\"><img src='images/icq.gif' alt='$gbvalues[icq]' border='0'></a> ";
      }

      if($gbvalues[msn])
      {
        print "<A href=\"javascript:popWin('msn.php?ID=$gbvalues[ID]',400, 5)\"><img src='images/msn.gif' alt='$gbvalues[msn]' border='0'></a> ";
      }
      if($gbvalues[yim])
      {
        print "<A href=\"javascript:popWin('yim.php?ID=$gbvalues[ID]',400, 5)\"><img src='images/yim.gif' alt='$gbvalues[yim]' border='0'></a> ";
      }
      if(isset($_SESSION['username']))
      {
        print"<br>IP: $gbvalues[IP]";
      }
      print "</td>";
      print "<td valign='top' width='80%'>";
      print "<font color='#$fontcolor'>";
      $gbvalues[comment] = wordwrap( $gbvalues[comment], 19, "\n", 1);
      print "$gbvalues[comment]";
      if(isset($_SESSION['username']))
      {
        print "<br><br><A href='admin/edit.php?ID=$gbvalues[ID]'>Edit</a>&nbsp;&nbsp;<A href='admin/delete.php?ID=$gbvalues[ID]'>Delete</a>";
      }
      print "</td></tr>";
      $formatcount++;
     }

else
    {
       

      print "<tr class='row2'><td valign='top' width='20%'>";
      print "<font size='2'>$gbvalues[realtime]<br>";
      print "<b><font size='3'>$gbvalues[name]</font></b><br>";
      print "<font size='2'>$gbvalues[country]</font><br><br>";
      if($gbvalues[homepage])
      {
        print "<A href='$gbvalues[homepage]'><img src='images/homepage.gif' border='0'></a> ";
      }
      if($gbvalues[mail])
      {
        print "<A href='mailto:$gbvalues[mail]'><img src='images/email.gif' border='0'></a><br>";
      }
      if($gbvalues[aim])
      {
        print "<A href=\"javascript:popWin('aim.php?ID=$gbvalues[ID]',400, 5)\"><img src='images/aim.gif' alt='$gbvalues[aim]' border='0'></a> ";
      }
      if($gbvalues[icq])
      {
       print "<A href=\"javascript:popWin('icq.php?ID=$gbvalues[ID]',400, 5)\"><img src='images/icq.gif' alt='$gbvalues[icq]' border='0'></a> ";
      }

      if($gbvalues[msn])
      {
        print "<A href=\"javascript:popWin('msn.php?ID=$gbvalues[ID]',400, 5)\"><img src='images/msn.gif' alt='$gbvalues[msn]' border='0'></a> ";
      }
      if($gbvalues[yim])
      {
        print "<A href=\"javascript:popWin('yim.php?ID=$gbvalues[ID]',400, 5)\"><img src='images/yim.gif' alt='$gbvalues[yim]' border='0'></a> ";
      }
      if(isset($_SESSION['username']))
      {
        print"<br>IP: $gbvalues[IP]";
      }
      print "</td>";
      print "<td valign='top' width='80%'>";
      print "<font color='#$fontcolor'>";
      $gbvalues[comment] = wordwrap( $gbvalues[comment], 19, "\n", 1);
      print "$gbvalues[comment]";
      if(isset($_SESSION['username']))
      {
        print "<br><br><A href='admin/edit.php?ID=$gbvalues[ID]'>Edit</a>&nbsp;&nbsp;<A href='admin/delete.php?ID=$gbvalues[ID]'>Delete</a>";
      }
     
      print "</td></tr>";
      $formatcount++;
    }
   
}
print "</table>";

?>

<? //BBCODE function
	//Local copy

	function BBCode($Text)
	    {
        	// Replace any html brackets with HTML Entities to prevent executing HTML or script
            // Don't use strip_tags here because it breaks [url] search by replacing & with amp
     

            // Convert new line chars to html <br /> tags
            $Text = nl2br($Text);

            // Set up the parameters for a URL search string
            $URLSearchString = " a-zA-Z0-9\:\/\-\?\&\.\=\_\~\#\'";
            // Set up the parameters for a MAIL search string
            $MAILSearchString = $URLSearchString . " a-zA-Z0-9\.@";

            // Perform URL Search
            $Text = preg_replace("/\[url\]([$URLSearchString]*)\[\/url\]/", '<a href="$1" target="_blank">$1</a>', $Text);
            $Text = preg_replace("(\[url\=([$URLSearchString]*)\]([$URLSearchString]*)\[/url\])", '<a href="$1" target="_blank">$2</a>', $Text);
            $Text = preg_replace("/\[URL\]([$URLSearchString]*)\[\/URL\]/", '<a href="$1" target="_blank">$1</a>', $Text);
            $Text = preg_replace("(\[URL\=([$URLSearchString]*)\]([$URLSearchString]*)\[/URL\])", '<a href="$1" target="_blank">$2</a>', $Text);
            // Perform MAIL Search
            $Text = preg_replace("(\[mail\]([$MAILSearchString]*)\[/mail\])", '<a href="mailto:$1">$1</a>', $Text);
            $Text = preg_replace("/\[mail\=([$MAILSearchString]*)\](.+?)\[\/mail\]/", '<a href="mailto:$1">$2</a>', $Text);

            // Check for bold text
            $Text = preg_replace("(\[b\](.+?)\[\/b])is",'<span class="bold">$1</span>',$Text);

            // Check for Italics text
            $Text = preg_replace("(\[i\](.+?)\[\/i\])is",'<span class="italics">$1</span>',$Text);

            // Check for Underline text
            $Text = preg_replace("(\[u\](.+?)\[\/u\])is",'<span class="underline">$1</span>',$Text);

            // Check for strike-through text
            $Text = preg_replace("(\[s\](.+?)\[\/s\])is",'<span class="strikethrough">$1</span>',$Text);

            // Check for over-line text
            $Text = preg_replace("(\[o\](.+?)\[\/o\])is",'<span class="overline">$1</span>',$Text);

            // Check for colored text
            $Text = preg_replace("(\[color=(.+?)\](.+?)\[\/color\])is","<span style=\"color: $1\">$2</span>",$Text);

            // Check for sized text
            $Text = preg_replace("(\[size=(.+?)\](.+?)\[\/size\])is","<span style=\"font-size: $1px\">$2</span>",$Text);

            // Check for list text
            $Text = preg_replace("/\[list\](.+?)\[\/list\]/is", '<ul class="listbullet">$1</ul>' ,$Text);
            $Text = preg_replace("/\[list=1\](.+?)\[\/list\]/is", '<ul class="listdecimal">$1</ul>' ,$Text);
            $Text = preg_replace("/\[list=i\](.+?)\[\/list\]/s", '<ul class="listlowerroman">$1</ul>' ,$Text);
            $Text = preg_replace("/\[list=I\](.+?)\[\/list\]/s", '<ul class="listupperroman">$1</ul>' ,$Text);
            $Text = preg_replace("/\[list=a\](.+?)\[\/list\]/s", '<ul class="listloweralpha">$1</ul>' ,$Text);
            $Text = preg_replace("/\[list=A\](.+?)\[\/list\]/s", '<ul class="listupperalpha">$1</ul>' ,$Text);
            $Text = str_replace("[*]", "<li>", $Text);


            // Check for font change text
            $Text = preg_replace("(\[font=(.+?)\](.+?)\[\/font\])","<span style=\"font-family: $1;\">$2</span>",$Text);

    

            // Images
            // [img]pathtoimage[/img]
            $Text = preg_replace("/\[IMG\](.+?)\[\/IMG\]/", '<img src="$1">', $Text);
            $Text = preg_replace("/\[img\](.+?)\[\/img\]/", '<img src="$1">', $Text);
            // [img=widthxheight]image source[/img]
            $Text = preg_replace("/\[img\=([0-9]*)x([0-9]*)\](.+?)\[\/img\]/", '<img src="$3" height="$2" width="$1">', $Text);

	        return $Text;
		}
?>

<? //function for smiley icons
 function smile($post)
 {
      $smilies=array( 
    
    
    ':)' => "<img src='images/smile.gif' />",
    ':(' => "<img src='images/sad.gif'   />",
    ':p' => "<img src='images/tongue.gif' />",
    ';)' => "<img src='images/wink.gif'  />",
    ';smirk' => "<img src='images/smirk.gif' />",
    ':blush' =>"<img src='images/blush.gif' />",
    ':angry' =>"<img src='images/angry.gif' />",
    ':shocked'=>     "<img src='images/shocked.gif' />",
    ':ninja'=>"<img src='images/ninja.gif' />",
    ':cool'=>"<img src='images/cool.gif' />",
    '(!)'=>"<img src='images/exclamation.gif' />",
    '(?)'=>"<img src='images/question.gif' />",
    '(heart)'=>"<img src='images/heart.gif' />",
    ':{blink}'=>"<img src='images/winking.gif'>",
    '{clover}'=>"<img src='images/clover.gif'>",
    ':[glasses]'=>"<img src='images/glasses.gif'>",
    ':[barf]'=>"<img src='images/barf.gif'>",
    ':[reallymad]'=>"<img src='images/mad.gif'>",
    ':[evil]'=>"<img src='images/melkor.gif'>"
   
      
    );

   $post=str_replace(array_keys($smilies), array_values($smilies), $post);
    return $post;
 }

?>

<?
include "footer.php";
?><p>&nbsp;</p>
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
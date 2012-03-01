<?php
include "connect.php";
session_start();
print "<link rel='stylesheet' href='style.css' type='text/css'>";
if(isset($_SESSION['username']))
{
  print "<center>";
  print "<table border='0' cellspacing='20'>";
  print "<tr><td valign='top'>";
  include "adminleft.php";
  print "</td>";
  print "<td valign='top'>";
  print "<table class='maintable'>";
  print "<tr class='headline'><td><center>Block Ips</center></td></tr>";
  print "<tr class='row1'><td>";
  if(isset($_POST['submit']))
  {
     if(!isset($_POST['unblockip']))
     {
       print "Please select an IP to unblock.";
     }
     else
     {   
       $unblockip=$_POST['unblockip'];
       $delip="DELETE from gb_banip where IP='$unblockip'";
       mysql_query($delip) or die("Could not unban ip");
       print "IP unbanned";
     }

  }
  else
  {
     print "Select IP to unban:<br>";
     print "<form action='unblockip.php' method='post'>";
     print "<select name='unblockip'>";
     $getips="select * from gb_banip";
     $getips2=mysql_query($getips) or die("Could not get ips");
     while($getips3=mysql_fetch_array($getips2))
     {
       print "<option value='$getips3[IP]'>$getips3[IP]</option><br>";
     }
     print "</select><br>";
     print "<input type='submit' name='submit' value='submit'></form>";

  }
  print "</td></tr></table>";
  print "</td></tr></table>";
  print "</center>";
}
else
{
  print "Not logged in";
}

?>
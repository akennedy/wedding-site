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
     if(!isset($_POST['ipblock']))
     {
       print "Please input an ip to block";
     }
     else
     {
       $ipblock=$_POST['ipblock'];
       $inip="INSERT into gb_banip (IP) values('$ipblock')";
       mysql_query($inip) or die("Could not Ban IP");
       print "Ip Banned";
     }
  }
  else
  {
     print "Type in IP to block from posting.<br>";
     print "<form action='blockip.php' method='post'>";
     print "<input type='text' name='ipblock' size='30'><br>";
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
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
  print "<tr class='headline'><td><center>Edit Entry</center></td></tr>";
  print "<tr class='row1'><td>";
  if(isset($_POST['submit']))
  {
     $ID=$_POST['ID'];
     $entry=$_POST['entry'];
     $updatentry="Update gbook set comment='$entry' where ID='$ID'";
     mysql_query($updatentry) or die("Could not update entry");
     print "Entry edited";   

  }
  else if(isset($_GET['ID']))
  {
     $ID=$_GET['ID'];
     $getentry="SELECT * from gbook where ID='$ID'";
     $getentry2=mysql_query($getentry) or die("Could not get entry");
     $getentry3=mysql_fetch_array($getentry2);
     print "<form action='edit.php' method='post'>";
     print "<input type='hidden' name='ID' value='$getentry3[ID]'>";
     print "<textarea name='entry' rows='6' cols='40'>$getentry3[comment]</textarea><br>";
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
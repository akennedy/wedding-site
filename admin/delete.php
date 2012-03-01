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
  print "<tr class='headline'><td><center>Delete Entry</center></td></tr>";
  print "<tr class='row1'><td>";
  if(isset($_POST['submit']))
  {
     $ID=$_POST['ID'];
     $delentry="DELETE from gbook where ID='$ID'";
     mysql_query($delentry) or die("Could not delete entry");
     print "Entry Deleted";
  }
  else if(isset($_GET['ID']))
  {
     $ID=$_GET['ID'];
     print "Are you sure you want to delete this entry?<br>";
     print "<form action='delete.php' method='post'>";
     print "<input type='hidden' name='ID' value='$ID'>";
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
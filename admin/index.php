<?php
include "connect.php";
session_start();
print "<link rel='stylesheet' href='style.css' type='text/css'>";
if(isset($_SESSION['username']))
{
  print "<center>";
  print "<table border='0'>";
  print "<tr><td valign='top'>";
  include "adminleft.php";
  print "</td>";
  print "<td valign='top'>";
  print "<table class='maintable'>";
  print "<tr class='headline'><td><center>Admin Panel</center></td></tr>";
  print "<tr class='row1'><td>";
  $getnumentries="SELECT * from gbook";
  $getnumentries2=mysql_query($getnumentries) or die("Could not get entries");
  $getnumentries3=mysql_num_rows($getnumentries2);
  print "There are a total of $getnumentries3 entries in your guestbook.<br><br>";
  print "Block IP : Lets you block certain IP's from posting.<br><br>";
  print "Unblock IP : Unblock a banned IP.<br><br>";
  print "Admin Browsing : Browse through the guestbook as an admin with edit/delete options.<br><br>";
  print "Search: search entries with edit/delete options.<br><br>";
  print "Prune entries : Delete all entries over a specified number of days old.<br><br>"; 
  print "</td></tr></table>";
  print "</td></tr></table>";
  print "</center>";
}
else
{
  print "Not logged in";
}

?>
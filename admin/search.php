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
  print "<tr class='headline'><td><center>Search Entries</center></td></tr>";
  print "<tr class='row1'><td>";
  if(isset($_POST['submit'])||isset($_POST['searchterm']))
  {
     $searchterm=$_POST['searchterm'];
     $getentries="SELECT * from gbook where name like '%$searchterm%' or comment like '%$searchterm%'";
     $getentries2=mysql_query($getentries) or die("Could not get entries");
     while($getentries3=mysql_fetch_array($getentries2))
     {
       $getentries3[name]=htmlspecialchars($getentries3[name]);
       $getentries3[comment]=htmlspecialchars($getentries3[comment]);
       $getentries3[comment]= wordwrap( $getentries3[comment], 19, "\n", 1); 
       print "Name: $getentries3[name]<br>";
       print "Comment: $getentries3[comment]<br>";
       print "<A href='edit.php?ID=$getentries3[ID]'>Edit</a>&nbsp;&nbsp;<A href='delete.php?ID=$getentries3[ID]'>Delete</a><br><br>";
     }

  }
  else 
  {
     print "<form action='search.php' method='POST'>";
     print "Search:&nbsp;<input type='text' name='searchterm' size='20'><br>";
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
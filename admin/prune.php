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
  print "<tr class='headline'><td><center>Prune Entries</center></td></tr>";
  print "<tr class='row1'><td>";
  if(isset($_POST['submit']))
  {
    if(!isset($_POST['numdays']))
    {
       print "You must enter a value for the number of days";
    }
    else
    {
      $numdays=$_POST['numdays'];
      $nowtime=date("U");
      $deltime=$nowtime-$numdays*24*3600;
      $delete="DELETE from gbook where time<'$deltime'";
      mysql_query($delete) or die("Could not delete entries");
      print "Entries pruned.";      
    }

  }
  else
  {
    print "Prune entries over how many days old?<br>";
    print "<form action='prune.php' method='post'>";
    print "<input type='text' name='numdays' size='5'><br>"; 
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



<?
include "admin/connect.php";
$r="SELECT * from gbook where ID='$ID'";
$r2=mysql_query($r);
$r3=mysql_fetch_array($r2);
print "$r3[yim]";
?>


<?
include "admin/connect.php";
$sql="CREATE TABLE gb_banip (
  ID int(12) NOT NULL auto_increment,
  IP varchar(25) NOT NULL default '',
  PRIMARY KEY  (ID)
)";
mysql_query($sql);

$sql2="CREATE TABLE gbook (
  ID bigint(20) NOT NULL auto_increment,
  name varchar(35) NOT NULL default '',
  homepage varchar(45) NOT NULL default '',
  mail varchar(35) NOT NULL default '',
  country varchar(30) NOT NULL default '',
  comment longblob NOT NULL,
  realtime varchar(40) NOT NULL default '',
  aim varchar(20) NOT NULL default '',
  icq varchar(20) NOT NULL default '',
  yim varchar(20) NOT NULL default '',
  msn varchar(20) NOT NULL default '',
  time bigint(60) NOT NULL default '0',
  IP varchar(255) NOT NULL default '',
  PRIMARY KEY  (ID)
)";
mysql_query($sql2);

$sql3="CREATE TABLE gb_logintable (
  id int(5) unsigned NOT NULL auto_increment,
  username varchar(32) default NULL,
  password varchar(32) default NULL,
  PRIMARY KEY  (id)
)";
mysql_query($sql3);
print "Installation complete";
?>
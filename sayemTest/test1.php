<?php
include_once("include/functions.php");
include_once("include/connection.php");
$q="select * from informations";
echo $q;
$r=mysql_query($q);
echo"exec";
while($f=mysql_fetch_array($r)){
  echo $f['name']."\n         ";
}
?>
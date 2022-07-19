<?php include("constant.php");?>
<?php 

//1.Create a databse connection

$connection=mysql_connect(DB_SERVER,DB_USER,DB_PASSWORD);
if(!$connection){
  die("could not connect the database");
}
//2.select a database to use
$db_select=mysql_select_db(DB_NAME,$connection);
if(!$db_select){
die("database failed".mysql_errno());
}
 


?>
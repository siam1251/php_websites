<?php 
include_once("include/functions.php");
include_once('include/common.inc.php');
include_once('include/connection.php');

$savant->display('templates/index.ctp');
if(isset($_POST['signUp'])){	
	header('Location:signUp.php');
}
if(isset($_POST['submit'])){
	$query1="select * from passwords
	where userName='{$_POST['userName']}' and password='{$_POST['password']}'";
	$resultSet1= mysql_query($query1);
	$row=mysql_fetch_array($resultSet1);
	
	if(mysql_num_rows($resultSet1)){
		 session_start();
		 $_SESSION['userName']=$row['userName'];
		 header('Location:information.php');
	}
	else {
		echo"wrong UserName or password ";
	}
}
?>
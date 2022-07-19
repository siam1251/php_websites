<?php
session_start();
?>
<?php
 include_once("include/functions.php");
 if(checkPassword($_POST)==1){
	 $_SESSION['name']=$_POST['userName'];
 header('Location: test/index.php');}
 else header('Location:template/logIn.html');
 ?>
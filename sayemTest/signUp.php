<?php 
include_once("include/common.inc.php");
include_once("include/functions.php");
include_once("include/connection.php");

if(isset($_POST['signUp'])){
	
	if(!empty($_POST['password'])&&!empty($_POST['userName'])&&!empty($_POST['address'])&&!empty($_POST['contact'])){
		if($_POST['password']==$_POST['rePassword']){
			$q="insert into passwords(userName,password) values('{$_POST['userName']}','{$_POST['password']}')";
			$q2="insert into informations(name,contactNo,address) values('{$_POST['userName']}','{$_POST['contact']}','{$_POST['address']}')";
			echo $q2;
			
			mysql_query($q);
			mysql_query($q2);
			if(isset($_FILES['file']['name'])){
				if(uploadImage($_FILES['file'])){
					$var="upload/{$_FILES['file']['name']} ";
					$q3="update informations set image='{$var}' where name='{$_POST['userName']}'";
					echo $q3;
					mysql_query($q3);
					echo"uploaded";
				}
			}
		
		
		}
		else{ 
			echo"password mismatched";
			$savant->display("templates/signUp.ctp");
		}
	}
	else {
		echo"fill up all the fields";
		$savant->display("templates/signUp.ctp");
	}
}
else{
	$savant->display("templates/signUp.ctp");
}

?>
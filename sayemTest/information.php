
<?php 
session_start();
if(!isset($_SESSION['userName'])){
header('Location:index.php');
}
?>
<?php 
include_once('include/common.inc.php');
include_once('include/functions.php');
include_once('include/connection.php');

if(isset($_POST['update'])){
	if(!empty($_POST['password'])&&!empty($_POST['userName'])&&!empty($_POST['address'])&&!empty($_POST['contact'])){
		$q="update informations set name='{$_POST['name']}' , address='{$_POST['address']}', contactNo='{$_POST['contact']}' 
		where name='{$_SESSION['userName']}'";
		$q2="update passwords set userName ='{$_POST['name']}' where userName='{$_SESSION['userName']}'";
		echo $q2;
		mysql_query($q);
		mysql_query($q2);
		$_SESSION['userName']=$_POST['name'];
	}
	else {
		echo"Fill up the fields correctly";
	}
}

if(isset($_POST['logOut'])){
	session_destroy();
	header('Location:index.php');
}
$row=array('name'=>"  ",'address'=>' ','contactNo'=>'','image'=>'');
if(isset($_POST['delete'])){
	$q3=" delete from informations where name='{$_SESSION['userName']}'";
	$q4=" delete from passwords where name='{$_SESSION['userName']}'";
	mysql_query($q3);
	mysql_query($q4);
	session_destroy();
	header('Location:index.php');
}
else{
		
	$query2="select * from informations
	where name='{$_SESSION['userName']}'";
	$resultSet2= mysql_query($query2);
	$row=mysql_fetch_array($resultSet2);


}
$savant->assign('value',$row);
$savant->display('templates/information.ctp');
?>
<?php
include("includes/connection.php");
include("includes/functions.php");
 $menu_name=mysql_prep($_POST['menu_name']);
 $position=$_POST['position'];
 $visible=$_POST['visible'];
 
 ?>
 <?php 
 $query="insert into subjects
      (menu_name,position, visible)
	  values('{$menu_name}',{$position},{$visible})";
	  if(mysql_query($query)){
		  header("location:content.php");
		  exit();
		  }
		  else echo"<p> Subject creation failed".mysql_error()."</p>"; ?>
 <?php 
 mysql_close($connection);
 ?>

<?php
function uploadImage($file){
if($file['type']=='image/jpeg'||$file['type']=='image/gif'||$file['type']=='image/png'||$file['type']=='image/jpg'){
      if($file['error']>0){
	  	echo"file uploading error";
		return false;
	  }
	  else{
      move_uploaded_file($file['tmp_name'],"upload/".$file['name']);
	  return true;
	  }
}
else{ echo"image type not valid";
return false;
}
}


function mysql_prep($value){
/*$magic_quotes_active=get_magic_quotes_gpc();
$new_enough_php=function_exists("mysql_real_escape_string");
if($new_enough_php){
if($magic_quotes_active){
	$value=stripcslashes($value);
	$value=mysql_real_escape_string($value);}
}
else{
	if(!magic_quotes_active){
	$value=addslashes($value);
	}}*/
	addslashes($value);
	return $value;
}
function confirm_query($result_set){
	if(!$result_set){
	die("query failed".mysql_errno());
	}

}

function get_subject_set(){
	
				$subject_set=mysql_query("SELECT * FROM  subjects");
				
				if(!$subject_set){
				die("query failed");
				}
			return $subject_set;
}
function get_page_set($subject){
	$page_set=mysql_query("select * from pages where subject_id={$subject["id"]}");
				if(!$page_set){
				die("page set database query failed");
				}   echo"<ul>";
				return $page_set;
}
function get_subject_by_id($subject_id){
	$query="select * ";
	$query.="from subjects ";
	$query.=" where id ={$subject_id}";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$subject=mysql_fetch_array($result_set);
	if($subject){
	return $subject;
	}
else return null;}

function get_page_by_id($page_id){
	$query="select * ";
	$query.="from pages ";
	$query.=" where id ={$page_id}";
	$result_set=mysql_query($query);
	confirm_query($result_set);
	$page=mysql_fetch_array($result_set);
	if($page){
	return $page;
	}
else return null;}
function find_selected_page(){
	global $sel_subject;
	global $sel_page;
	if(isset($_GET["sub"])){
 
 $sel_subject=get_subject_by_id($_GET["sub"]);
 }
 else {$sel_subject=null; 
 }
 if(isset($_GET["page"])){
 
 $sel_page=get_page_by_id($_GET["page"]);}
 else {$sel_page=null;
 }
 
	}
	
	function navigation($sel_subject,$sel_page){
		
	  echo" <ul class=\"subject\">";
                 //3.perform database query
				$subject_set=get_subject_set();
				//4.use returned data
				while($subject=mysql_fetch_array($subject_set)){
					echo "<li";
					if($subject["id"]==$sel_subject){
				echo " class=\"selected\"";}
				
               
				echo"><a href=\"edit_subject.php?sub={$subject["id"]} \">{$subject["menu_name"]}</a></li>";
				$page_set=get_page_set($subject);
				    while($page=mysql_fetch_array($page_set)){
						echo"<li";
						if($page["id"]==$sel_page){
							
					     echo" class=\"selected\"";
						}
						
						 echo"><a href=\"content.php?page={$page["id"]} \">{$page["menu_name"]}</a></li>";
					}echo"</ul>";
				}
				   
                
                
                echo" </ul>";
	}
?>
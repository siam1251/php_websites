




<?php include("includes/header.php");
 include("includes/connection.php");
 include("includes/functions.php");?>
 <?php 
 find_selected_page();
 
 
 
 ?>


     	<table id="structure">
         	<tr>
            	<td id="navigation">
                   <?php navigation($sel_subject, $sel_page); ?>
                 <a href="new_subject.php">+add subject in database</a>
                
                	
                 </td>
             	 <td id="page">
                 	<h2> Content Area</h2>
                    <?php echo $sel_subject['menu_name']."</br>";
					 echo $sel_page['content'];?>
                   
                 </td>
               </tr>
            </table>
    <?php include("includes/footer.php"); ?> 
    <?php mysql_close($connection);?> 
 
<?php include("includes/header.php");
 include("includes/connection.php");
 include("includes/functions.php");?>


 <?php 
 find_selected_page(); 
 
 
 ?>


     	<table id="structure">
         	<tr>
            	<td id="navigation">
                    <?php navigation($sel_subject,$sel_page);?>
                 <td id="page">
                 	<h2>Add Subject</h2>
                    <form action="create_subject.php" method="post">
                    <label> Subject Name:<input type="text" name="menu_name" value="" id="menu_name" /></label>
                    <label> Position:<select name="position">
                    <?php 
					$subjects=get_subject_set();
					$count=mysql_num_rows($subjects);
					for($i=1;$i<=$count+1;$i++)
					echo"<option value=\" $i\">$i</option>";
					?>
                    </select></label>
                    <label>Visible:<input type="radio" name="visible" value="0" />No &nbsp;
                    <input type="radio" name="visible" value="1" />Yes</label>
                    <input type="submit" value="add Subject" />
                    </form>
                    
                  <br />
                  <a href="content.php">Cancel</a>
 
                    
                 </td>
                
                	
                
               </tr>
            </table>
    <?php include("includes/footer.php"); ?> 
    <?php mysql_close($connection);?> 
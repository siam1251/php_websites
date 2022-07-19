 
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
                 	<h2>edit Subject:<?php echo"{$sel_subject['menu_name']}"?></h2>
                   
                    <form action="edit_subject.php?sub=<?php echo urlencode($sel_subject['id']);?>"  method="post">
                    <label> Subject Name:<input type="text" name="menu_name" value="<?php echo $sel_subject['menu_name'] ;?>" id="menu_name" /></label><br />
                    <label> Position:<select name="position">
                    
                    
                    
                    <?php 
					$subjects=get_subject_set();
					$count=mysql_num_rows($subjects);
					for($i=1;$i<=$count+1;$i++){
						
					echo"<option value= {$i} ";
					if($sel_subject['position']==$i)
					{ echo " selected";}
					echo "> {$i} </option>";
					}
					?>
                    </select></label><br />
                    <label>Visible:<input type="radio" name="visible" value="0" <?php if(!$sel_subject['visible'])echo"checked";?> />No &nbsp;
                    <input type="radio" name="visible" value="1"<?php if($sel_subject['visible'])echo"checked";?> />Yes</label><br />
                    <input type="submit" value="add Subject" /><br />

                    </form>
                    
                  <br />
                  <a href="content.php">Cancel</a>
 
                    
                 </td>
                
                	
                
               </tr>
            </table>
    <?php include("includes/footer.php"); ?> 
    <?php mysql_close($connection);?> 
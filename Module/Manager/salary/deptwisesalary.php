<?php
include_once('../main.php');
?>
<html>
		<center>
		
		
						
						
							  
							 <?php 
								
							  $conn=mysql_connect('localhost','root','');
								      if(!$conn){
								         die('error connecting ');
								         }
								         mysql_select_db('anywear',$conn);
								         $sql="select * from department";
								         $res=mysql_query($sql);
								         while($ro=mysql_fetch_array($res))
								         		{
												//echo "$row[0]";
												echo "<form method='post' action='employeesalary.php'>";
												echo "<input type='hidden' name='dept' value='$ro[1]' />";
												echo "<input type='submit' value='$ro[1] salary'/>";
												echo "</form>";
												
												}
							  
											
							  ?>
							
		</center>
</html>
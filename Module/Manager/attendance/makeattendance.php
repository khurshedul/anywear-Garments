<?php
include_once('../main.php');
$atten=$_REQUEST['attendance'];
 $d=date("Y-m-d");
$conn=mysql_connect('localhost','root','');
if(!$conn){
   die('error connecting ');
   }
   mysql_select_db('anywear',$conn);
  
   foreach($atten as $a)
   {
	   
	   $sql="insert into attendance(emp_id,date) values('$a','$d')";
	   mysql_query($sql);
   }
   
   
   
   
   
  


  

?>
<html>
 <center>
 <h4>Attendance Successfully.</h4>
  <p>go home page.click Home button.<p>
 </center>
</html>
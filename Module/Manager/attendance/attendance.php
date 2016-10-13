<?php
include_once('../main.php');


?>


<html>
<form  action="makeattendance.php" method="post">
<center> <h1>Employee Attendance</h1></center>
<?php

$conn=mysql_connect('localhost','root','');
if(!$conn){
   die('error connecting ');
   }
   mysql_select_db('anywear',$conn);
   
  $dept=mysql_query("SELECT * FROM employee where department='$_POST[mydepartment]'");
  
 while($rn=mysql_fetch_array($dept))
{
	echo "<center>";

 echo "ID : $rn[0] Name: $rn[1]  Department: $rn[8]<input type='checkbox' checked='checked' name='attendance[]' value='$rn[0]' /> <br /><br />";

   }
   echo "<input type='submit' value='Make Attendance' />";
   echo "</center>";
?>

</form>
</html>
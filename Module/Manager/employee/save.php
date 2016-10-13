<?php 
include_once('../main.php');

 $conn=mysql_connect('localhost','root','');
								      if(!$conn){
								         die('error connecting ');
								         }
								         mysql_select_db('anywear',$conn);
									
$save="UPDATE `employee` SET `id`='$_POST[myid]',`name`='$_POST[myname]',`password`='$_POST[mypassword]',`address`='$_POST[myaddress]',`designation`='$_POST[mydesignation]',`phone_number`='$_POST[myphone]',`salary`='$_POST[mysalary]',`department`='$_POST[mydept]' where id='$_POST[preeid]'";

 mysql_query($save);


?>
<html>
 <center>
 <h4>Employee Updated Successfully</h4>
  <p>go home page.click Home button.<p>
 </center>
</html>
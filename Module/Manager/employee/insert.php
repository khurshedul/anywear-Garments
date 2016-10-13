<?php
include_once('../main.php');
$date=$_POST['myjoin'];

$save="insert into employee values('$_POST[myid]','$_POST[myname]','$_POST[mypassword]','$_POST[myaddress]','$_POST[mydesignation]','$_POST[myphone]','$date',$_POST[mysalary],'$_POST[mydepartment]')";
 mysql_query($save);

?>
<html>
 <center>
 <h4>New Employee Added Successfully</h4>
  <p>go home page.click Home button.<p>
 </center>
</html>